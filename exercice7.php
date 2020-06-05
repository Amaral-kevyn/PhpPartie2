<?php 
    $title = 'Exercice 7';

    include 'header.php';
    $isEasy = false;
?>

<h2>Exercice 7</h2>   
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