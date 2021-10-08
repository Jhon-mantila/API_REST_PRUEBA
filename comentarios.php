<html>
    <head>
        <meta charset="utf-8">
        <title>title</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
<div class="container">
    
    <?php 
    $id_post = $_GET['id'];
    ?>
    
    <h1>ABC Comentarios: Id del post <?php echo $id_post;?></h1>
    
        <table id="Lista" class="table table-hover table-striped table-responsive">
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>Body</th>
                <th>Email</th>
            </tr>
        <?php

         $url = "https://jsonplaceholder.typicode.com/posts/$id_post/comments";             
      
         $xml = file_get_contents($url);
         
         $obj = json_decode($xml, true);
         
         foreach ($obj as $valor){
             
             //echo $valor['title'];
             echo '<tr>';
             echo nl2br("<td>" .$valor['id']. "</td><td> ". $valor['name']. "</td><td> ". $valor["body"] .  "</td><td>" . $valor['email'] . "</td>");
             echo '</tr>';
         }
        ?>
        </table>
        <a href="index.php">Usuarios</a>
        
    </div>     
    </body>
</html>