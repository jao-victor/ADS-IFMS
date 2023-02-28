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


    <?php
            
            $modelo = isset($_POST['velocidade'])? $_POST['velocidade']: "null";
            $cor = isset($_POST['aro'])? $_POST['aro']: "null";
            $placa = isset($_POST['placa'])? $_POST['placa']: "null";
            $ano = isset($_POST['categoria'])? $_POST['categoria']: "null";
            $chassi = isset($_POST['chassi'])? $_POST['chassi']: "null";

        
    ?>


    <div class="row d-flex justify-content-center">

        <div class="col-6">

            <?php 

                echo "<div class='h2 text-center'> Velocidade: {$velocidade} </div>";
                echo "<div class='h2 text-center'> Aro: {$aro} </div>";
                echo "<div class='h2 text-center'> Placa: {$placa} </div>";
                echo "<div class='h2 text-center'> Categoria: {$categoria} </div>";
                echo "<div class='h2 text-center'> Chassi: {$chassi} </div>";
            
            ?>

        </div>

    </div>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>