<?php
         $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "";
         $dbname = "thecoffeecode";
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         // echo 'Connected successfully';
      
         if(isset($_POST['reserveTableBtn'])) {
            $name = $_POST['name'];
            $people = $_POST['people'];
            $date = $_POST['date'];
            $contact = $_POST['contact'];
            $message = $_POST['message'];

            $sql = "INSERT INTO tablereservation VALUES ('$name', '$people', '$date', '$contact', '$message' ) ";
            if(mysqli_query($conn, $sql)){  
               echo "Information updated in database succesfully..!!";  
            }
            else{  
               echo "Could not insert record: ". mysqli_error($conn);  
            }
         }
         
         
         mysqli_close($conn);

         

?>