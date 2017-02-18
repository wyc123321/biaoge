<?php
//前后台分离
include "db.php";
$result=$db->query("select * from stu");
$array=array();
while($row=$result->fetch_assoc()){
    $array[]=$row;
};
echo json_encode($array);


//对于ajax中的数组
/*$arr=array(
    array(
        "name"=>"张三",
        "age"=>"12",
    ),
    array(
        "name"=>"李四",
        "age"=>"12",
    ),
);
echo json_encode($arr);*///输出类似于json格式的字符串

/*$arr=array();
$arr[]=1;
$arr[]=2;
var_dump($arr);*/



?>