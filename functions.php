    <?php
	
	include 'db.php';
	 $con = getdb();


if(isset($_POST["Import"])){
 $mapp_array = array();
 $mapp_array2 = array();

if($_POST['emp']=='Choose a Column'||$_POST['name']=='Choose a Column'||$_POST['Dateob']=='Choose a Column'||$_POST['Depatment']=='Choose a Column'||$_POST['Join']=='Choose a Column'){

echo "<script type=\"text/javascript\">
                alert(\"Incorrect Mapping.\");
                window.location = \"index.php\"
              </script>";
}
else{
 
  $mapp_array["emp_code"]=$_POST['emp'];
  $mapp_array["emp_name"]=$_POST['name'];
   $mapp_array["emp_dept"]=$_POST['Depatment'];
   $mapp_array["emp_dob"]=$_POST['Dateob'];
   $mapp_array["emp_join_date"]=$_POST['Join'];

}
foreach($mapp_array as $key => $v){
    
    if($v=="column1"){
$mapp_array2[0]=$key;

    }
       if($v=="column2"){
$mapp_array2[1]=$key;

    }
         if($v=="column3"){
$mapp_array2[2]=$key;

    }
         if($v=="column4"){
$mapp_array2[3]=$key;

    }
         if($v=="column5"){
$mapp_array2[4]=$key;

    }
 

}






        $totCols=2;
        $row=-1;
        $filename=$_FILES["file"]["tmp_name"];    
         if($_FILES["file"]["size"] > 0)
         {

        
 

           $file = fopen($filename, "r");
 while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
 //echo"check";
               {

                $row++;
               }

         if($row>=0 && $row<=20){
 
   fclose($file);

           $file = fopen($filename, "r");
            while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
               {


        $mapp_fileds=$mapp_array2[0].",".$mapp_array2[1].",".$mapp_array2[2].",".$mapp_array2[3].",".$mapp_array2[4];

       


                 $sql = "INSERT into geo_12_users (".$mapp_fileds.") 
                       values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";

                    
                      
                       
            if (!mysqli_query($con,$sql)){
              echo "<script type=\"text/javascript\">
                  alert(\"Invalid File:Please Upload CSV File.\");
                  window.location = \"index.php\"
                  </script>";    
            
            }
            else {
                echo "<script type=\"text/javascript\">
                alert(\"CSV File has been successfully Imported.\");
                window.location = \"index.php\"
              </script>";
            }
              
         
         }

         
          fclose($file);
        }
        else if($row<=2){
          echo "<script type=\"text/javascript\">
                alert(\"Imported file containe atleast 2 row.\");
                window.location = \"index.php\"
              </script>";
         }
         else{
             
             
          echo "<script type=\"text/javascript\">
                alert(\"Please check the file.\");
                window.location = \"index.php\"
              </script>";
         
         }
         }

         }
         
         
       
	      function get_all_records(){
        $con = getdb();
        $Sql = "SELECT * FROM geo_12_users";
        $result = mysqli_query($con, $Sql);  
        if (mysqli_num_rows($result) > 0) {
         echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                 <thead><tr><th>EMPLOYEE CODE</th>
                              <th>NAME</th>
                              <th>DEPARTMENT</th>
                              <th>Date Of Birth </th>
                              <th>Join Date</th>
                            </tr></thead><tbody>";
         while($row = mysqli_fetch_assoc($result)) {
             echo "<tr><td>" . $row['emp_code']."</td>
                       <td>" . $row['emp_name']."</td>
                       <td>" . $row['emp_dept']."</td>
                       <td>" . $row['emp_dob']."</td>
                       <td>" . $row['emp_join_date']."</td></tr>";        
         }
        
         echo "</tbody></table></div>";
         
    } else {
         echo "No Records Found..";
    }
    }
	   
     ?>