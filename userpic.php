<?php  

$sqlqry="select profile from profile where id='".$_SESSION["UP_ID"]."'";

$result=$conn->query($sqlqry);


while($row=$result->fetch_assoc()){
    echo '<img class="rounded-circle" src="'.$row['profile'].'" width="50px" height="50px" />';

}


?>