<!DOCTYPE html>
<html>
<head>
	<title>HOME Page</title>
	<link rel="icon" href="assets/icon/home.svg">

<style type="text/css">

	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	@font-face{
		font-family: "levibrush";
		src: url('assets/LEVIBRUSH.ttf');
	}
	.one{
	  margin-top: vh;
		height: 100vh;
		width: 100vw;
	}
 .one .row-1{
     background-image: url('assets/bg.jpg');
		  background-repeat: no-repeat;
		  background-attachment: cover;
		  background-size: 100%;
		  height: 100%;
		  width: 100%;
		  border: 1px solid black;
		  display: flex;
 }
 .one .row-1 div{
     flex: 2;
 }
 .one .row-1 div:nth-child(1){
     letter-spacing: 5px;
     font-family: calibri;
     display: flex;
     align-items: center;
     padding: 2vh;
 }
 .one .row-1 div:nth-child(1) font{
     font-family: "brushboy";
     -webkit-text-stroke: 2px black;
 }
 .one .row-1 div:nth-child(2){
     text-align: center;
     margin-top: 35%;
 }
 .one .row-1 div:nth-child(2) button{
     background-color: rgba(0,0,0,0.4);
     animation: rgb 1.5s infinite;
     border-radius: 20%;
     border: 0;
     width: 15vw;
     height: 6vh;
     font-size: 1.8em;
     
 }
 .one .row-1 div:nth-child(2) button a{
 	text-decoration-color: white;
     color: black;
 }
	@keyframes rgb{
		0%{
			border: 1px solid red;
			box-shadow: 0 0 30px red, 0 0 50px blue;
		}
		100%{
			box-shadow: 0 0 0 rgba(0,0,0,0);
			border: 0;
		}
	}
	
	.container{
	    height: 100%;
	    width: 100vw;
	}
	.container .row{
	    height: 120vh;
	    width: 100vw;
	}
	.container .row svg{
	    
	}
    .gm{
		border-radius: 10% 10% 10% 10%;
		text-align: center;
		stroke: 2px black;
		//filter: brightness(60%);
		width: 60vw;
		height: 50vh;
		color: black;
		display: flex;
		align-items: center;
		justify-content: center;
		margin-top: 5vh;
	}
	.gm1{
		background-image: url('assets/cone.jpg');
		background-repeat: no-repeat;
		background-attachment: cover;
		background-size: 100%;
	}
	.gm2{
		background-image: url('assets/stick.jpg');
		background-repeat: no-repeat;
		background-attachment: cover;
		background-size: 100%;
	}
	.gm3{
		background-image: url('assets/sundae.jpg');
		background-repeat: no-repeat;
		background-attachment: cover;
		background-size: 100%;
	}
	.gm4{
		background-image: url('assets/gelato.jpg');
		background-repeat: no-repeat;
		background-attachment: cover;
		background-size: 100%;
	}
	.gm h1 a{
		text-decoration: none;
		color: black;
	}
	.gm h1{
	    font-size: 3em;
	    letter-spacing: 5px;
	    -webkit-text-stroke: 1.5px grey;
	}
	
	.h{
	    //display: none;
	}
	.s{
	    //display: inline;
	}
	.header{
		font-size: 3.5em;
	}
</style>
<link rel="stylesheet" href="css/nav.css">
<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
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
	
		<div class="one">
		    <div class="row-1">
		        <div>
		            <h4 class="header">WELCOME IN <font color="#A6FF95">Green</font><font color="#FF8080">Candy</font> SHOP</h4>
		        </div>
		        <div>
		            <button><a href="shop.php">Shop Here ! </a></button>
		        </div>
		    </div>
		</div>

		<div class="container" align="center">
		    <div class="row">
		        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="0.9" d="M0,224L0,96L130.9,96L130.9,288L261.8,288L261.8,160L392.7,160L392.7,64L523.6,64L523.6,128L654.5,128L654.5,288L785.5,288L785.5,96L916.4,96L916.4,128L1047.3,128L1047.3,192L1178.2,192L1178.2,64L1309.1,64L1309.1,192L1440,192L1440,0L1309.1,0L1309.1,0L1178.2,0L1178.2,0L1047.3,0L1047.3,0L916.4,0L916.4,0L785.5,0L785.5,0L654.5,0L654.5,0L523.6,0L523.6,0L392.7,0L392.7,0L261.8,0L261.8,0L130.9,0L130.9,0L0,0L0,0Z"></path></svg>
		        <div class="gm gm1">
		        	<h1><a href="item.php?type=cone">CONE</a></h1>
		        </div>
	    	</div>
		    <div class="row">
		        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="0.9" d="M0,224L0,96L130.9,96L130.9,288L261.8,288L261.8,160L392.7,160L392.7,64L523.6,64L523.6,128L654.5,128L654.5,288L785.5,288L785.5,96L916.4,96L916.4,128L1047.3,128L1047.3,192L1178.2,192L1178.2,64L1309.1,64L1309.1,192L1440,192L1440,0L1309.1,0L1309.1,0L1178.2,0L1178.2,0L1047.3,0L1047.3,0L916.4,0L916.4,0L785.5,0L785.5,0L654.5,0L654.5,0L523.6,0L523.6,0L392.7,0L392.7,0L261.8,0L261.8,0L130.9,0L130.9,0L0,0L0,0Z"></path></svg>
		        <div class="gm gm2">
	        		<h1><a href="item.php?type=stick">STICK</a></h1>
	        	</div>
	        </div>
		    <div class="row">
		        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="0.9" d="M0,224L0,96L130.9,96L130.9,288L261.8,288L261.8,160L392.7,160L392.7,64L523.6,64L523.6,128L654.5,128L654.5,288L785.5,288L785.5,96L916.4,96L916.4,128L1047.3,128L1047.3,192L1178.2,192L1178.2,64L1309.1,64L1309.1,192L1440,192L1440,0L1309.1,0L1309.1,0L1178.2,0L1178.2,0L1047.3,0L1047.3,0L916.4,0L916.4,0L785.5,0L785.5,0L654.5,0L654.5,0L523.6,0L523.6,0L392.7,0L392.7,0L261.8,0L261.8,0L130.9,0L130.9,0L0,0L0,0Z"></path></svg>
		        <div class="gm gm3">
	        		<h1><a href="item.php?type=sundae">SUNDAE</a></h1>
	    		</div>
		    </div>
		    <div class="row">
		        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="0.9" d="M0,224L0,96L130.9,96L130.9,288L261.8,288L261.8,160L392.7,160L392.7,64L523.6,64L523.6,128L654.5,128L654.5,288L785.5,288L785.5,96L916.4,96L916.4,128L1047.3,128L1047.3,192L1178.2,192L1178.2,64L1309.1,64L1309.1,192L1440,192L1440,0L1309.1,0L1309.1,0L1178.2,0L1178.2,0L1047.3,0L1047.3,0L916.4,0L916.4,0L785.5,0L785.5,0L654.5,0L654.5,0L523.6,0L523.6,0L392.7,0L392.7,0L261.8,0L261.8,0L130.9,0L130.9,0L0,0L0,0Z"></path></svg>
		        <div class="gm gm4">
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
