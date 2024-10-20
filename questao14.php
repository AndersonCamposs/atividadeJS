<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
            body {
                margin: 0;
                padding: 0;
            }
            
            .container {
                 height: 100%;
                 width: 100%;
                 display: flex;
            }
            
            .container .side-left-bar {
                padding: 5px;
                height: 100%;
                width: 15%;
                border-right: 2px solid #000;
            }
            
            .container .side-right-bar {
                height: 100%;
                width: 75%;
                padding: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            
            input {
                font-size: 18px;
                padding: 5px;
                border-radius: 8px;
                background: #ccc;
            }
            
            input:hover {
                background: #fff;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="side-left-bar visible" id="left-bar">
                <p>Este conteúdo vai ser recolhido</p>
            </div>
            <div class="side-right-bar" id="right-bar">
                <input type="button" value="Exibir/Recolher barra lateral" onclick="mudarVisibilidade()">
            </div>
        </div>
        
        <script>
            function mudarVisibilidade() {
                let leftBar = document.getElementById('left-bar');
                let rightBar = document.getElementById('right-bar');
                
                
                if (leftBar.classList.contains('visible')) {
                    leftBar.classList.remove('visible');
                    leftBar.style.display = 'none';
                    rightBar.style.width = '100%';
                } else {
                    leftBar.classList.add('visible');
                    leftBar.style.display = 'flex';
                    rightBar.style.width = '75%';
                }
            }
        </script>
    </body>
</html>
