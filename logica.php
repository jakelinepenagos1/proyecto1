<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermecado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
         <img src="img/cow.png" width="30" height="30" alt="" loading="lazy">
            Supermercados la vaquita SA
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Principal <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logica.php">index</a>
            </li>
        </ul>
    </div>
    </nav>
</header>
<main>

    <div class="container">
        
        <div class="row justify-content-center mt-5">
            <div class="col-4">

                <form action="index.php" method="POST">
                    <h3 class="text-center mb-4">Factura de Compra</h3>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto1" name="producto1">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio1">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto2" name="producto2">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio2">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto3">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto4">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto5">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="botonCalcular">Calcular</button>
                </form>

              
                
                <?php if(isset($_POST["botonCalcular"])): ?>

                
                
                    <h6 class="mt-5"> 
                        <?php
                            
                            $precio1=$_POST["precio1"];
                            $producto1=$_POST["producto1"];

                            $precio2=$_POST["precio2"];
                            $producto2=$_POST["producto2"];

                            $total=$precio1+$precio2;

                            echo("El producto 1 es: ".$producto1." -----($) ".$precio1);
                            echo("<br>");
                            echo("El producto 2 es: ".$producto2." -----($) ".$precio2);
                            echo("<br>");
                            echo("<br>");
                            echo("******************************");
                            echo("<br>");
                            echo("El total de la compra fué de: ".$total);

                            


                        ?>
                    </h6>
               
                
               
                

                <?php endif ?>

                

            </div>
        </div>




       