<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .visivel {
                display: block;
                font-size: 18px;
            }
            
            .invisivel {
                display: none;
            }
        </style>
        <script>
            function alterarVisibilidade() {
                let divQueSome = document.getElementById("divQueSome");
                
                if (divQueSome.className === "visivel") {
                    divQueSome.classList.remove("visivel");
                    divQueSome.classList.add("invisivel");
                } else {
                    divQueSome.classList.remove("invisivel");
                    divQueSome.classList.add("visivel");
                }
            }
        </script>
    </head>
    <body>
        <p>Ao clicar em um botão, um elemento deve alternar entre visível 
        e oculto. Objetivo: Praticar a manipulação de estilos CSS para controlar a visibilidade.</p>
        <div>
            <input type="button" value="Sumir/Aparecer elemento"
                   onclick="alterarVisibilidade()">
        </div>
        <div id="divQueSome" class="visivel">
            Texto que some
        </div>
    </body>
</html>
