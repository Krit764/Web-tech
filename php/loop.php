<style>
    
#box{
        height: 50px;
        width: 50px;
        background-color: red;
        margin-bottom: 20px;
        display:inline-block;
        margin-right: 10px;
    }
</style>
 

<?php
$num=1;
for($row = 1; $row<=4; $row++){
    for($col=1; $col<=4; $col++){
        echo"<div id='box'>$num</div>";
        $num++;
    }
    echo "<br>";
}
?>


