<?php 
    $title = 'Exercice 3';

    include 'header.php';
    $age = 12;
    $gender = 'Femme';

?>

<h2>Exercice 3</h2>
    <p><?php
    if($age < 18 && $gender == 'Homme'){
        echo 'Vous êtes un homme et vous êtes mineur';
    }else if($age > 18 && $gender == 'Homme'){
        echo 'Vous êtes un homme et vous êtes majeur';
    }else if($age < 18 && $gender == 'Femme'){
        echo 'Vous êtes une femme et vous êtes mineur';
    }else if ($age > 18 && $gender == 'Femme'){
        echo 'Vous êtes une femme et vous êtes majeur';
    }
    ?>
    </p>

<?php 
    include 'footer.php';
?>