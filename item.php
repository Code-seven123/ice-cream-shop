<?php 
//include "lib/data.php";

if(isset($_GET['type'])){
  $file = glob("*");
  $json = file_get_contents("data.json");
  $data = json_decode($json, true);
  $data2 = [
  	$data["cone"],
  	$data["stick"],
  	$data["sundae"],
  	$data["gelato"],
  ];
  
  
    if($_GET['type'] == "cone"){
        $data3 = $data2[0];
        $title = "ICE CREAM CONE";
        $gm = "'assets/cone.jpg'";
    } else if($_GET["type"] == "stick"){
        $data3 = $data2[1];
        $title = "ICE CREAM STICK";
        $gm = "'assets/stick.jpg'";
    } else if ($_GET["type"] == "sundae") {
        $data3 = $data2[2];
        $title = "ICE CREAM SUNDAE";
        $gm = "'assets/sundae.jpg'";
    }else if ($_GET["type"] == "gelato") {
        $data3 = $data2[3];
        $title = "ICE CREAM GELATO";
        $gm = "'assets/gelato.jpg'";
    }else {
        header("Location: shop.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="" href="assets/icon/shop-nav.svg">
    <title><?= $title; ?></title>
<style>
    .title{
        margin-left: 10vw;
        margin-right: 10vw;
        margin-bottom: 6vh;
        margin-top: 15vh;
        width: 80vw;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2.3em;
        color: white;
        filter: brightness(60%);
        border-radius: 30%;
        background-image: url(<?= $gm; ?>);
        background-repeat: no-repeat;
		background-attachment: cover;
		background-size: 100%;
		position: static;
    }
    
    .container{
        width: 100vw;
        min-height: 100vh;
        background-image: url("assets/bg3.jpg");
        background-repeat: ;
		background-attachment: cover;
		background-size: 100%;
		padding: 10vw;
        text-align: center;
    }
    .container .row{
        margin-bottom: 20vh;
        text-align: center;
        font-size: 3em;
        color: white;
        width: 30vw;
        display: inline-block;
        margin-right: 5vw;
    }
    .container .row img{
        width: 30vw;
        border-radius: 100%;
    }
    .container .row .ti{
        padding: 3vw;
        border-radius: 0% 0% 50% 50%;
        background-color: rgba(1,1,1,.5);
        font-size: 1rem;
    }
    
    .container .row .harga{
        display: flex;
        justify-content: center;
    }
    .link{
        text-decoration: none;
        color: white;
        font-family: Consolas;
    }
</style>
<link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <nav>
        <h1><font color="#A6FF95">Green</font><font color="#FF8080">Candy</font></h1>
        <button id="btn"><img src="assets/icon/menu-out.svg"></button>
        <ul id="ul">
            <div id="nav" class="h">
                <li><a href="index.php" id="one"><img src="assets/icon/home.svg"></a></li>
                <li><a href="shop.php" id="two"><img src="assets/icon/shop-nav.svg"></a></li>
        </ul>
    </nav>
	
	<div class="title">
	    <h1><?= $title; ?></h1>
	</div>
	<div class="container">
	    <?php foreach ($data3 as $data): ?>
	        <div class="row">
    	        <a href="out.php?name=<?= $data['nama'] ?>&harga=<?= $data['harga']; ?>&rasa=<?= $data['rasa']; ?>&path=<?= $data['path']?>"><img src="<?= $data['path'] ?>" alt=""></a>
                <div class="ti">
                    <a href="out.php?name=<?= $data['nama'] ?>&harga=<?= $data['harga']; ?>&rasa=<?= $data['rasa']; ?>&path=<?= $data['path']?>" class="link">
                        <h3><?= $data["nama"]?></h3>
            	        <p>Rasa : <?= $data["rasa"]?></p>
            	        <div class="harga">
            	            <h4>Rp. <?= sprintf("%.2f",$data["harga"]); ?></h4>
            	        </div>
                    </a>
                </div>
    	    </div>
	    <?php endforeach; ?>
	</div>
	
	<div style="background-color: black; width: 100vw; padding: 3vh;">
		<table width="20vw" cellspacing="2" cellpadding="5" bgcolor="white">
			<tr>
				<td><a href="https://github.com/Code-seven123"><img src="assets/icon/github.svg" width="30"></a></td>
				<td></td>
				<td><a href="https://instagram.com/nerfs_id?igshid=NGVhN2U2NjQ0Yg=="><img src="assets/icon/instagram.svg" width="30"></a></td>
				<td></td>
				<td><a href="https://twitter.com/kaimi404"><img src="assets/icon/twitter.svg" width="30"></a></td>
			</tr>
		</table>
		<font color="grey" size="3" face="calibri"><p>Copyright &copy; 2023 <a href="#"><font color="grey">Maulana N.</font></a></p></font>
	</div>
<script type="text/javascript">
</script>
<script src="js/nav.js"></script>
</body>
</html>