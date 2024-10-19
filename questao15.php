<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            div {
                margin-bottom: 5px;
            }
        </style>
        <script>
            function consultarCEP() {
                let cep = document.getElementById("inputCEP").value;
                
                if (cep.length < 8 || cep.length > 8) {
                    alert("Preencha o campo de CEP");
                    return;
                }
                
                fetch(`https://viacep.com.br/ws/${cep}/json/`)
                    .then(res => {
                        return res.json();
                    })
                    .then(json => {
                        let logradouro = document.getElementById("logradouro");
                        let bairro = document.getElementById("bairro");
                        let cidade = document.getElementById("cidade");
                        let estado = document.getElementById("estado");
                        
                        if (json.logradouro === '') {
                            logradouro.readonly = 'false';
                        }
                        if (json.bairro === '') {
                            bairro.readonly = 'false';
                        }
                        
                        logradouro.value = json.logradouro;
                        bairro.value = json.bairro;
                        cidade.value = json.localidade;
                        estado.value = json.estado;
                    })
                    .catch(e => {
                        return e.message;
                    });
            }
        </script>
    </head>
    <body>
        CEP: <input type="number" place="Digite apenas números" id="inputCEP">
        <input type="button" value="Consultar" onclick="consultarCEP()">
        <h1>Dados</h1>
        
        <div>
            Logradouro:
            <input type="text" id="logradouro" readonly>
        </div>
        <div>
            Bairro:
            <input type="text" id="bairro" readonly>
        </div>
        <div>
            Cidade:
            <input type="text" id="cidade" readonly>
        </div>
        <div>
            Estado:
            <input type="text" id="estado" readonly>
        </div>
    </body>
</html>
