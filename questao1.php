<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function alterarTexto() {
                document.getElementById('textoQueVaiMudar')
                        .innerHTML = "Mudou o texto";
            }
        </script>
    </head>
    <body>
        <p>Ao clicar em um botão, o texto de um parágrafo específico deve ser alterado. Objetivo:
            Praticar a seleção de elementos e a manipulação de texto.</p>
        <div>
            <input type="button" value="Alterar texto" onclick="alterarTexto()">
        </div>
        <div id="textoQueVaiMudar">
            Oi turma!
        </div>
    </body>
</html>
