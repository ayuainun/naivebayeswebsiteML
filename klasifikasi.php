<!DOCTYPE html>
<html>

<head>
  <title>UTSAYU-Klasifikasi</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet"> 
  <link href="css/animate.css" rel="stylesheet">
</head>

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div> 
      <div id="main-nav" class="collapse navbar-collapse navStyle">
      <ul class="nav navbar-nav" id="mainNav">
        <li><a href="dataset.php">Data Set</a></li>
        <li><a href="login.php">Kembali</a></li>
      </ul>
      </div> 
    </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<!--awal-->
<section id="tes_asma">
  <center>
  <img src="img/kalkulasi1.png">
  <div class="row">
    <h2 align="top"><strong>H e l l o!<strong></h2>
      <h3 align="middle"><strong>
        <font size="5.5">          
          <?php 
          echo $_POST['nama'];
          ?>
        </font><strong></h3> 
</section>
<!--awal--> 

<section id="tes_asma">
<center>
 <body> 
  <form method="post" action="perhitungan.php">   
  <p>&nbsp;</p>
  <table border="6" cellpadding="10" style="border-color:#808080">
    <tr>
      <th style="background-color:#FF4500;"><center>Cuaca</th>
      <th style="background-color:#FF4500;"><center>Temperatur</th>
      <th style="background-color:#FF4500;"><center>Kecepatan Angin</th>
    </tr>
    <tbody>
      <tr>
        <td align="center">
          <select name="input1" style="background-color: black">
            <option value="input1a">Cerah</option>
            <option value="input1b">Hujan</option>
          </select>
        </td>
		<td align="center">
          <select name="input2" style="background-color: black">
            <option value="input2a">Normal</option>
            <option value="input2b">Tinggi</option>  
          </select>
        <td align="center">
          <select name="input3" style="background-color: black">
            <option value="input3a">Pelan</option>
            <option value="input3b">Kencang</option>  
          </select>
        </td>
      </tr>
    </tbody>
  </table>
  <br><button type="submit" value="Submit" style="background-color: red">Kalkulasi</button>
</form>
<br><br><br>
</section>

<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <div class="footer_bottom"><span>AYU AINUN A'ZIZIYYAH <a href="index.php">[1202181021]</a>. </span> </div>
  </div>
</footer>
<!--Footer-->

</body>
</html></center>