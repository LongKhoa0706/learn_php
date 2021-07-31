<?php

$arayy = array("A","B");
//for($i = 0 ; $i < 100 ; $i ++){
//    echo $i."<br>";
//}

//for ($i = 0 ; $i <$arayy ; $i++){
//
//}

// get only value

//foreach ($arayy as $value){
//    echo $value;
//}

//get value and index
foreach ($arayy as $key => $value){
    echo $key."========".$value."<br>";
    if($key === 1){
        echo "CO SO 1";
    }else{
        echo "KHAC";
    }
};
