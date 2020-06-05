<!--Exercice 5 Variable-->
<?php 
    $title = 'Exercice 5';
    include 'header.php';
    
    $gender = 'Homme';
?>

<h2>Exercice 5</h2>

<p>
    <?php
        
        if($gender == 'Homme'){
            echo 'C\'est un développeur ';
        }else{
            echo 'C\'est une développeuse ';
        }

    ?>
</p>

<?php 
    include 'footer.php';
?>