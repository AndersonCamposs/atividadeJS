<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body {
                text-align: center;
            }
            
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .flex-row {
                flex-direction: row;
            }

            .flex-column {
                flex-direction: column;
            }

            img {
                height: 400px;
                width: 300px;
                margin: 20px
            }


        </style>
        
        <script>
            function reposicionarImgs() {
                let containerDasImgs = document.getElementById('container');
                
                if (containerDasImgs.classList.contains('flex-row')) {
                    containerDasImgs.classList.remove('flex-row');
                    containerDasImgs.classList.add('flex-column');
                } else {
                    containerDasImgs.classList.remove('flex-column');
                    containerDasImgs.classList.add('flex-row');
                }
            }
        </script>
    </head>
    <body>
        <input type="button" value="Mudar direção das imagens" onclick="reposicionarImgs()">
        <div id="container" class="container flex-row">

            <img src="./img/7_1.jpg" alt="alt"/>
            <img src="./img/7_2.jpg" alt="alt"/>

        </div>
    </body>
</html>
