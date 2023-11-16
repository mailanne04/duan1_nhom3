<?php
include "../views/Admin/header.php";
include "../views/Admin/main.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "addtk":
            include "../views/Admin/taikhoan/addtaikhoan.php";
            break;

        case "home":
            include "../views/Admin/home.php";
            break;

        case "listtk":
            include "../views/Admin/taikhoan/listtaikhoan.php";
            break;

        case "cttk":
            include "../views/Admin/taikhoan/chitiettaikhoan.php";
            break;

        case "adddm":
            include "../views/Admin/danhmuc/adddanhmuc.php";
            break;

        case "listdm":
            include "../views/Admin/danhmuc/listdanhmuc.php";
            break;

        case "addsp":
            include "../views/Admin/sanpham/addsanpham.php";
            break;

        case "listsp":
            include "../views/Admin/sanpham/listsanpham.php";
            break;

        case "ctsp":
            include "../views/Admin/sanpham/chitietsanpham.php";
            break;

        case "listbl":
            include "../views/Admin/binhluan/listbinhluan.php";
            break;

        case "listsale":
            include "../views/Admin/sale/listsale.php";
            break;

        case "addsale":
            include "../views/Admin/sale/addsale.php";
            break;

        case "listlh":
            include "../views/Admin/lienhe/listlienhe.php";
            break;

        case "addbanner":
            include "../views/Admin/banner/addbanner.php";
            break;

        case "listbanner":
            include "../views/Admin/banner/listbanner.php";
            break;

        case "addbt":
            include "../views/Admin/bienthe/addbienthe.php";
            break;
            
        case "listbt":
            include "../views/Admin/bienthe/listbienthe.php";
            break;

        case "listhd":
            include "../views/Admin/hoadon/hoadon.php";
            break;

        case "cthd":
            include "../views/Admin/hoadon/chitiethoadon.php";
            break;
        default:
            break;
    }
} else {
    include "../views/Admin/home.php";
}

include "../views/Admin/footer.php";
?>