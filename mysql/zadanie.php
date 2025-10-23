
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}
echo "Połączono <br>";

$database = "szkola";
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if (mysqli_query($conn, $sql)) {
    echo "Baza danych '$database' została utworzona lub już istnieje.<br>";
} else {
    echo "Błąd " . mysqli_error($conn) . "<br>";
}

if (mysqli_select_db($conn, $database)) {
    echo "Wybrano bazę danych '$database'.<br>";
} else {
    die("Błąd przy wyborze bazy: " . mysqli_error($conn));
}

$sql = "CREATE TABLE IF NOT EXISTS `5TB12` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(30) NOT NULL,
    numer_dziennika INT NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
    echo "Tabela istnieje.<br>";
} else {
    echo "Błąd przy tworzeniu tabeli: " . mysqli_error($conn) . "<br>";
}

$imie = "Jan";
$numer = 15;
$email = "jan@example.com";

$sql = "INSERT INTO `5TB12` (imie, numer_dziennika, email) VALUES ('$imie', $numer, '$email')";
if (mysqli_query($conn, $sql)) {
    echo "Dodano dane: $imie, nr $numer<br>";
} else {
    echo "Błąd przy dodawaniu danych: " . mysqli_error($conn);
}

?>