<?php
$GLOBALS['connect']=mysqli_connect("localhost","root","","banhang_php");
if(!$GLOBALS['connect'])
    echo "Kết nối thất bại";


mysqli_query($GLOBALS['connect'], "set names utf8");

$ktTonTai           = "SELECT * FROM thanhvien WHERE TenDangNhap='".$_POST["tendangnhap"]."' and MatKhau='".$_POST["matkhaucu"]."'";
$truyvanktTonTai    = mysqli_query($GLOBALS['connect'], $ktTonTai);

if(mysqli_num_rows($truyvanktTonTai) > 0)
{
    $thaydoiMatKhau = "UPDATE thanhvien SET MatKhau='".$_POST["matkhaumoi"]."' WHERE TenDangNhap='".$_POST["tendangnhap"]."'";
    if(mysqli_query($GLOBALS['connect'], $thaydoiMatKhau))
        echo "Đổi mật khẩu thành công";
    else
        echo "Xảy ra lỗi";
}
else
{
    echo "Mật khẩu không chính xác" ;
}

?>