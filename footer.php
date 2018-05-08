<div class="footer">
    <div class="container">
        <div class="footer-top">

<!--            <div class="col-md-2 footer-left">-->
<!---->
<!--                <h3>Giới thiệu</h3>-->
<!--                <ul>-->
<!--                    <li>Nhanh hơn</li>-->
<!--                    <li>Hiệu quả hơn</li>-->
<!--                    <li>Đội ngũ giảng viên uy tín</li>-->
<!--<!--                    <li><a href="#">In The News</a></li>-->-->
<!--<!--                    <li><a href="#">Team</a></li>-->-->
<!--<!--                    <li><a href="#">Carrers</a></li>-->-->
<!--                </ul>-->
<!--            </div>-->
            <div class="col-md-2 footer-left">

             <div class="hinh">
                 <h3>
                 <img src="images/logo-4.png">
                 </h3>
             </div>
            </div>
            <div class="col-md-2 footer-left">
                <h3>Chi tiết</h3>
                <ul>
                    <li><a href="<?php echo BASEURL?>../page/ThongTinTaiKhoan.php">Tài khoản</a></li>
<!--                    <li><a href="#">Personal Information</a></li>-->
                    <li><a href="<?php echo BASEURL?>../page/contact.php">Liên hệ</a></li>
                    <li><a href="<?php echo BASEURL?>../page/SanPham.php">Sản phẩm</a></li>
                    <li><a href="<?php echo BASEURL?>../page/DangKy.php">Đăng ký</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-left">
                <h3>Dịch vụ khách hàng</h3>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shipping</a></li>
                </ul>
                <div class="sub">
                    <form>
                        <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
            <div class="col-md-3 footer-left footer-right">
                <h3>FOLLOW US</h3>
                <ul>
                    <li><a href="https://www.facebook.com/Chia-S%E1%BA%BB-Kh%C3%B3a-H%E1%BB%8Dc-Edumall-1957843014447870/"><span class="fb"> </span></a></li>
                    <li><a href="#"><span class="twit"> </span></a></li>
                    <li><a href="#"><span class="drbl"> </span></a></li>
                    <li><a href="https://myclass.vn/"><span class="google"> </span></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--end-footer-->

<script src="script/jsNguoiDung/jsNguoiDung.js"></script>
<!--end-footer-text-->
<div class="footer-text">
    <div class="container">
        <div class="footer-main">
            <p class="footer-class">© 2018 Free Style . All Rights Reserved  </p>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!--end-footer-text-->
<!--</body>-->
<!--</html>-->