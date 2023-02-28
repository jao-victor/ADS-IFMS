<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Voltar</a>
                </li>

            </ul>
        </div>
    </nav>


    <div class="row d-flex justify-content-center">

        <div class="col-6">

        <form method="POST" action="salvarmoto.php">
            <div class="mb-3 mt-3">
                <label for="velocidade" class="form-label">Velocidade Máx.:</label>
                <input type="text" class="form-control" id="velocidade" placeholder="Velocidade" name="velocidade">
            </div>
            <div class="mb-3">
                <label for="aro" class="form-label">Aro: </label>
                <input type="text" class="form-control" id="aro" placeholder="Aro" name="aro">
            </div>
            <div class="mb-3">
                <label for="placa" class="form-label">Placa: </label>
                <input type="text" class="form-control" id="placa" placeholder="Placa" name="placa">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">categoria: </label>
                <input type="text" class="form-control" id="categoria" placeholder="Categoria" name="categoria">
            </div>
            <div class="mb-3">
                <label for="chassi" class="form-label">Chassi: </label>
                <input type="text" class="form-control" id="chassi" placeholder="Chassi" name="chassi">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        </div>

    </div>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>