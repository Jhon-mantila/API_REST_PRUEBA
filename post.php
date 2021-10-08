<html>
    <head>
        <meta charset="utf-8">
        <title>title</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
<div class="container">
    
    <?php 
    $id_user = $_GET['id'];
    ?>
    
    <h1>ABC post: Id del Usuario <?php echo $id_user;?></h1>
    
        <table id="Lista" class="table table-hover table-striped table-responsive">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
        <?php
        
        
         
         $url = "https://jsonplaceholder.typicode.com/users/$id_user/posts";             
      
         $xml = file_get_contents($url);
         
         $obj = json_decode($xml, true);
         
         foreach ($obj as $valor){
             
             //echo $valor['title'];
             echo '<tr>';
             echo nl2br("<td><a href='comentarios.php?id=$valor[id]'>" .$valor['id']. "</a></td><td> ". $valor['title']. "</td><td> ". $valor["body"] .  "</td>");
             echo '</tr>';
         }
        ?>
        </table>
        
           
    </div>     
    </body>
</html>

