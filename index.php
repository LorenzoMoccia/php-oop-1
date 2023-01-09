<?php 
        class Movie{
            public $titolo;
            public $regista;
            public $date;

            function __construct($_titolo, $regista){
                $this->titolo = $_titolo;
                $this->regista = $regista;
            }

            function setReleaseDate(){
                $date = date("d/m/Y");
            }
            
        }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>