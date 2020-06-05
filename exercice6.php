<?php 
    $title = 'Exercice 6';

    include 'header.php';
    $age = 18;
?>

<h2>Exercice 6</h2>
    <p><?php
        if($age >= 18){
            echo 'Tu es majeur';
        }else{
            echo 'Tu n\'es pas majeur';
        }
    ?>
    </p>

<?php 
    include 'footer.php';
?>