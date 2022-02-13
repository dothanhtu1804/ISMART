<?php

//chuyển hướng trang
function redirect_to($url){
    if(!empty($url)){
        header("location: {$url}");
    }
}

