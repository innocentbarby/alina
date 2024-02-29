<?php
function getSaveValue($conn, $str){
    $str = trim($str);
    $str =  mysqli_real_escape_string($conn, $str);
    $str = htmlentities($str);
    return  $str;
}

function Displayarray($str){
    echo "<pre>";
    print_r($str);
    echo "</pre>";
}

function getData($conn,$table){
    $res = mysqli_query($conn,"SELECT * FROM `$table` ORDER BY `id` DESC");
    if(mysqli_num_rows($res)>0){
        while($row_mysqli_fetch_assoc($res)){
            $data[]=$row;
        }
        return $data;
    }
}
?>