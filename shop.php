<!DOCTYPE html>
<html>
<head>
	<title>SHOP Page</title>
	<link rel="icon" type="" href="assets/icon/shop-nav.svg">
<style>
    	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	.content{
		display: flex;
		justify-content: center;
	}
	.container{
	}
	.container .row{
		border-radius: 10% 10% 10% 10%;
		text-align: center;
		stroke: 2px black;
		filter: brightness(60%);
		width: 60vw;
		height: 50vh;
		color: white;
		display: flex;
		align-items: center;
		justify-content: center;
		margin-top: 10vh;
		overflow: hidden;

	}
	.container .row:nth-child(1){
		background-image: url('assets/cone.jpg');
		background-repeat: no-repeat;
		background-attachment: cover;
		background-size: 100%;
	}
	.container .row:nth-child(2){
		background-image: url('assets/stick.jpg');
		background-repeat: no-repeat;
		background-attachment: cover;
		background-size: 100%;
	}
	.container .row:nth-child(3){
		background-image: url('assets/sundae.jpg');
		background-repeat: no-repeat;
		background-attachment: cover;
		background-size: 100%;
	}
	.container .row:nth-child(4){
		background-image: url('assets/gelato.jpg');
		background-repeat: no-repeat;
		background-attachment: cover;
		background-size: 100%;
	}

	.container .row h1 a{
		text-decoration: none;
		color: black;
	}
	.container .row h1{
	    font-size: 3.5em;
	    letter-spacing: 5px;
	    -webkit-text-stroke: 1px white;
	    text-decoration: all;
	}
</style>
<link rel="stylesheet" href="css/nav.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
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
	<div class="content">
		<div class="container">
		    <div class="row">
		        <h1><a href="item.php?type=cone">CONE</a></h1>
		    </div>
		    <div class="row">
		        <h1><a href="item.php?type=stick">STICK</a></h1>
		    </div>
		    <div class="row">
		        <h1><a href="item.php?type=sundae">SUNDAE</a></h1>
		    </div>
		    <div class="row">
		        <h1><a href="item.php?type=gelato">GELATO</a></h1>
		    </div>
		</div>
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