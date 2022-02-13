<?php


////xuất thanh phân trang
////thuật toán 
//B1 lấy dữ liệu trang từ url xuống
//B2 tạo đóng mở 2 đầu ul
//B3 tạo trang giữa bằng cách duyệt mảng xuất số lượng trang nếu trang đang duyệt bằng vs trang lấy trên url thì active link
//B4 tạo 2 trang trước nếu trang hiện tại lớn hơn 1
//B5 tạo trang sau nếu trang hiện tại nhỏ hơn tổng số trang
function get_pagging($num_page, $page){
    $str_pagging = "<ul class='pagging fl-right' id='list-paging'>";
    //    tạo trang trước
        $str_pagging .= "<li><a class = 'common_selector'><<</a></li>";
    for($i = 1; $i <= $num_page; $i++){
       $active = "";
       if($page == $i){
           $active = 'active-num-page';
       }
       $str_pagging .= "<li><a class = 'common_selector $active'>$i</a></li>";
    }
        $str_pagging .= "<li><a class = 'common_selector'>>></a></li>";
    $str_pagging .= "</ul>";
    return $str_pagging;
}


function get_pagging_all($num_page, $page, $cat_id){
    $str_pagging = "<ul class='pagging fl-right' id='list-paging'>";
        $str_pagging .= "<li><a class = 'num-page' cat-id = '$cat_id'><<</a></li>";
    for($i = 1; $i <= $num_page; $i++){
       $active = "";
       if($page == $i){
           $active = 'active-num-page';
       }
       $str_pagging .= "<li><a class = 'num-page $active' cat-id = '$cat_id'>$i</a></li>";
    }
        $str_pagging .= "<li><a class = 'num-page' cat-id = '$cat_id'>>></a></li>";
    $str_pagging .= "</ul>";
    return $str_pagging;
}

//phân trang bài viết
function get_pagging_post($num_page, $page){
    $str_pagging = "<ul class='pagging fl-right' id='list-paging'>";
        $str_pagging .= "<li><a class = 'common_selector_post'><<</a></li>";
    for($i = 1; $i <= $num_page; $i++){
       $active = "";
       if($page == $i){
           $active = 'active-num-page';
       }
       $str_pagging .= "<li><a class = 'common_selector_post $active'>$i</a></li>";
    }
        $str_pagging .= "<li><a class = 'common_selector_post'>>></a></li>";
    $str_pagging .= "</ul>";
    return $str_pagging;
}

//phân trang danh sách tìm kiếm
function get_pagging_search($num_page, $page, $cat_id, $value){
    $str_pagging = "<ul class='pagging fl-right' id='list-paging'>";
        $str_pagging .= "<li><a class = 'common_selector_search' value='$value' cat-id = '$cat_id'><<</a></li>";
    for($i = 1; $i <= $num_page; $i++){
       $active = "";
       if($page == $i){
           $active = 'active-num-page';
       }
       $str_pagging .= "<li><a class = 'common_selector_search $active' value='$value' cat-id = '$cat_id'>$i</a></li>";
    }
        $str_pagging .= "<li><a class = 'common_selector_search' value='$value' cat-id = '$cat_id'>>></a></li>";
    $str_pagging .= "</ul>";
    return $str_pagging;
}

//lấy số trang
//số trang = tổng trang / số lượng sản phẩm mỗi trang
function db_num_page($tbl, $record){
    global $conn;
    #Số lượng trang
    $sql = "SELECT* FROM $tbl";
    $num_rows = db_num_rows($sql);
    $num_page = ceil($num_rows / $record);
    # danh sách số thứ tự trang 1,2,3,4....
    $list_num_page = array();
    for ($i = 1; $i <= $num_page; $i++) {
        $list_num_page[] = $i;
    }
    return $list_num_page;
}
?>