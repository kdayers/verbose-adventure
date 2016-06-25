<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello World!</title>
    </head>
    <body bgcolor="#E6E6FA">
        <?php
           
            $myArray=array ('Hilbert','Copernicus','Prince');
            echo "<br />"."What are the names of Kim's pets?"."<br />";
            foreach ($myArray as $item){
                echo "<br />".$item."<br />";
            }
            define ('SITELINK', 'http://www.stackoverflow.com');

        ?>
        <img src="ranunkel.jpg" width="250" height="175" title="Logo of a company" alt="Logo of a company">
        <?php
        echo "<br />"
        ?>
<a href="<?php echo SITELINK; ?>">Go to home!</a>

    </body>
</html>
