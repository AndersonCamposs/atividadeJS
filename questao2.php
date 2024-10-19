<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>
        <p>Ao passar o mouse sobre um elemento, a cor de fundo deve mudar.
            Objetivo: Praticar eventos de mouse e manipulação de estilos CSS.</p>

        <div id="elementoQueVaiMudar">
            Este texto vai mudar
        </div>
        <script>
            const elementoQueVaiMudar = document.getElementById("elementoQueVaiMudar");
            elementoQueVaiMudar.addEventListener("mouseover", () => {
                elementoQueVaiMudar.style.color = "red";
            });
            elementoQueVaiMudar.addEventListener("mouseout", () => {
                elementoQueVaiMudar.style.color = "black";
            });
        </script>
    </body>
</html>
