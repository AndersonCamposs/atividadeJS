<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>            
            function pesquisarPokemon() {
                let inputNumeroPokemon = document.getElementById("numero");
                let numero = inputNumeroPokemon.value;
                let inputNomePokemon = document.getElementById("nome");
                
                fetch("https://pokeapi.co/api/v2/pokemon/"+numero)
                        .then(res => {
                            return res.json();
                        })
                        .then(json => {
                            inputNomePokemon.value = json.forms[0].name;
                        })
                        .catch(e => {
                            return e.message;
                        });
                        
                
            }
        </script>
    </head>
    <body>
        <div>
            <input type="number" id="numero">
            <input type="button" value="Pesquisar Pokémon"
                   onclick="pesquisarPokemon()">
            <h1>Dados do Pokémon</h1>
            <div>
                Nome: <input type="text" id="nome" readonly>
            </div>
        </div>
    </body>
</html>
