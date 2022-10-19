<style>
    li.nav-item {
    width: 200px;
}
a.nav-link {
    width: 200px;
}
</style>


<?php
//$con=mysqli_connect("localhost","root","","xenonuser");
$con=mysqli_connect("localhost:3308","root","","xenonuser");

if(!$con)
{
    die('connection failed'.mysqli_connect_error());
}
// else{
//     echo "connection succesfull";
// }


?>