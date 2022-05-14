<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>User view</title>
  
</head>
<body>
    <?php
        
       // echo $results;
        
         foreach($results as $object){
         echo $object->id . " " . $object-> username . " " . $object-> password . "<br>";
         }
    ?>
</body>
</html>