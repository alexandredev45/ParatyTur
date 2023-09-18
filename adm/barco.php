<?php ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Administrador</title>
</head>
<style>
  main{
    margin: 1rem 3rem;
  }
</style>
<body>
<header>
  <?php 
    include_once "../adm/menu.php";
  ?>
</header>

<?php 
echo "Barco";
?>
<main>
<table class="table table-striped">
  <thead>
    <tr class=>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Proprietario</th>
      <th scope="col">Comprimento</th>
      <th scope="col">Capacidade</th>
      <th scope="col">Ano</th>
      <th scope="col">+</th>
      <th scope="col">...</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
  </tbody>
</table>
</main>

</body>
</html>