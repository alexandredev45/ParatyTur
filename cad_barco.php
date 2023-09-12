<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Barco</title>
    <!-- Inclua os arquivos CSS e JS do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cadastro de Barco</h1>
        <form action="movimento/movimento_barco.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Barco</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome do barco" required>
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Proprietario</label>
                <input type="text" class="form-control" id="proprietario" placeholder="Digite o nome de quem pertence o barco" required>
            </div>
            <div class="mb-3">
                <label for="comprimento" class="form-label">Comprimento do Barco (metros)</label>
                <input type="number" class="form-control" id="comprimento" placeholder="Digite o comprimento do barco" required>
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Capacidade</label>
                <input type="number" class="form-control" id="capacidade" placeholder="Digite a capacidade do barco" required>
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Ano de Fabricação</label>
                <input type="number" class="form-control" id="ano" placeholder="Digite o ano de fabricação" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <!-- Inclua o arquivo JS do Bootstrap 5 (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
