<!DOCTYPE html>
<!---->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pousada</title>
    <!-- Inclua os arquivos CSS e JS do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cadastro de Pousada</h1>
        <form method="POST" action="movimento/movimento_pousada.php">
            <input type="hidden" name="id" value="<?php echo $id_pousada['id']; ?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Responsável</label>
                <input type="text" class="form-control" id="nome" name="nome_responsavel" placeholder="Digite o nome do responsavel" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Fantasia</label>
                <input type="text" class="form-control" id="nome_fantisia" name="nome_fantasia" placeholder="Digite o nome Fantasia" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Digite seu cnpj" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Rua</label>
                <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite o nome da sua rua" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o nome do seu bairro" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite o nome da sua cidade" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o nome do seu estado" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Credito</label>
                <input type="text" class="form-control" id="credito" name="credito" placeholder="Digite o nome do seu estado">
            </div>




            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <!-- Inclua o arquivo JS do Bootstrap 5 (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
