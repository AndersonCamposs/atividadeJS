<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>
            body {
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            #red-bar {
                height: 30px;
                width: 20%;
                margin-top: 50px;
                background: red;
            }
        </style>
    </head>
    <body>
        <div>
            Largura da barra vermelha (<span id="percentage">20%</span>): 
            <input type="range" min="0" max="100" value="20" id="rangeBar">
        </div>
        <div id="red-bar">

        </div>

        <script>
            
            const rangeBar = document.getElementById('rangeBar');
            rangeBar.addEventListener('mousemove', mudarLargura);
            
            
            
            function mudarLargura() {
                let rangeBarValue = rangeBar.value;
                let redBar = document.getElementById('red-bar');
                
                let percentage = document.getElementById('percentage');
                percentage.innerHTML = `${rangeBarValue}%`;
                
                redBar.style.width = `${rangeBarValue}%`;
                
            }
        </script>
    </body>
</html>
