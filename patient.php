<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}

?>
<html>
 <body>
    <p> welcome<?php echo $_SESSION['username']; ?></p>
 </body>

</html>