<?php
$GLOBALS['connect']=mysqli_connect("localhost","root","","banhang_php");
if(!$GLOBALS['connect'])
    echo "Kết nối thất bại";

mysqli_set_charset($GLOBALS['connect'],"utf8");

$xoaBinhLuan="DELETE FROM binhluan WHERE MaBinhLuan='".$_POST["mabinhluan"]."'";

    if(mysqli_query($GLOBALS['connect'], $xoaBinhLuan))
        echo "Xóa bình luận thành công";
    else
        echo "Đã xảy ra lỗi";
?>