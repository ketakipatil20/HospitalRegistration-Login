<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}

?>
<html>
 <body>
    <p> Welcome<?php echo $_SESSION['username']; ?></p>
 </body>

</html>