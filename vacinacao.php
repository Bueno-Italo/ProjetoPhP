<!DOCTYPE html>
<html>
   <head>
    <meta="UTF-8">
    <title>Carteira de Vacinação para Pets</title>
    <style>
        .form-section{
            display: none;
        }
        .form-section.active{
            display: block;
        }
    </style>
   </head>
   <body>
    <h1>Cadastro de Vacinação para Pets</h1>

     <!-- Formulário de Cadastro de Pet -->

     <div id="form-pet" class="form-section active">
        <h2>Cadastro de Pet</h2>
        <form id="cadastro-form">
            <label for="proprietario">Proprietário:</label><br>
            <input type="text" id="proprietario" name="proprietario" required><br>
            <label for="endereco">Endereço:</label><br>
            <input type="text" id="endereco" name="endereco" required><br>
            <label for="telefone">Telefone:</label><br>
            <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10}" required><br>
            <label for="numero">Número:</label><br>
            <input type="number" id="numero" name="numero" min="1" max="9999" required><br>
            <label for="nome_pet">Nome do Pet:</label><br>
            <input type="text" id="nome_pet" name="nome_pet" required><br>
            <label for="data_nascimento">Data de nascimento:</label><br>
            <input type="date" id="data_nascimento" name="data_nascimento" required><br>
            <label for="especie">Espécie</label>
            <select id="especie" name="especie">
                <option value="cao">Canina</option>
                <option value="gato">Felinos</option>
            </select><br>
            <label for="sexo">Sexo</label>
            <select id="sexo" name="sexo">
                <option value="macho">Macho</option>
                <option value="femea">Fêmea</option>
            </select><br>
            <label for="raca">Raça:</label><br>
            <input type="text" id="raca" name="raca" required><br>
            <label for="pelagem">Pelagem:</label><br>
            <input type="text" id="pelagem" name="pelagem" required><br>
            <input type="button" value="Próximo" onclick="showNextForm()">
        </form>
     </div>  
    <!-- Formulário de Detalhes de Vacinação -->
     <div id="form-vacinacao" class="form-section">
        <h2>Detalhes da Vacinação</h2>
        <form id="vacina-form" action="salvar_vacina.php" method="post">
            <input type="hidden" name="pet_nome" id="hidden_pet_nome">
            <label for="vacina_nome">Nome da Vacina:</label><br>
            <input type="text" id="vacina_nome" name="vacina_nome" required><br>
            <label for="date">Data da Vacinação:</label><br>
            <input type="" id="vacina_data" name="vacina_data" required><br>
            <label for="veterinario">Nome do veterinário:</label>
            <input type="text" id="veterinario" name="veterinario" required><br>
            <label for="vermifugo">Vermifugo:</label><br>
            <input type="checkbox" id="vermifugo" name="vermifugo"><br>
            <label for="observacoes">Observações:</label><br>
            <textarea id="observacoes" name="observacoes"></textarea><br>
            <input type="submit" value="Salvar">
            <input type="button" value="Voltar" onclick="showPreviousForm()">

       

        </form>
     </div>
     <script>
        function showNextForm(){
            var cadastroForm = document.getElementById('cadastro-form');
            var petName = document.getElementById('nome_pet').value;
            if(cadastroForm.checkvalidity()){
                document.getElementById('hidden_pet_name').value = petName;
                documento.getElementById('form-pet').classList.remove('active');
                documento.getElementById('for-vacinacao').classList.add('active');
            }else{
                cadastroForm.reportValidity();
            }
        }

        function showPreviousForm() {
            document.getElementById('form-vacinacao').classList.remove('active');
            document.getElementById('form-pet').classList.add('active');
        }
     </script>
   </body>
</html>
