<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Ribbon Login Form Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!--/webfonts-->
    <?php
        session_start();
    $GLOBALS['connect']=mysqli_connect("localhost","root","","banhang_php");
    if(!$GLOBALS['connect'])
        echo "Kết nối thất bại";

//    mysqli_select_db("banhang_php");
    mysqli_query($GLOBALS['connect'],"set names utf8");
    ?>
</head>
<body>
<!--start-main-->
<h1>Hello admin !<span>Please login...</span></h1>
<div class="login-box">
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
			<input name="tendangnhap" id="tendangnhap" type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
			<input name="matkhau" id="matkhau" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">

		<div class="remember">
			<h4>Welcome admin site.</h4>
		</div>
		<div class="clear"> </div>
		<div class="btn">
			<input id="dangnhap" type="submit" value="LOG IN" >
		</div>
		<div class="clear"> </div>
    </form>

</div>
<!--//End-login-form-->

<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $tendangnhap = $_POST["tendangnhap"];
    $matkhau = $_POST["matkhau"];


    $ktTonTai = "SELECT * FROM nhanvien WHERE TenDangNhap = '" . $tendangnhap . "' and MatKhau='" . $matkhau . "'";
    $truyVanktTonTai = mysqli_query($GLOBALS['connect'],$ktTonTai);
    if (mysqli_num_rows($truyVanktTonTai) > 0) {
        echo "<script>alert('Đăng nhập thành công !')</script>";
        $_SESSION["admin"]=$tendangnhap;
        echo "<script>location='../index.php';</script>";
    }
        else {
            echo "<script>alert('Tài khoản hoặc mật khẩu không đúng !')</script>";
    }
}

?>
</body>
</html>


