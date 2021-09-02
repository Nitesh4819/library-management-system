 <?php
if(isset($_POST["sub"]))
{
$n=$_POST["name"];
$p=$_POST["password"];
$e=$_POST["email"];
$m=$_POST["mobile"];
$a=$_POST["address"];

echo $n."<br>";
echo $p."<br>";
echo $e."<br>";
$connect =mysqli_connect("localhost","root","","library");
$query =" INSERT INTO user (sId,sName,sPass,sEmail,sMob,sAddress)VALUES('','$n','$p','$e','$m','$a')";

 mysqli_query($connect,$query);
echo"INSERTED";

}

?>

<script type="text/javascript">

alert("registration successfully... you may login now");
 window.location.href="index.php";

</script> n