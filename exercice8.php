<?php 
    $title = 'Exercice 8';

    include 'header.php';
    $isEasy = NULL;
?>

<h2>Exercice 8</h2>   
    <p><?php
        if($isEasy == true){
            echo 'c\'est ok !!';
        }else{
            echo 'c\'est pas bon !!!';
        }
    ?></p>

<?php 
    include 'footer.php';
?>