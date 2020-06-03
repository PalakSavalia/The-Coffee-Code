<?php
         $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "";
         $dbname = "thecoffeecode";
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }


         if(isset($_POST['placeEateryOrderBtn'])) {
            
            $name = $_POST['custName'];
            $result = $_POST['OrderNum'];
            $bb = $_POST['breadBasket'];
            $hg = $_POST['honeyGranola'];
            $bw = $_POST['belgianWaffle'];  
            $se = $_POST['scrambledEggs'];
            $bp = $_POST['blueBerry'];
            $co = $_POST['coff'];
            $choco = $_POST['chocolate'];
            $cor = $_POST['corretto'];
            $icet = $_POST['icet'];
            $soda = $_POST['sod'];
            $totalAmount = (int)$bb*225 + (int)$hg*299 + (int)$bw*169 + (int)$se*135 + (int)$bp*199 + (int)$co*69 + (int)$choco*119 + (int)$cor*159 + (int)$icet*99 + (int)$soda*49;
            // echo "$totalAmount";

            $sql = "INSERT INTO orders VALUES ('$result','$name','$bb','$hg','$bw','$se','$bp','$co','$choco','$cor','$icet','$soda','$totalAmount') ";
            if(mysqli_query($conn, $sql)){  
               echo "Information updated in database succesfully..!!";  
            }
            else{  
               echo "Could not insert record: ". mysqli_error($conn);  
            }
         }
         
         
         mysqli_close($conn);

?>