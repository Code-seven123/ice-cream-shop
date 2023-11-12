<?php

if (isset($_POST["name"]) && $_POST["pengiriman"]) {
  $options = [
    'cost' => 10,
  ];

  $hash = password_hash("secret password", PASSWORD_DEFAULT, $options);

} else {
  header("Location: shop.php");
        exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
<style type="text/css" media="all">
   .head{
       display: flex;
       align-items: center;
       padding: 2vh;
       background-color: white;
   } 
   .head button{
       border: 0;
       background-color: rgba(0,0,0,0);
       width: 5vw;
   }
   .head button img{
       width: 100%;
   }
   .head h1{
       font-family: Courier New;
   }
   .content{
       width: 90vw;
       padding: 1vh;
       margin: 1.5vh;
       background-color: white;
       overflow-x: auto;
       margin-top: 20vh;
   }
   table{
       width: 100%;
       margin: 1.5vh;
   }
   table tr{
       display: flex;
       justify-content: -between;
       width: 100%;
       margin-top: 2vh;
   }
   table tr td{
       width: 50%;
   }
   .content{
   }
</style>
</head>
<body bgcolor="#A0A0A0">
    <div class="head">
        <h1>Pesanan Sedang Dikirim</h1>
        <button><a href="shop.php"><img src="assets/icon/kembali.svg" alt="" /></a></button>
       
    </div>
    <div class="content">
        <div class="row">
            <h1 align="center">Informasi Anda</h1>
            <table border="0" cellspacing="0" cellpadding="2">
                <tr>
                    <td>Nama Ice Cream </td>
                    <td>: <?= $_POST["name"] ?></td>
                </tr>
                <tr>
                    <td>Rasa</td>
                    <td>: <?= $_POST["rasa"] ?></td>
                </tr>
                <tr>
                    <td>Harga Ice Cream</td>
                    <td>: <?= $_POST["harga"] ?></td>
                </tr>
                <tr>
                    <td>Ongkir</td>
                    <td style="display: fle">: <?= $_POST["ongk"]; ?></td>
                </tr>
                <tr>
                  <td>Total Harga</td>
                  <td>: <?= $_POST["harga-total"] ?></td>
                </tr>
                <tr>
                    <td>Type Pengiriman</td>
                    <td>: <?= $_POST["type"] ?></td>
                </tr>
                <tr>
                    <td>Nama Jasa kurir</td>
                    <td>: <?= $_POST["pengiriman"] ?></td>
                </tr>
                <tr>
                    <td>Metode Pembayaran</td>
                    <td>: <?= $_POST["pembayaran"] ?></td>
                </tr>
                <tr>
                    <td>Id kurir</td>
                    <td style="display: fle">: <?= $hash; ?></td>
                </tr>

            </table>
        </div>
    </div>
</body>
</html>