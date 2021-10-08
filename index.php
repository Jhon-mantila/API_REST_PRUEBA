<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h1>ABC</h1>
        <table id="Lista" class="table table-hover table-striped table-responsive">
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>email</th>
            </tr>
        <?php
         $url = "https://jsonplaceholder.typicode.com/users";
         
         $xml = file_get_contents($url);
         
         $obj = json_decode($xml, true);
         
         foreach ($obj as $valor){
             
             //echo $valor['title'];
             echo '<tr>';
             echo nl2br("<td><a href='post.php?id=$valor[id]'>" .$valor['id']. "</a></td><td> ". $valor['username']. "</td><td> ". $valor["email"] .  "</td>");
             echo '</tr>';
         }
        ?>
        </table>
        
           
    </div>     
    </body>
</html>
