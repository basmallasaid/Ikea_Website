<?php

// $arr[0]['id']='0000000000';
// $arr[0][1]='00000000111111';
// $arr[1][0]='1111111111';
// echo $arr[0]['id'].'<br>'.$arr[0][1];


include "functions/connection.php";
$display_news[]=array();
$sql = "SELECT * FROM products order by product_id desc ;";
$result = mysqli_query($db,$sql);
$i=0;
while($row = mysqli_fetch_array($result)){
    $display_news[$i]['product_id']= $row['product_id'];
    $display_news[$i]['product_name']= $row['product_name'];
    $display_news[$i]['cat_id']= $row['cat_id'];
    $display_news[$i]['price']= $row['price'];
    $display_news[$i]['discount']= $row['discount'];
    $display_news[$i]['description']= $row['description'];
    $display_news[$i]['discount']= $row['discount'];
    $display_news[$i]['img']= $row['img'];

    $i++;
}


?>