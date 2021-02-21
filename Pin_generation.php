<?php
//Email: Hizick27@gmail.com
//Username: BlackAdam

function generatePin(){
    echo $pin = rand(1000000000000,9999999999999);    
}
$i = 1;
while($i <= 200) {  
    echo "<br> <br>  PIN$i <br>"; 
    generatePin();
    $i++;
}
?>