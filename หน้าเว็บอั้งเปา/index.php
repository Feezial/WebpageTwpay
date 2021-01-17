<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" />
    <?php
    include 'assets/head.php';
    include 'assets/snow.php';
    ?>
    <title>TWPAY LINK</title>
</head>

<body style="background: url('img/bg.jpg'); background-size: cover;">


    <?php
    include 'system/giftcodetruewallet.class.php';
    $class = new twgiftcode;
    if (isset($_POST['link'])) {
        $api = $class->redeem('0999999999', $_POST['link']);
    }



    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4" style="margin: 0 auto; display: table;">
                <br><br><br><br>
                <div class="card" style="border-radius: 20px;">
                    <div class="card-body bg">
                        <h4 style="margin: 0 auto; display:table; font-family: 'Fredoka One', cursive;">TRUEWALLET PAYMENT</h4>
                        <br>
                        <img src="img/true.png" alt="logio" width="200" style="margin: 0 auto; display: table;">
                        <br>
                        <h5 style="margin: 0 auto; display:table; color: gray; font-family: 'Itim', cursive;"> <i class="fas fa-chevron-down"></i> กรุณาใส่โค้ดหลังลิ้ง<i class="fas fa-chevron-down"></i> </h5>
                        <br>
                        <form action='./' method='post'>
                            <input name="link" placeholder="https://gift.truemoney.com/campaign/?v=xxxxx" type="text" id="inputPlaceholderEx" class="form-control">
                            <br>
                            <button class="btn btn-success btn aqua-gradient" type='submit' style="margin: 0 auto; display: table; width: 190px; border-radius:30px;">Confirm</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <br><br>
                <div class="card" style="border-radius: 20px; ">
                    <div class="card-body text-white" style="background: linear-gradient(40deg,#ff6ec4,#7873f5) !important; border-radius: 20px; font-family: 'Itim', cursive;">
                        <h3><i class="fas fa-dragon"></i> Status : <?php echo (isset($api) ? $api['status'] : ''); ?></h3>
                    </div>
                </div>
                <br>
                <div class="card" style="border-radius: 20px;">
                    <div class="card-body text-white" style="background: #396afc; background: -webkit-linear-gradient(to right, #2948ff, #396afc); background: linear-gradient(to right, #2948ff, #396afc);border-radius: 20px; font-family: 'Itim', cursive;">
                        <h3><i class="fas fa-exclamation-triangle"></i> INFO : <?php echo (isset($api) ? $api['info'] : ''); ?></h3>
                    </div>
                </div>
                <div class="card mt-4" style="border-radius: 20px;">
                <div class="card-body " style="background: linear-gradient(40deg,#ff6ec4,#7873f5) !important; border-radius: 20px; font-family: 'Itim', cursive;">
                <h3>
                <center>
                <i class="fab fa-bandcamp text-white"></i>
                <a class="text-white" style="font-size: 30px;" href="https://linktr.ee/feezial"> ติดต่อ</a>
                </center>
                
                </h3>
                </div>
                </div> 
    </div>

</body>
<br><br><br><br>
</html>
