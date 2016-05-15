<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo '<h2>'."Les themes :".'</h2>';
        foreach ($theme as $theme): ?>
       <h3><?php echo $theme['nom'] ?></h3>
        <p><a href="view/<?php echo $theme['idTheme'] ?>">Voir les articles</a></p>
        <?php endforeach ?>
        
       <?php echo '<h2>'."Les auteurs : ".'</h2>';
       foreach ($utilisateurs as $utilisateurs): ?>
       <h3><?php echo $utilisateurs['nom']." ".$utilisateurs['prenom']?></h3>
        <p><a href="vue/<?php echo $utilisateurs['id_utilisateur'] ?>">Voir les articles</a></p> 
        <?php endforeach ?>       

    </body>
</html>
