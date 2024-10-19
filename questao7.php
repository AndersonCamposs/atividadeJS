<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            
            .container {
                height: 100%;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            
            
            #imgs img{
                width: 400px;
                height: 500px;
            }
        </style>
            
            
        
    </head>
    <body>
        
        <div class="container">
            <h1 style="margin: 15px;">Passe o mouse sobre a imagem</h1>
            <div id="imgs">
               <img id='img' src="./img/7_1.jpg" alt="alt"/> 
            </div>
        </div>
        
        <script>
            
            document.getElementById('imgs').addEventListener('mouseover', trocarImg);
            document.getElementById('imgs').addEventListener('mouseout', trocarImg);
            
            function trocarImg() {
                let tagImg = document.getElementById('img');
                
                if (tagImg.src === 'http://localhost/WEB_I/aula_18_10/atividadeJS/img/7_1.jpg') {
                    tagImg.src = 'http://localhost/WEB_I/aula_18_10/atividadeJS/img/7_2.jpg';
                } else {
                    tagImg.src = 'http://localhost/WEB_I/aula_18_10/atividadeJS/img/7_1.jpg';
                }
            }
                    
        </script>
    </body>
</html>
