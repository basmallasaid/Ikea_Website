<?php

// $arr[0]['id']='0000000000';
// $arr[0][1]='00000000111111';
// $arr[1][0]='1111111111';
// echo $arr[0]['id'].'<br>'.$arr[0][1];


include "functions/connection.php";
$display_topsales[]=array();
$sql = "SELECT * FROM products ;";
$result = mysqli_query($db,$sql);
$i=0;
while($row = mysqli_fetch_array($result)){
    $display_topsales[$i]['product_id']= $row['product_id'];
    $display_topsales[$i]['product_name']= $row['product_name'];
    $display_topsales[$i]['cat_id']= $row['cat_id'];
    $display_topsales[$i]['price']= $row['price'];
    $display_topsales[$i]['discount']= $row['discount'];
    $display_topsales[$i]['description']= $row['description'];
    $display_topsales[$i]['discount']= $row['discount'];
    $display_topsales[$i]['img']= $row['img'];

    $i++;
}


?>