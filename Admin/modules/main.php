<div class="clear"></div>
<div class="main">

    <?php
        if(isset($_GET['action'])) {
            $tam = $_GET['action'];
        } else {
            $tam = '';
        }
        if($tam == 'quanlydanhmucsanpham') {
            include("modules/quanlydanhmucsp/add.php");
            include("modules/quanlydanhmucsp/lietke.php");
        } else if ($tam == 'quanlysanpham') {
            include("modules/quanlysp/add.php");
            include("modules/quanlysp/lietke.php");
        } else if ($tam == 'quanly2') {
            include("modules/quanlyphanhoi/reply.php");
        } else if ($tam == 'quanly1') {
            include("modules/quanlydonhang/orders.php");
        } else if ($tam == 'quanly3') {
            include("modules/quanlythanhtoan/payment.php");
        } else {
            include("modules/dashboard.php");
        }
    ?>

</div>
