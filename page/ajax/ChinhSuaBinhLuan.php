<?php
$GLOBALS['connect']=mysqli_connect("localhost","root","","banhang_php");
if(!$GLOBALS['connect'])
    echo "Kết nối thất bại";

mysqli_set_charset($GLOBALS['connect'],"utf8");

$csBinhLuan=    "UPDATE binhluan SET NoiDung='".$_POST["noidung"]."' WHERE MaBinhLuan='".$_POST["mabinhluan"]."'";

    if(mysqli_query($GLOBALS['connect'], $csBinhLuan))
        echo "Chình sửa bình luận thành công";
    else
        echo "Đã xảy ra lỗi";
?>