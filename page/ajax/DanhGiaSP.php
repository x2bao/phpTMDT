<?php
$GLOBALS['connect']=mysqli_connect("localhost","root","","banhang_php");
if(!$GLOBALS['connect'])
    echo "Kết nối thất bại";

mysqli_query($GLOBALS['connect'],"set names utf8");

if($_POST["tendangnhap"]=="")
{
    echo "Bạn phải đăng nhập mới có thể đánh giá";
}
else
{
    $layDanhGia         = "SELECT * FROM danhgia WHERE MaSanPham='".$_POST["masanpham"]."' and TenDangNhap='".$_POST["tendangnhap"]."'";
    $truyvanlayDanhGia  = mysqli_query($GLOBALS['connect'], $layDanhGia);
    if(mysqli_num_rows($truyvanlayDanhGia)>0)
    {
        echo "Bạn đã đánh giá sản phẩm này";
    }
    else
    {
        $themDanhGia = "INSERT INTO danhgia VALUES ('".$_POST["masanpham"]."','".$_POST["tendangnhap"]."','".$_POST["noidung"]."')";
        if(mysqli_query($GLOBALS['connect'], $themDanhGia))
            echo "Đánh giá thành công";
        else
            echo "Thất bại";
    }
}

?>