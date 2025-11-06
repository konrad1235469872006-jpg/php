<!DOCTYPE html>  
<html lang="pl">  
<head>  
    <meta charset="UTF-8" />  
    <title>Proste dzialania</title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            margin: 20px;  
        }  
        h1 {  
            font-weight: bold;  
        }  
        input {  
            margin: 5px 0 10px 0;  
            padding: 5px;  
            width: 150px;  
        }  
        button {  
            margin-right: 5px;  
            padding: 5px 10px;  
            cursor: pointer;  
        }  
        #result {  
            margin-top: 15px;  
            font-weight: bold;  
        }  
    </style>  
</head>  
<body>  
  
    <h1>PROSTE DZIALANIA</h1>  
  
    <label>Podaj pierwsza liczbe: </label>  
    <input type="number" id="firstNumber" /><br/>  
  
    <label>Podaj druga liczbe: </label>  
    <input type="number" id="secondNumber" /><br/>  
  
    <button onclick="calculate('add')">DODAWANIE</button>  
    <button onclick="calculate('subtract')">ODEJMOWANIE</button>  
    <button onclick="calculate('multiply')">MNOZENIE</button>  
    <button onclick="calculate('divide')">DZIELENIE</button>  
  
    <div id="result"></div>  
  
    <script>  
        function calculate(operation) {  
            const firstInput = document.getElementById('firstNumber').value;  
            const secondInput = document.getElementById('secondNumber').value;  
            const resultDiv = document.getElementById('result');  
  
            if (firstInput === '' || secondInput === '') {  
                resultDiv.textContent = 'Prosze uzupelnic obie liczby.';  
                return;  
            }  
  
            const num1 = parseFloat(firstInput);  
            const num2 = parseFloat(secondInput);  
  
            if (operation === 'divide' && num2 === 0) {  
                resultDiv.textContent = 'Nie wolno dzielic przez zero.';  
                return;  
            }  
  
            let result;  
  
            switch (operation) {  
                case 'add':  
                    result = num1 + num2;  
                    break;  
                case 'subtract':  
                    result = num1 - num2;  
                    break;  
                case 'multiply':  
                    result = num1 * num2;  
                    break;  
                case 'divide':  
                    result = num1 / num2;  
                    break;  
                default:  
                    resultDiv.textContent = 'Nieznana operacja.';  
                    return;  
            }  
  
            resultDiv.textContent = 'Wynik: ' + result;  
        }  
    </script>  
  
</body>  
</html>  