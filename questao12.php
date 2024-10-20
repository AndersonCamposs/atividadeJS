<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            #titulo {
                margin: 10px;
                padding: 10px;
                border-radius: 10px;
            }

            .no-styled {
                color: #000;
                border: 3px solid #000;
                background: #fff;
                font-style: normal;
            }

            .styled {
                color: #b84f39;
                border: 3px solid #1189c1;
                background: #c9b6b2;
                font-style: italic;
            }
        </style>

        
    </head>
    <body>
        <h1 id="titulo" class="no-styled">Passe o mouse sobre mim</h1>
        
        <script>
            document.getElementById('titulo').addEventListener('mouseover', mudarEstilo);

            function mudarEstilo() {
                let titulo = document.getElementById('titulo');

                if (titulo.classList.contains('no-styled')) {
                    titulo.classList.remove('no-styled');
                    titulo.classList.add('styled');
                } else {
                    titulo.classList.remove('styled');
                    titulo.classList.add('no-styled');
                }
            }

        </script>
    </body>
</html>
