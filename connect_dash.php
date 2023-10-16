<?php
session_start();
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $no_ofdays=$_POST['days'];
    
    
    
    $con=mysqli_connect('127.0.0.1','root','admin','car_rent');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
        $insert="INSERT INTO `services`(`username`, `address`, `age`, `no of days`) VALUES ('$username','$address','$age','$no_ofdays')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script> alert("Registered Successfully");
                window.open('details.php','_self');</script>
            <?php
                $_SESSION['username']=$username;
                $_SESSION['address']=$address;
//               
//                
                $_SESSION['days']=$no_ofdays;
                
            }
            else{
                echo "error";
            }
            
    }
    
    
    
        
}
?>