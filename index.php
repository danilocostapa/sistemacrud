<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <?php

    include("navbar.php")
    ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de usuários
                            <a href="usuario-create.php" class="btn btn-primary float-end">Cadastrar Usuário</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Data Nascimento</th>
                                    <th>Perfil</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>1</td>
                                <td>Danilo</td>
                                <td>bass.danilo@gmail.com</td>
                                <td>08/08/1985</td>
                                <td>Administrador</td>
                                <td>
                                    <a href="" class="btn btn-secondary btn-sm">Ver</a>
                                    <a href="" class="btn btn-success btn-sm">Editar</a>
                                    <form action="" method="POST" class="d-inline"></form>
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>