<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function contar() {
                let span = document.getElementById('contador');
                let contador = Number(span.innerHTML);
                
                contador += 1;
                
                span.innerHTML = contador;
            }
        </script>
    </head>
    <body>
        Valor do contador: <span id="contador">0</span>
        <br>
        <input type="button" value="Incrementar" onclick="contar()">
    </body>
</html>
