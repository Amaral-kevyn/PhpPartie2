<?php 
    $title = 'Exercice 7';
    include 'header.php';

?>

<h2>Exercice 7</h2>

<p>
    <?php

        function Who ($age,$gender){
            if($age < 18 && $gender == 'Homme'){
                echo 'Vous êtes un homme et vous êtes mineur';
            }else if($age > 18 && $gender == 'Homme'){
                echo 'Vous êtes un homme et vous êtes majeur';
            }else if($age < 18 && $gender == 'Femme'){
                echo 'Vous êtes une femme et vous êtes mineur';
            }else if ($age > 18 && $gender == 'Femme'){
                echo 'Vous êtes une femme et vous êtes majeur';
        }}

    echo who(12,'Femme');

    ?>
</p>

<?php 
    include 'footer.php';
?>