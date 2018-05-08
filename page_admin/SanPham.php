<?php

include("../layout/header_admin.php");

if(!isset($_SESSION["admin"]))
    echo "<script>location='web/index.php';</script>";

if(isset($_GET["MaSanPham"]))
{
    $xoaDuLieu="DELETE FROM sanpham  WHERE MaSanPham='".$_GET["MaSanPham"]."'";
    if(mysqli_query($GLOBALS['connect'],$xoaDuLieu))
    {
        echo "<script>alert('Xóa thành công !')</script>";
    }
    else
    {
        echo "<script>alert('Đã xảy ra lỗi !')</script>";
    }
}

$trang=0;
if(isset($_GET["trang"]))
    $trang=$_GET["trang"];

$from="sanpham INNER JOIN loaisp ON sanpham.MaLoaiSP=loaisp.MaLoaiSP";

$layDuLieu=phan_trang("*",$from,"",10,$trang,"");

$truyvan_layDuLieu=$layDuLieu;

?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Quản lý sản phẩm
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>  <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-bar-chart-o"></i> Sản phẩm
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-12">
                <h2><a href="SanPham_Them.php" class="btn btn-primary">Thêm sản phẩm</a></h2>
                <div >

                    <table class="table table-bordered table-hover">

                        <tr>
                            <th></th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thông tin</th>
                            <th>Trạng thái</th>
                            <th>Danh mục</th>
                            <th></th>
                        </tr>
                    <?php
                        while($cot=mysqli_fetch_array($truyvan_layDuLieu))
                        {
                        ?>
                            <tr>
                                <td><img width="50" height="50" src="../images/HinhSP/<?php echo $cot["Anh"]; ?>"></td>
                                <td><?php echo $cot["TenSanPham"];?></td>
                                <td><?php echo $cot["SoLuong"];?></td>
                                <td><?php echo DinhDangTien($cot["DonGia"]);?></td>
                                <td><?php echo $cot["ThongTin"];?></td>
                                <td><?php echo $cot["TrangThai"];?></td>
                                <td><?php echo $cot["TenLoai"];?></td>

                                <td>
                                    <a href="SanPham_Sua.php?MaSP=<?php echo $cot["MaSanPham"]; ?>" class="btn btn-success">Cập nhật</a>
                                    <a href="<?php echo $_SERVER["PHP_SELF"]; ?>?MaSanPham=<?php echo $cot["MaSanPham"]; ?>" class="XoaDuLieu btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        <?php
                        }
                    ?>

                    </table>
                    <div class="divtrang"></div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function () {
            <?php
               echo  "$('.divtrang_".$trang."').addClass('divtrangactive');";
            ?>

            $('.XoaDuLieu').click(function(){
                if(!confirm("Bạn có thực muốn xóa !"))
                    return false;
            });

        });
    </script>
<?php
include("../layout/footer_admin.php");

?>