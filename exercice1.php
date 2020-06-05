<?php 
    $title = 'Exercice 1';

    include 'header.php';
    $age = 17;
?>

<h1>Exercice 1</h1>

<p>
    <?php

        if($age < 18){
            echo 'Vous etes mineur';
        }else{
            echo 'Vous etes majeur';
        }

    ?>
</p>

<?php 
    include 'footer.php';
?>