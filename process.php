<?php 
$serve="localhost";
$username="root";
$password="";
$dbname="art";

$conn=mysqli_connect($serve,$username,$password,$dbname);
if (isset($_POST['submit'])) {


       $email=$_POST['email']; 
   
    $query="INSERT INTO  art_artist(email) values('$email')";
    
    $run= mysqli_query($conn,$query) or die (mysqli_error());

    if($run){
        echo "EMAIL SEND SUCESSFULLY";
    }
    
    else{
        echo "EMAIL NOT SEND SUCESSFULLY";
    }
      
}

?>
<br><br>
    <button>
   <a href="index.html">Back</a>
    </button>
