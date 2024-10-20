<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body {
                margin: 0;
                padding: 0;
            }
            
            #container {
                width: 100%;
                height: 100%;
            }

            .nav {
                display: flex;
                justify-content: space-between;
                height: 5%;
                align-items: center;
                padding: 0 5px;
            }

            .main {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .main p {
                width: 30%;
                height: 50%;
                font-size: 18px;
                margin-top: 5%;
                padding: 15px;
            }

            .light {
                background: #fff;
                color: #000;
            }
            
            .dark {
                background: #000;
                color: #fff;
            }
            
            .light .nav {
                border-bottom: 2px solid #000;
            }
            
            .dark .nav {
                border-bottom: 2px solid #fff;
            }
        </style>
    </head>
    <body>
        <div class="light" id="container">
            <div class="nav">
                <h1>Questão 13</h1>
                <input type="button" value="Mudar tema da página" onclick="alternarTema()">
            </div>
            <div class="main">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                </p>
            </div>
        </div>
        <script>
            function alternarTema() {
                let container = document.getElementById('container');
                if (container.className === 'light') {
                    container.classList.remove('light');
                    container.classList.add('dark');
                } else {
                    container.classList.remove('dark');
                    container.classList.add('light');
                }
            }
        </script>
    </body>
</html>
