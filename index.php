<?php
include("layout/header.php");

$laySPcao1          = "SELECT * FROM sanpham ORDER BY DonGia DESC LIMIT 0,1";
$truyvan_laySPcao1  = mysqli_query($GLOBALS['connect'], $laySPcao1);
$cot1               = mysqli_fetch_array($truyvan_laySPcao1);

$laySPcao2          = "SELECT * FROM sanpham ORDER BY DonGia DESC LIMIT 1,1";
$truyvan_laySPcao2  = mysqli_query($GLOBALS['connect'], $laySPcao2);
$cot2               = mysqli_fetch_array($truyvan_laySPcao2);

$laySP              = "SELECT * FROM sanpham ORDER BY SoLuong DESC LIMIT 0,8";
$truyvan_laySP      = mysqli_query($GLOBALS['connect'], $laySP);


?>

<div class="bnr" id="home">
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <div class="banner-1"></div>
            </li>
            <li>
                <div class="banner-2"></div>
            </li>
            <li>
                <div class="banner-3"></div>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!--banner-ends-->
<!--Slider-Starts-Here-->
<script src="script/jsNguoiDung/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--End-slider-script-->
<div class="title-best-sellers ">
    <div class="span-best-sellers">
        <h5>
            <span><strong>KHUYẾN MÃI HOT</strong></span>
        </h5>
    </div>

</div>
<div class="img-cat">
    <a href="page/SanPham.php"><img src="images/123.png" alt="anh"></a>
</div>
<!--start-banner-bottom-->
<div class="banner-bottom">
    <div class="container">
        <div class="word">
            KHÓA HỌC PHỔ BIẾN NHẤT
        </div>
        <div class="banner-bottom-top">
            <div class="col-md-6 banner-bottom-left">
                <div class="bnr-one">
                    <div class="bnr-left">
                        <h1><a href="page/ChiTietSanPham.php?MaSP=<?php echo $cot1["MaSanPham"] ?>"><?php echo $cot1["TenSanPham"] ?></a></h1>

                        <div class="b-btn">
                            <a href="page/ChiTietSanPham.php?MaSP=<?php echo $cot1["MaSanPham"] ?>">MUA NGAY</a>
                        </div>
                    </div>
                    <div class="bnr-right">
                        <a href="page/ChiTietSanPham.php?MaSP=<?php echo $cot1["MaSanPham"] ?>">
                            <img width="150" height="150" src="images/HinhSP/<?php echo $cot1["Anh"]; ?>" alt="" />
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <div class="col-md-6 banner-bottom-right">
                <div class="bnr-two">
                    <div class="bnr-left">
                        <h1><a href="page/ChiTietSanPham.php?MaSP=<?php echo $cot2["MaSanPham"] ?>"><?php echo $cot2["TenSanPham"] ?></a></h1>

                        <div class="b-btn">
                            <a href="page/ChiTietSanPham.php?MaSP=<?php echo $cot2["MaSanPham"] ?>">MUA NGAY</a>
                        </div>
                    </div>
                    <div class="bnr-right">
                        <a href="page/ChiTietSanPham.php?MaSP=<?php echo $cot2["MaSanPham"] ?>">
                            <img width="150" height="150" src="images/HinhSP/<?php echo $cot2["Anh"]; ?>" alt="" />
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--end-banner-bottom-->
<div class="container">
    <div class="row">
        <div class="hinh">
            <img src="images/45.png">
        </div>
    </div>
</div>
<!---->


<!---->
<!--start-shoes-->
<div class="shoes">
    <div class="container">
        <div class="word">
            KHÓA HỌC MỚI NHẤT
        </div>
        <div class="product-one"></div>

            <?php
            $i=0;
            while($cot = mysqli_fetch_array($truyvan_laySP))
                {
                    $i++;
                ?>

        <div class="product-one">
            <div class="col-md-3 product-left">
                <div class="p-one simpleCart_shelfItem">
                    <a href="page/ChiTietSanPham.php?MaSP=<?php echo $cot["MaSanPham"]; ?>">
                        <img height="250" src="images/HinhSP/<?php echo $cot["Anh"]; ?>" alt="" />
                        <div class="mask">
                            <span>Xem chi tiết</span>
                        </div>
                    </a>
                    <h4><?php echo $cot["TenSanPham"]; ?></h4>




                    <div class="hot-deal-price">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>

                        <p><s>500.00 VND</s> </p>
                    </div>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price"> <?php echo DinhDangTien($cot["DonGia"]); ?> VNĐ</span></a></p>

                </div>


            </div>
        </div>
            <?php
                    if($i%4==0)
                    { ?>
                    <div class="clearfix"></div>
                <?php
                    }
                }
            ?>



    </div>
</div>
<!--end-shoes-->
<!--start-abt-shoe-->
<div class="abt-shoe">
    <div class="container">
        <div class="word">
            GIẢNG VIÊN TIÊU BIỂU
        </div>
        <div class="abt-shoe-main">
            <div class="col-md-4 abt-shoe-left">
                <div class="abt-one">
                    <a ><img src="images/teacher1.jpg" alt="" /></a>
                    <h4><a >Vũ Thị Thu Phương</a></h4>
                    <p> Người sáng lập Học viện Anh ngữ iYOLO.- Chuyên gia đào tạo tiếng Anh kết hợp tư duy.- Chuyên gia nghiên cứu và phát triển sản phẩm.- Có trên 5 năm kinh nghiệm ở vị trí Quản lý và Đào tạo Giảng viên.- Đã có gần 7 năm kinh nghiệm giảng dạy tiếng Anh và trên... </p>
                </div>
            </div>
            <div class="col-md-4 abt-shoe-left">
                <div class="abt-one">
                    <a ><img src="images/teacher2.jpg" alt="" /></a>
                    <h4><a >Đàm Duy Long</a></h4>
                    <p>Tốt nghiệp Đại học Xây dựng, ngay từ năm thứ 3 đại học đã sử dụng CAD 3D để xây dựng mô hình, làm đồ án môn học và đồ án tốt nghiệp..- 4 năm kinh nghiệm hướng dẫn AutoCAD 3D cho sinh viên thực tập, làm đồ án tốt nghiệp tại công ty..- 7 năm kinh nghiệm áp ... </p>
                </div>
            </div>
            <div class="col-md-4 abt-shoe-left">
                <div class="abt-one">
                    <a ><img src="images/teacher3.jpg" alt="" /></a>
                    <h4><a >Đỗ Huy Chúc</a></h4>
                    <p>Cử nhân kinh tế..Chuyên gia phong thủy ..Chuyên gia lý luận cao cấp..Giảng viên CEFE cao cấp (chương trình do CHLB Đức chuyển giao)..Tốt nghiệp Đại học Xây dựng, ngay từ năm thứ 3 đại học đã sử dụng CAD 3D để xây dựng mô hình, làm đồ án môn học và đồ án tốt nghiệp. </p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>


<?php
include("layout/footer.php");
?>
