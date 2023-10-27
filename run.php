<?php 
$serve="localhost";
$username="root";
$password="";
$dbname="artist";

$conn=mysqli_connect($serve,$username,$password,$dbname);

if (isset($_POST['send'])) {
if(!empty($_POST['fname']) && !empty($_POST['email']) &&!empty($_POST['phone']) &&!empty($_POST['messag'])){

 $fname=$_POST['fname'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $messag=$_POST['messag'];
 
 $query="INSERT INTO artist_tb(fname,email,phone,messag) values('$fname','$email','$phone','$messag')";
 $run= mysqli_query($conn,$query) or die (mysqli_error());

 if($run){
    echo "REGISTER SUCESSFULLY";
}

else{
    echo "NOT REGISTER SUCESSFULLY";
}
}

else{
    echo "All fields reqiured";
}
}
?>
<br><br>
    <button>
   <a href="index.html">Back</a>
    </button>
