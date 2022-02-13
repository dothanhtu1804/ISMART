<?php
//tìm kiếm
function db_search($value, $field, $table){
    $sql = "SELECT * FROM $table WHERE $field LIKE '%$value %'";
    $result = db_fetch_array($sql);
    return $result;
}

// tìm kiếm tất cả admin
function db_search_all_admins($value){
    $sql = "SELECT * FROM `tbl_admins` WHERE  CONVERT(`username` USING utf8) LIKE '%$value %' OR CONVERT(`fullname` USING utf8) LIKE '%$value %'";
    $result = db_fetch_array($sql);
    return $result;
}
// tìm admin giới hạn theo trang
function db_search_admins_by_page($value, $start = 1, $num_per_page = 10){
    $sql = "SELECT * FROM `tbl_admins` WHERE  CONVERT(`username` USING utf8) LIKE '%$value %' OR CONVERT(`fullname` USING utf8) LIKE '%$value %' LIMIT {$start}, {$num_per_page}";
    $result = db_fetch_array($sql);
    return $result;
}
// tìm tất cả các trang
function db_search_all_pages($value){
    $sql = "SELECT * FROM `tbl_pages` WHERE CONVERT(`title` USING utf8) LIKE '%$value %'";
    $result = db_fetch_array($sql);
    return $result;
}
// tìm trang theo trang
function db_search_pages_by_page($value, $start = 1, $num_per_page = 10){
    $sql = "SELECT * FROM `tbl_pages` WHERE CONVERT(`title` USING utf8) LIKE '%$value %' LIMIT {$start}, {$num_per_page}";
    $result = db_fetch_array($sql);
    return $result;
}
// tìm tất cả bài viết
function db_search_all_posts($value){
    $sql = "SELECT * FROM `tbl_posts` WHERE CONVERT(`title` USING utf8) LIKE '%$value %'";
    $result = db_fetch_array($sql);
    return $result;
}
//tìm bài viết theo trang
function db_search_posts_by_page($value, $start = 1, $num_per_page = 10){
    $sql = "SELECT * FROM `tbl_posts` WHERE CONVERT(`title` USING utf8) LIKE '%$value %' LIMIT {$start}, {$num_per_page}";
    $result = db_fetch_array($sql);
    return $result;
}
// tìm tất cả sản phẩm
function db_search_all_products($value){
    $sql = "SELECT * FROM `tbl_products` WHERE CONVERT(`product_title` USING utf8) LIKE '%$value %' OR  CONVERT(`product_code` USING utf8) LIKE '%$value %'";
    $result = db_fetch_array($sql);
    return $result;
}
//tìm sản phẩm theo trang
function db_search_products_by_page($value, $start = 1, $num_per_page = 10){
    $sql = "SELECT * FROM `tbl_products`  WHERE CONVERT(`product_title` USING utf8) LIKE '%$value %' OR  CONVERT(`product_code` USING utf8) LIKE '%$value %' LIMIT {$start}, {$num_per_page}";
    $result = db_fetch_array($sql);
    return $result;
}
//tìm tất cả khách hàng
function db_search_all_customers($value){
    $sql = "SELECT * FROM `tbl_customers` WHERE CONVERT(`customer_name` USING utf8) LIKE '%$value %' OR CONVERT(`phone` USING utf8) LIKE '%$value %' OR CONVERT(`email` USING utf8) LIKE '%$value %'";
    $result = db_fetch_array($sql);
    return $result;
}
//tìm khách hàng theo trang 
function db_search_customers_by_page($value, $start = 1, $num_per_page = 10){
    $sql = "SELECT * FROM `tbl_customers` WHERE CONVERT(`customer_name` USING utf8) LIKE '%$value %' OR CONVERT(`phone` USING utf8) LIKE '%$value %' OR CONVERT(`email` USING utf8) LIKE '%$value %' LIMIT {$start}, {$num_per_page}";
    $result = db_fetch_array($sql);
    return $result;
}
// tìm tất cả đơn hàng
function db_search_all_orders($value){
    $sql = "SELECT * FROM `tbl_orders` WHERE CONVERT(`order_code` USING utf8) LIKE '%$value %'";
    $result = db_fetch_array($sql);
    return $result;
}
//tìm đơn hàng theo trang
function db_search_orders_by_page($value, $start = 1, $num_per_page = 10){
    $sql = "SELECT * FROM `tbl_orders` WHERE CONVERT(`order_code` USING utf8) LIKE '%$value %' LIMIT {$start}, {$num_per_page}";
    $result = db_fetch_array($sql);
    return $result;
}
//tìm tất cả slider quảng cáo
function db_search_all_sliders($value){
    $sql = "SELECT * FROM `tbl_sliders` WHERE CONVERT(`slider_title` USING utf8) LIKE '%$value %' OR CONVERT(`slider_slug` USING utf8) LIKE '%$value %'";
    $result = db_fetch_array($sql);
    return $result;
}
//tìm slider theo trang
function db_search_sliders_by_page($value, $start = 1, $num_per_page = 10){
    $sql = "SELECT * FROM `tbl_sliders` WHERE CONVERT(`slider_title` USING utf8) LIKE '%$value %' OR CONVERT(`slider_slug` USING utf8) LIKE '%$value %' LIMIT {$start}, {$num_per_page}";
    $result = db_fetch_array($sql);
    return $result;
}
// tìm tất cả hình ảnh trong đồ án
function db_search_all_medias($value){
    $sql = "SELECT * FROM `tbl_sliders` WHERE CONVERT(`slider_thumb` USING utf8) LIKE '%$value %'"
    ."SELECT * FROM `tbl_admins` WHERE CONVERT(`avatar` USING utf8) LIKE '%$value %'"
    ."SELECT * FROM `tbl_posts` WHERE CONVERT(`post_thumbnail` USING utf8) LIKE '%$value %'"
    ."SELECT * FROM `tbl_products` WHERE CONVERT(`product_thumb` USING utf8) LIKE '%$value %'";
    $result = db_fetch_array($sql);
    return $result;
}
// tìm tất cả danh mục sản phẩm
function db_search_all_product_cats($value){
    $sql = "SELECT * FROM `tbl_product_cat` WHERE CONVERT(`title` USING utf8) LIKE '%$value %'";
    $result = db_fetch_array($sql);
    return $result;
}
//tìm danh mục sản phẩm theo trang
function db_search_product_cats_by_page($value, $start = 1, $num_per_page = 10){
    $sql = "SELECT * FROM `tbl_product_cat`  WHERE CONVERT(`title` USING utf8) LIKE '%$value %' LIMIT {$start}, {$num_per_page}";
    $result = db_fetch_array($sql);
    return $result;
}

//tìm tất cả danh mục bài viết
function db_search_all_post_cats($value){
    $sql = "SELECT * FROM `tbl_post_cat` WHERE CONVERT(`title` USING utf8) LIKE '%$value %'";
    $result = db_fetch_array($sql);
    return $result;
}
//tìm tất cả danh mục bài viết theo trang
function db_search_post_cats_by_page($value, $start = 1, $num_per_page = 10){
    $sql = "SELECT * FROM `tbl_post_cat`  WHERE CONVERT(`title` USING utf8) LIKE '%$value %' LIMIT {$start}, {$num_per_page}";
    $result = db_fetch_array($sql);
    return $result;
}
?>