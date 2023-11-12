<?php
if (isset($_GET["name"]) && isset($_GET["harga"])) {
  
} else {
  header("Location: shop.php");
  exit();
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Check Out | <?= $_GET["name"] ?></title>
<style type="text/css" media="all">
  *{
    padding: 0;
    margin: 0;
  }
  .barang{
    width: 100vw;
    height: 10vh;
    display: flex;
    padding: 2vh;
    background-color: rgba(88,239,82,0.487);
  }
  .barang img{
      width: 100%;
  }
  .barang div:nth-child(1){
    flex: 0.3;
    border: 2px solid black;
    overflow: hidden;

  }
  .barang div:nth-child(2){
    flex: 3;
    padding-left: 10vw;
  }
  form{
    width: 100vw;
    
    padding: 2vh;
  }
  textarea{
    width: 100%;
    padding: 1%;
    
  }
  textarea:hover{
    border: 0.1px solid rgb(137,222,235);
  }
  label{
    font-size: 1.5em;
    font-family: Consolas;
    display: inline-block;
  }
  .ongkir, .pembayaran{
    padding: 2vh;
  }
  .total{
    padding: 2vh;
    background-color: rgb(188,219,224);
    width: 100%;
    margin-bottom: 20vh;
  }
  .total div{
    display: flex;
    width: 100%;
    
  }
  .total div p{
    flex: 1;
    font-family: Courier;
  }
  .total hr{
    margin: 1vh;
  }
  .total p span:nth-child(1){
    justify-content: start;
  }
  .total div p:nth-child(2){
    text-align: right;
  }
  .next{
    display: flex;
    position: fixed;
    justify-content: space-between;
    bottom: 0px;
    width: 100%;
    padding: 1vh;
    left: 0px;
    background-color: rgb(229,255,64);
  }
  .next div{
    flex: 1;
  }
  .next div:nth-child(2){
    padding: 2vh;
  }
  .next button{
    width: 100%;
    height: 100%;
    background-color: red;
    border: 0;
    border-radius: 10%;
  }
  #bank{
      padding: 2vh;
     //width: 100%;
      background-color: ;
  }
  .rowBank{
      display: flex;
      justify-content: space-between;
  }
  .rowBank input{
      width: 23vw;;
  }
  .tot{
      display: flex;
      width: 50vw;
  }
  .tot input{
      border: 0;
      background-color: rgba(0,0,0,0);
      text-decoration: bold;
      font-size: 100%;
  }
  #ong, #harga-ice{
      border: 0;
      background-color: rgba(0,0,0,0);
      width: 15vw;
  }
  .p{
      display: flex;
      text-align: left;
      width: 5vw;
      justify-content: end;
  }
</style>
</head>
<body>
<div class="barang">
  <div>
    <img src="<?= $_GET['path']; ?>" alt="" />
  </div>
  <div>
    <p><?= $_GET['name']; ?></p>
    <p>Rasa : <?= $_GET['rasa']; ?></p>
    <h5>Harga : <?= $_GET['harga']; ?></h5>
  </div>
</div>

<form action="send.php" method="post" accept-charset="utf-8">
    <input type="hidden" name="name" id="" value="<?= $_GET['name']; ?>">
    <input type="hidden" name="rasa" value="<?= $_GET['rasa']; ?>">
    <input type="hidden" name="harga-total" value="" id="total-harga">
     <input type="hidden" id="ong2" name="ongk">
  <input type="hidden" value="5000" name="harga" id="harga" required="required">
  <div class="item">
    <label for="alamat">alamat</label>
    <br />
    <font size="1" color="red"><p>*Isikan Alamat Yang lengkap</p></font>
    <textarea name="alamat" id=alamat rows="8" required="required"></textarea>
  </div>
  <div class="ongkir">
    <label for="pengiriman">Opsi Pengiriman</label>
    <br>
    <select name="type" id="type" required>
      <option value="regular">Regular</option>
      <option value="kargo">Kargo</option>
    </select>
    <select name="pengiriman" id="pengiriman" required>
      <option value="jne">JNE</option>
      <option value="jt">J&T Express</option>
      <option value="ninja">Ninja Express</option>
      <option value="pos">POS</option>
    </select>
  </div>
  <div class="pembayaran">
    <label for="pembayaran">Opsi Pembayaran</label>
    <br>
    <select name="pembayaran" id="pembayaran" required>
       <option value="cod">COD | Cash Of Delivery</option>
       <option value="bank">Kartu Kredit atau debit</option>
    </select>
    <div id="bank">
        
        
    </div>
  </div>
  <div class="next">
  <div>
    <p>Total Harga</p>
    <h1 class="tot">Rp. <input type="number" name="harga-b" id="harga-b" value="" disabled="disabled" readonly="readonly" required="required"/></h1>
  </div>
  <div>
    <button type="submit">BAYAR</button>
  </div>
</div>

</form>
  <font face="Consolas"><h1>Total Pembayaran</h1></font>
<div class="total">

  <div>
    <p>Harga Ice Cream</p>
    <p class="p">Rp. <input type="number" id="harga-ice" disabled="disabled" readonly="readonly" value="<?= $_GET['harga'] ?>"></p>
  </div>
  <hr />
  <div>
    <p>Ongkir</p>
    <p class="p p2">Rp. <input type="number" id="ong" disabled="disabled" name="ongk" readonly="readonly" value="18000"></p>
  </div>
</div>

<script type="text/javascript">
  const hargab = document.querySelector("#harga-b");
  const harga = document.querySelector("#harga-ice");
  const type = document.querySelector("#type");
  const pem = document.querySelector("#pembayaran");
  const bank = document.querySelector("#bank")
  const ongkir = document.querySelector("#ong")
  const ongkir2 = document.querySelector("#ong2")
  const total = document.querySelector("#total-harga")
  
  pem.addEventListener("change", function(){
      console.log(pem.value)
      if(pem.value == "bank"){
          let text = `
          
        <label for='kartu'>Nomor Kartu</label>
        <br>
        <input type='text' name='kartu' id='kartu' value='' max='16' required/>
        <br>
        <div class='rowBank'>
            <div>
                 <label for='tanggal'>BB/TT</label>
                <br>
                <input type='text' name='tanggal' id='tanggal' value='' required/>
            </div>
            
            <div>
                <label for='cvc'>cvc</label>
                <br>
                <input type='number' name='cvc' id='cvc' value=''  required/>
            </div>
            </div>
            <div>
                <label for='user'>Nama</label>
                <br>
                <input type='text' name='user' id='user' value='' required/>
            </div>
            
                <div>
                <label for='negara'>Negara</label>
                <br>
                <input type='text' name='negara' id='negara' value='' required/>
            </div>
            
            <div>
                <label for='pos'> Kode Pos</label>
                <br>
                <input type='number' name='pos' id='pos' value='' required/>
            </div>
          
          `;
          
          bank.innerHTML = text;
          bank.style.backgroundColor = "#FFE16C"
      } else if(!(pem.value == "bank")){
          bank.style.backgroundColor = "white"
          bank.innerHTML = "";
      }
  })
  
  type.addEventListener("change", function(){
      if(type.value == "regular"){
          ongkir.value = 18000
      } else if(type.value == "kargo"){
          ongkir.value = 25000
      }
      hargab.value = ongkir.valueAsNumber + harga.valueAsNumber
      total.value = ongkir.valueAsNumber + harga.valueAsNumber
      ongkir2.value = ongkir.valueAsNumber
  })
  console.log(ongkir)
  total.value = ongkir.valueAsNumber + harga.valueAsNumber
  hargab.value = ongkir.valueAsNumber + harga.valueAsNumber
  ongkir2.value = ongkir.valueAsNumber
</script>
</body>
</html>