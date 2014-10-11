<?php
session_start();
if(isset($_SESSION['username']))
{
unset($_SESSION['username']);
unset($_SESSION['user_role']);


}


?>
<script type="text/javascript">
alert("Logout Successfully.");
window.location.href="index.php";

</script>