<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function adicionar() {
                let inputLista = document.getElementById("inputLista");
                let lista = document.getElementById("lista");
                
                let textoInput = inputLista.value;
                
                if (textoInput === '') {
                    alert("Por favor, digite algo!");
                    return;
                }
                
                let novoElementoLista = document.createElement("li");
                novoElementoLista.innerHTML = textoInput;
                
                lista.appendChild(novoElementoLista);
                
                inputLista.value = '';
            }
        </script>
    </head>
    <body>
        <p>
            Ao clicar em um botão, um novo item deve ser adicionado ao 
            final de uma lista HTML.
            Objetivo: Praticar a criação e adição de elementos ao DOM.
        </p>
        <div>
            <input type="text" id="inputLista">
            <input type="button" value="Adicionar Tarefa" onclick="adicionar()">
            <ul id="lista">
                
            </ul>

        </div>
    </body>
</html>
