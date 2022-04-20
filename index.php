<!DOCTYPE html>
<html>
<head>
   <title>doc</title>
</head>
<body>
 
   <?php
 
   require('database/data.php');
   $array = array();

   $array ['_embedded'] = array(

    "employees" => array(



    )

    );
 
   $array = ['link'];
   $_metodoClient = $_SERVER{'REQUEST_METHOD'};
 
   if($_metodoClient == "GET"){
 
       $query = "SELECT * FROM employees ORDER BY id LIMIT 0,20"
       or die ("Query fallita" . mysqli_error($connssione). " " . mysqli_errno($connessione));
       $result = mysqli_query($connessione, $query);
 
       while($row = mysqli_fetch_array($result)){
 
           $array1 = [

            'id' => $row["id"],
            'birth_date' => $row["birth_date"],
            'first_name' => $row["first_name"],
            'last_name' => $row["last_name"],
            'gender' => $row["gender"]
          
           ]   ;
           
           array_push($array, array($array1));
 
       }
 
       var_dump($array);
       
       echo "è arrivata una richiesta get";
   }else if($_metodoClient == "POST"){
       echo "è arrivata una richiesta post";
   }else if($_metodoClient == "DELETE"){
       echo "è arrivata una richiesta delete";
   }else if($_metodoClient == "PUT"){
       echo "è arrivata una richiesta put";
   }
 
   ?>
  
</body>
</html>

