<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function aparecerMensagem() {
                let inputTexto = document.getElementById('inputWord');
                let textoDigitado = inputTexto.value;
                
                if (textoDigitado === '') {
                    alert('Você não digitou nada');
                } else {
                    alert(`Você digitou: ${textoDigitado}`);
                    inputTexto.value = '';
                }
            }
        </script>
    </head>
    <body>
        <div>
            Digite alguma coisa: <input type="text" id="inputWord">
        </div>
        <div>
            <input type="button" value="Enviar" onclick="aparecerMensagem()">
        </div>
    </body>
</html>
