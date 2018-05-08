<?php
session_start();
$GLOBALS['connect']=mysqli_connect("localhost","root","","banhang_php");
if(!$GLOBALS['connect'])
    echo "Kết nối thất bại";

mysqli_set_charset($GLOBALS['connect'],"utf8");

$tendangnhap    = $_POST["tendangnhap"];
$matkhau        = $_POST["matkhau"];
$tranghientai   = $_POST["tranghientai"];

$ktTonTai       = "SELECT * FROM thanhvien WHERE TenDangNhap='".$tendangnhap."' and MatKhau='".$matkhau."'";
$truyvanktTonTai= mysqli_query($GLOBALS['connect'], $ktTonTai);

if(mysqli_num_rows($truyvanktTonTai)>0) {
    echo "<script>alert('Đăng nhập thành công')</script>";
    $_SESSION["tendangnhap"]=$tendangnhap;
}
else {
    echo "<script>alert('Tài khoản hoặc mật khẩu không đúng')</script>";
}

?>

<script>
    location='<?php echo $tranghientai; ?>';
</script>