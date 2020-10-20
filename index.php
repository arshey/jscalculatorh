<?php 
require('vendor/autoload.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <title>Calculatrice</title>
    <script>
        //fonction qui évalue le chiffre et renvoie la sortie
        function calculer() {
            let a = document.getElementById("output").value
            let b = eval(a)
            document.getElementById("output").value = b
        }
        //fonction qui affiche la valeur
        function afficher(val) {
            document.getElementById("output").value += val
        }
        //fonction qui efface l'écran 
        function effacer() {
            document.getElementById("output").value = ""
        } 
    </script>
</head>

<body>

    <div class="container text-center w-25  mt-5 ">
        <div class="jumbotron text-center">
            <h1 class="display-5">JS-Calculatrice</h1>
        </div>
    </div>


    <div class="container mt-5 w-25">
        <div class="row">
            <div class="col-sm-9">
                <input id="output" disabled class=" form-control w-100">
            </div>
            <div class="col-sm-3">
                <button onclick="effacer()" class="btn btn-danger w-100">C</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3">
                <button onclick="afficher('1')" class="btn btn-primary w-100">1</button>
            </div>
            <div class="col-sm-3">
                <button onclick="afficher('2')" class="btn btn-primary w-100">2</button>
            </div>
            <div class="col-sm-3">
                <button onclick="afficher('3')" class="w-100 btn btn-primary">3</button>
            </div>
            <div class="col-sm-3">
                <button onclick="afficher('+')" class="w-100 btn btn-success">+</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3">
                <button onclick="afficher('4')" class="btn btn-primary w-100">4</button>
            </div>
            <div class="col-sm-3">
                <button onclick="afficher('5')" class="btn btn-primary w-100">5</button>
            </div>
            <div class="col-sm-3">
                <button onclick="afficher('6')" class="w-100 btn btn-primary">6</button>
            </div>
            <div class="col-sm-3">
                <button onclick="afficher('-')" class="w-100 btn btn-success">-</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3">
                <button onclick="afficher('7')" class="btn btn-primary w-100">7</button>
            </div>
            <div class="col-sm-3">
                <button onclick="afficher('8')" class="btn btn-primary w-100">8</button>
            </div>
            <div class="col-sm-3">
                <button onclick="afficher('9')" class="w-100 btn btn-primary">9</button>
            </div>
            <div class="col-sm-3">
                <button onclick="afficher('*')" class="w-100 btn btn-success">x</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3">
                <button onclick="afficher('.')" class="btn btn-primary w-100">.</button>
            </div>
            <div class="col-sm-3">
                <button onclick="afficher('0')" class="btn btn-primary w-100">0</button>
            </div>
            <div class="col-sm-3">
                <button onclick="calculer()" class="w-100 btn btn-primary">=</button>
            </div>
            <div class="col-sm-3">
                <button onclick="afficher('/')" class="w-100 btn btn-success">/</button>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
