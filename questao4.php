<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            
            function remover(elemento) {
                
            }
            
            function adicionar() {
                let inputLista = document.getElementById("inputLista");
                let lista = document.getElementById("lista");
                
                let textoInput = inputLista.value;
                
                if (textoInput === '') {
                    alert("Por favor, digite algo!");
                    return;
                }
                
                let botaoRemover = document.createElement("button");
                botaoRemover.innerHTML = "Remover";
                botaoRemover.onclick = (event) => {
                    let itemLista = event.target.parentNode;
                    itemLista.style.display = "none";
                }
                
                let novoElementoLista = document.createElement("li");
                novoElementoLista.innerHTML = textoInput;
                novoElementoLista.appendChild(botaoRemover);
                
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
