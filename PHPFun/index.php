<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kim's Stuff</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body bgcolor="#E6E6FA">
        <p>
          <?php
           
            $myArray=array ('Hilbert','Copernicus','Prince');
            echo "<br />"."What are the names of Kim's pets?"."<br />";
            foreach ($myArray as $item){
                echo "<br />".$item."<br />";
            }
            define ('SITELINK', 'http://www.stackoverflow.com');

        ?>
        <img src="picture.jpg" width="250" height="175" title="Pretty picture">
        <?php
        echo "<br />"
        ?>
<a href="<?php echo SITELINK; ?>">Go to home!</a>
        </p>
    </body>
</html>
