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
        } else {
            include("modules/dashboard.php");
        }
    ?>

</div>
