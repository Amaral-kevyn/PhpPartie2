<?php 
    $title = 'Exercice 2';

    include 'header.php';
    $isEasy = true;
?>

<p><?php
        if($isEasy == true){
            echo 'C\'est facile';
        }if($isEasy == false){
            echo 'C\'est difficile';
        }
    ?></p>

<?php 
    include 'footer.php';
?>