<!DOCTYPE html>
<html>
<head>
  <title>UTSAYU-Perhitungan</title>
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
        <li><a href="index.php">Kembali</a></li>
      </ul>
      </div> 
    </nav>
    </div>
  </div>
</header>
<!--Header_section--> 
<marquee scrolldelay="100" style="font-family:arial; font-size:20px; color:#000000;" bgcolor="FF4500"><b>Hasil Perhitungan</marquee> 


<body>
<section id="tes_asma">
<div class="inner_wrapper">
<div class="container">
<table border="3" align="center" width="850" style="border-color:#FF0000; background-color:#000000;">
	<tr>
	</tr>
		<tr>
			<td style="color:#F8F8FF;">	

<?php 

 $input1 = $_POST['input1'];
 $input2 = $_POST['input2'];
 $input3 = $_POST['input3'];

 $prob_olhrg = 4/6;
 $prob_tidak_olhrga = 2/6;

 #===========Cuaca==============
 $crhy = 4/6;
 $crht = 2/6;
 
 $hjy = 2/6;
 $hjt = 2/6;

 #=============Temperatur=================
 $nrmly = 4/6;
 $nrmlt = 2/6;
 
 $tnggiy = 2/6;
 $tnggit = 4/6;

#==============Kecepatan Angin===================
 $ply = 4/6;
 $plt = 2/6;
 
 $kcy = 2/6;
 $kct = 4/6;

#===============================
if ($input1 == 'input1a'){ //cerah
  $temp1 = $input1;
  $y_olh1 = $crhy;
  $t_olh1 = $crht;
}
if ($input1 == 'input1b'){ //hujan
  $y_olh1 = $hjy;
  $t_olh1 = $hjt;
}

#===============================
if ($input2 == 'input2a'){ //normal
  $temp2 = $input2;
  $y_olh2 = $nrmly;
  $t_olh2 = $nrmlt;
}
if ($input2 == 'input2b'){ //tinggi
  $temp2 = $input2;
  $y_olh2 = $tnggiy;
  $t_olh2 = $tnggit;
}

#===============================
if ($input3 == 'input3a'){ //pelan
  $temp3 = $input3;
  $y_olh3 = $ply;
  $t_olh3 = $plt;
}
if ($input3 == 'input3b'){ //kencang
  $temp3 = $input3;
  $y_olh3 = $kcy;
  $t_olh3 = $kct;
}

$total_y_olh = $y_olh1 * $y_olh2 * $y_olh3 * $prob_olhrg;
$total_t_olh = $t_olh1 * $t_olh2 * $t_olh3 * $prob_tidak_olhrga;

echo "Hasil Probabilitas ( P[ Ya Olahraga ] ) : <br>
$total_y_olh;".'<br/>'.'<br/>';

echo "Hasil Probabilitas ( P[ Tidak Olahraga] ) : <br> 
$total_t_olh;".'<br/>'.'<br/>';

if ($total_y_olh > $total_t_olh) {
echo "Jadi apakah seseorang berolahraga atau tidak ?  '.<b><u>Ya.'";
}
elseif ($total_t_olh > $total_y_olh) {
echo "Jadi apakah seseorang berolahraga atau tidak ? '.<b><u>Tidak.'";
}


?>
	</td>
	</tr>
	</div>
	</div>
	<br>
<table>
	<br><br><br><br><br>
	<br><br><br>
</table>

</section>

</body>
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <div class="footer_bottom"><span>AYU AINUN A'ZIZIYYAH <a href="index.php">[1202181021]</a>. </span> </div>
  </div>
</footer>

<br>
</html>
