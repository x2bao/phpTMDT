<?php
session_start();
$GLOBALS['connect']=mysqli_connect("localhost","root","","shop");
if(!$GLOBALS['connect'])
    echo "Kết nối thất bại";

mysql_select_db("banhang_php",$ketnoi);
mysqli_query($GLOBALS['connect'],"set names utf8");

$tendangnhap=$_POST["tendangnhap"];
$matkhau=$_POST["matkhau"];
$tranghientai=$_POST["tranghientai"];

$ktTonTai="SELECT * FROM nhanvien WHERE TenDangNhap='".$tendangnhap."' and MatKhau='".$matkhau."'";
$truyvanktTonTai=mysqli_query($GLOBALS['connect'],$ktTonTai);

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