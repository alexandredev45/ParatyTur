<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Passeio</title>
    <!-- Inclua os arquivos CSS e JS do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cadastro de Passeio</h1>
        <form action="movimento/movimento_passeio.php"  method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Passeio</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do passeio" required>
            </div>
            <div class="mb-3">
                <label for="local" class="form-label">Local do Passeio</label>
                <input type="text" class="form-control" id="local" name="partida" placeholder="Digite o local do passeio" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">duraçäo do passeio</label>
                <input type="text" class="form-control" id="duracao" name="duracao" placeholder="Digite a duração do passeio" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o valor do passeio" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição do Passeio</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Digite a descrição do passeio" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <!-- Inclua o arquivo JS do Bootstrap 5 (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
