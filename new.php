<html>
<body>

<?php

$age=$_GET['page'];

if($age>="18")

{

echo "Hello ".$_GET['pname']."!<br>";
echo "Your age is:".$_GET['page']."<br>";
echo "Your E-mail:".$_GET['email'];

}

else

{

echo "sorry!";

}

?>

</body>
</html>