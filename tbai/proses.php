	<?php
	//koneksi database
	include_once("config.php");

	//mengambil data diurutkan dari bawah / latest entry first
	$result = mysqli_query($mysqli, "SELECT * FROM tb_statlog ORDER BY ID ASC"); // using mysqli_query instead
	$jumlahdata = mysqli_query($mysqli, "SELECT COUNT(ID) as JUMLAH FROM `tb_statlog`");
	$jumlahdata_ = mysqli_fetch_array($jumlahdata);


	//PENERAPAN METODE NAIVE BAYES STEP 1


	//Mnghitung jumlah normal (1) dan abnormal (0) hasil diagnosa 

	$jumlahdatahasildiagnosa1 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE HasilDiagnosa = 4");
	$jumlahdatahasildiagnosa1_ = mysqli_fetch_array($jumlahdatahasildiagnosa1);

	//----------------------------------------------------------------------------
	$jumlahdatahasildiagnosa2 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE HasilDiagnosa = 8");
	$jumlahdatahasildiagnosa2_ = mysqli_fetch_array($jumlahdatahasildiagnosa2);


	// STEP 2

	//Menghitung Umur
	$jumlahdataumur11 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Umur <= 60 AND HasilDiagnosa = 4");
	    $jumlahdataumur11_ = mysqli_fetch_array($jumlahdataumur11);


	$jumlahdataumur12 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Umur <= 60 AND HasilDiagnosa = 8");
	    $jumlahdataumur12_ = mysqli_fetch_array($jumlahdataumur12);


	//-------------------------------
	$jumlahdataumur21 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE (Umur >= 61 AND Umur <= 70) AND HasilDiagnosa = 4");
	    $jumlahdataumur21_ = mysqli_fetch_array($jumlahdataumur21);


	$jumlahdataumur22 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE (Umur >= 61 AND Umur <= 70) AND HasilDiagnosa = 8");
	    $jumlahdataumur22_ = mysqli_fetch_array($jumlahdataumur22);

	//------------------------
	$jumlahdataumur31 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE (Umur >= 71 AND Umur <= 80) AND HasilDiagnosa = 4");
	    $jumlahdataumur31_ = mysqli_fetch_array($jumlahdataumur31);


	$jumlahdataumur32 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE (Umur >= 71 AND Umur <= 80) AND HasilDiagnosa = 8");
	    $jumlahdataumur32_ = mysqli_fetch_array($jumlahdataumur32);

	//--------------
	$jumlahdataumur41 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE (Umur >= 81 AND Umur <= 90) AND HasilDiagnosa = 4");
	    $jumlahdataumur41_ = mysqli_fetch_array($jumlahdataumur41);


	$jumlahdataumur42 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE (Umur >= 81 AND Umur <= 90) AND HasilDiagnosa = 8");
	    $jumlahdataumur42_ = mysqli_fetch_array($jumlahdataumur42);

	//-----------

	$jumlahdataumur51 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE (Umur >= 91 AND Umur <= 100) AND HasilDiagnosa = 4");
	    $jumlahdataumur51_ = mysqli_fetch_array($jumlahdataumur51);


	$jumlahdataumur52 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE (Umur >= 91 AND Umur <= 100) AND HasilDiagnosa = 8");
	    $jumlahdataumur52_ = mysqli_fetch_array($jumlahdataumur52);



	//Menghiutng jumlah data field penyakit masa kanak
	$jumlahdatapenyakitkanak01 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE PenyakitKanak = 1 AND HasilDiagnosa = 4");
	    $jumlahdatapenyakitkanak01_ = mysqli_fetch_array($jumlahdatapenyakitkanak01);

	$jumlahdatapenyakitkanak02 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE PenyakitKanak = 1 AND HasilDiagnosa = 8");
	    $jumlahdatapenyakitkanak02_ = mysqli_fetch_array($jumlahdatapenyakitkanak02);

	$jumlahdatapenyakitkanak11 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE PenyakitKanak = 4 AND HasilDiagnosa = 4");
	    $jumlahdatapenyakitkanak11_ = mysqli_fetch_array($jumlahdatapenyakitkanak11);

	$jumlahdatapenyakitkanak12 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE PenyakitKanak = 4 AND HasilDiagnosa = 8");
	$jumlahdatapenyakitkanak12_ = mysqli_fetch_array($jumlahdatapenyakitkanak12);

	//Menghitung Lama Demam Tinggi
	$jumlahdatademamtinggi01 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE DemamTinggi = 1 AND HasilDiagnosa = 4");
	$jumlahdatademamtinggi01_ = mysqli_fetch_array($jumlahdatademamtinggi01);
	$jumlahdatademamtinggi02 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE DemamTinggi = 1 AND HasilDiagnosa = 8");
	$jumlahdatademamtinggi02_ = mysqli_fetch_array($jumlahdatademamtinggi02);
	$jumlahdatademamtinggi11 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE DemamTinggi = 4 AND HasilDiagnosa = 4");
	$jumlahdatademamtinggi11_ = mysqli_fetch_array($jumlahdatademamtinggi11);
	$jumlahdatademamtinggi12 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE DemamTinggi = 4 AND HasilDiagnosa = 8");
	$jumlahdatademamtinggi12_ = mysqli_fetch_array($jumlahdatademamtinggi12);

	$jumlahdatademamtinggi21 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE DemamTinggi = -4 AND HasilDiagnosa = 4");
	$jumlahdatademamtinggi21_ = mysqli_fetch_array($jumlahdatademamtinggi21);
	$jumlahdatademamtinggi22 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE DemamTinggi = -4 AND HasilDiagnosa = 8");
	$jumlahdatademamtinggi22_ = mysqli_fetch_array($jumlahdatademamtinggi22);






	//menghitung jumlah data field kecelakaan
	$jumlahdatakecelakaan01 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Kecelakaan = 1 AND HasilDiagnosa = 4");
	$jumlahdatakecelakaan01_ = mysqli_fetch_array($jumlahdatakecelakaan01);
	$jumlahdatakecelakaan02 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Kecelakaan = 1 AND HasilDiagnosa = 8");
	$jumlahdatakecelakaan02_ = mysqli_fetch_array($jumlahdatakecelakaan02);
	$jumlahdatakecelakaan11 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Kecelakaan = 4 AND HasilDiagnosa = 4");
	$jumlahdatakecelakaan11_ = mysqli_fetch_array($jumlahdatakecelakaan11);
	$jumlahdatakecelakaan12 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Kecelakaan = 4 AND HasilDiagnosa = 8");
	$jumlahdatakecelakaan12_ = mysqli_fetch_array($jumlahdatakecelakaan12);



	//Menghitung Tindakan Bedah
	$jumlahdatabedah01 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Bedah = 1 AND HasilDiagnosa = 4");
	$jumlahdatabedah01_ = mysqli_fetch_array($jumlahdatabedah01);
	$jumlahdatabedah02 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Bedah = 1 AND HasilDiagnosa = 8");
	$jumlahdatabedah02_ = mysqli_fetch_array($jumlahdatabedah02);
	$jumlahdatabedah11 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Bedah = 4 AND HasilDiagnosa = 4");
	$jumlahdatabedah11_ = mysqli_fetch_array($jumlahdatabedah11);
	$jumlahdatabedah12 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Bedah = 4 AND HasilDiagnosa = 8");
	$jumlahdatabedah12_ = mysqli_fetch_array($jumlahdatabedah12);




	//Menghitung Merokok 
	$jumlahdatamerokok01 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Merokok = 4 AND HasilDiagnosa = 4");
	$jumlahdatamerokok01_ = mysqli_fetch_array($jumlahdatamerokok01);


	$jumlahdatamerokok02 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Merokok = 4 AND HasilDiagnosa = 8");
	$jumlahdatamerokok02_ = mysqli_fetch_array($jumlahdatamerokok02);



	$jumlahdatamerokok11 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Merokok = 8 AND HasilDiagnosa = 4");
	$jumlahdatamerokok11_ = mysqli_fetch_array($jumlahdatamerokok11);


	$jumlahdatamerokok12 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Merokok = 8 AND HasilDiagnosa = 8");
	$jumlahdatamerokok12_ = mysqli_fetch_array($jumlahdatamerokok12);


	$jumlahdatamerokok21 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Merokok = 12 AND HasilDiagnosa = 4");
	$jumlahdatamerokok21_ = mysqli_fetch_array($jumlahdatamerokok21);


	$jumlahdatamerokok22 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Merokok = 12 AND HasilDiagnosa = 8");
	$jumlahdatamerokok22_ = mysqli_fetch_array($jumlahdatamerokok22);


		$jumlahdatamerokok23 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Merokok = 16 AND HasilDiagnosa = 4");
	$jumlahdatamerokok23_ = mysqli_fetch_array($jumlahdatamerokok23);


	$jumlahdatamerokok24 = mysqli_query($mysqli, "SELECT COUNT(HasilDiagnosa) AS JUMLAH FROM tb_statlog WHERE Merokok = 16 AND HasilDiagnosa = 8");
	$jumlahdatamerokok24_ = mysqli_fetch_array($jumlahdatamerokok24);





	//nilai di ALIAS dtampung di variabel $jumlahdata_ yang ada di STEP 1
	$jumlahdata_["JUMLAH"];  

	//nilai di ALIAS dtampung di variabel $jumlahdatahasilddiagnosa1_ yang ada di STEP 1
	$jumlahdatahasildiagnosa1_["JUMLAH"];
	//nilai di ALIAS dtampung di variabel $jumlahdatahasilddiagnosa1_ yang ada di STEP 1
	$jumlahdatahasildiagnosa2_["JUMLAH"]; 



	// PENERAPAN NAIVE BAYES TAHAP 3

	//variabel $umur11 menampung hasil operasi pembagian nilai 0 dan 1 pada field umur : field hasil diagnosa

	$umur11 = $jumlahdataumur11_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$umur12 = $jumlahdataumur12_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 
	$umur21 = $jumlahdataumur21_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$umur22 = $jumlahdataumur22_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 
	$umur31 = $jumlahdataumur31_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$umur32 = $jumlahdataumur32_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 
	$umur41 = $jumlahdataumur41_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$umur42 = $jumlahdataumur42_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 
	$umur51 = $jumlahdataumur51_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$umur52 = $jumlahdataumur52_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 



	//variabel $penyakitkanak0menampung hasil operasi pembagian nilai 0 dan 1 pada field penyakitkanak : field hasil diagnosa 11_ dan 12_

	$penyakitkanak01 = $jumlahdatapenyakitkanak01_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$penyakitkanak02 = $jumlahdatapenyakitkanak02_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 
	$penyakitkanak11 = $jumlahdatapenyakitkanak11_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$penyakitkanak12 = $jumlahdatapenyakitkanak12_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 




	$kecelakaan01 = $jumlahdatakecelakaan01_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$kecelakaan02 = $jumlahdatakecelakaan02_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 
	$kecelakaan11 = $jumlahdatakecelakaan11_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$kecelakaan12 = $jumlahdatakecelakaan12_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 






	$bedah01 = $jumlahdatabedah01_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$bedah02 = $jumlahdatabedah02_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 
	$bedah11 = $jumlahdatabedah11_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$bedah12 = $jumlahdatabedah12_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 





	$demamtinggi01 = $jumlahdatademamtinggi01_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$demamtinggi02 = $jumlahdatademamtinggi02_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 
	$demamtinggi11 = $jumlahdatademamtinggi11_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$demamtinggi12 = $jumlahdatademamtinggi12_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 
	$demamtinggi21 = $jumlahdatademamtinggi21_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$demamtinggi22 = $jumlahdatademamtinggi22_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 



	$merokok01 = $jumlahdatamerokok01_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$merokok02 = $jumlahdatamerokok02_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 

	$merokok11 = $jumlahdatamerokok11_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$merokok12 = $jumlahdatamerokok12_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 

	$merokok21 = $jumlahdatamerokok21_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$merokok22 = $jumlahdatamerokok22_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 

	$merokok23 = $jumlahdatamerokok23_["JUMLAH"] / $jumlahdatahasildiagnosa1_["JUMLAH"]; 
	$merokok24 = $jumlahdatamerokok24_["JUMLAH"] / $jumlahdatahasildiagnosa2_["JUMLAH"]; 

	if(isset($_POST['Submit'])) {	
		$umur = mysqli_real_escape_string($mysqli, $_POST['Umur']);
	    $penyakitkanak = mysqli_real_escape_string($mysqli, $_POST['PenyakitKanak']);
	    $kecelakaan = mysqli_real_escape_string($mysqli, $_POST['Kecelakaan']);
	    $bedah = mysqli_real_escape_string($mysqli, $_POST['Bedah']);
	    $demamtinggi = mysqli_real_escape_string($mysqli, $_POST['DemamTinggi']);
	    $merokok = mysqli_real_escape_string($mysqli, $_POST['Merokok']);
		
		$result = mysqli_query($mysqli, "INSERT INTO `tb_input` 
	    (`Umur`, `PenyakitKanak`, `Kecelakaan`, `Bedah`, `DemamTinggi`, `Merokok`) 
	    VALUES 
	    ('$umur', '$penyakitkanak', '$kecelakaan', '$bedah', '$demamtinggi', '$merokok')"
	    );



	}
	?>

	<html>
	<head>	
		<title>NB Proses</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body>
	<br>
	<div class="container">
	    <h5>Proses Naive Bayes</h5>
	    <div class="row">
	        <div class="col">
	            <br>
	            <h5>Hasil Input untuk Diklasifikasi</h5>
	            <table class="table table-striped">
					<thead>
	    				<tr>
							<th scope="col">Umur</th>
							<th scope="col">PenyakitKanak</th>
							<th scope="col">Kecelakaan</th>
							<th scope="col">Bedah</th>
							<th scope="col">Demamtinggi</th>
							<th scope="col">Merokok</th>
							<th scope="col">Hasildiagnosa</th>

	    				</tr>	
	  				</thead>
					  <tbody>
					  	<tr>
						  <?php 
							echo "<tr>";
							echo "<td>".$umur."</td>";
							echo "<td>".$penyakitkanak."</td>";
							echo "<td>".$kecelakaan."</td>";	
							echo "<td>".$bedah."</td>";
							echo "<td>".$demamtinggi."</td>";
							echo "<td>".$merokok."</td>";
							?>
						</tr>
					  </tbody>
	            </table>



	 			<br>
	            <h5>Maka, Conditional Probabilities = </h5>
	            <?php 

	            $xmerokok = 0;
	            $xpenyakitkanak = 0;
	            $xkecelakaan = 0;
	                if ($umur <=60) {
	                    $xumur = $umur11;
	                    // echo "umur : ".$xumur.", ";
	                } elseif ($umur >= 61 && $umur <= 70 ) {
	                    $xumur =  $umur21;
	                    // echo "umur : ".$xumur.", ";
	                } elseif ($umur >= 71 && $umur <= 80 ) {
	                    $xumur =  $umur31;	
	                    // echo "umur : ".$xumur.", ";
	                } elseif ($umur >= 81 && $umur <= 90 ) {
	                    $xumur =  $umur41;
	                    // echo "umur : ".$xumur.", ";
	                } elseif ($umur >= 91 && $umur <= 100) {
	                    $xumur =  $umur51;
	                    // echo "umur : ".$xumur.", ";
	                } 
	                if ($penyakitkanak == 1) {
	                    $xpenyakitkanak = $penyakitkanak01;
	                    // echo "penyakitkanak : ".$xpenyakitkanak.", ";
	                } elseif ($penyakitkanak == 4) {
	                    $xpenyakitkanak =  $penyakitkanak11;
	                    // echo "sex : ".$xsex.", ";
	                }

	                 if ($kecelakaan == 1) {
	                    $xkecelakaan = $kecelakaan01;
	                    // echo "penyakitkanak : ".$xpenyakitkanak.", ";
	                } elseif ($kecelakaan == 4) {
	                    $xkecelakaan =  $kecelakaan11;
	                    // echo "sex : ".$xsex.", ";
	                }

	                if ($bedah == 1) {
	                    $xbedah = $bedah01;
	                    // echo "penyakitkanak : ".$xpenyakitkanak.", ";
	                } elseif ($bedah == 4) {
	                    $xbedah =  $bedah11;
	                    // echo "sex : ".$xsex.", ";
	                }
					$xdemamtinggi = 0;
	                 if ($demamtinggi == 1) {
	                    $xdemamtinggi = $demamtinggi01;
	                    // echo "penyakitkanak : ".$xpenyakitkanak.", ";
	                } elseif ($demamtinggi == 4) {
	                    $xdemamtinggi =  $demamtinggi11;
	                    // echo "sex : ".$xsex.", ";
	                } elseif ($demamtinggi == -4) {
	                    $xdemamtinggi =  $demamtinggi21;
	                    // echo "sex : ".$xsex.", ";
	                }

	                if ($merokok == 4) {
	                    $xmerokok = $merokok01;
	                    // echo "penyakitkanak : ".$xpenyakitkanak.", ";
	                } elseif ($merokok == 8) {
	                    $xmerokok =  $merokok11;
	                    // echo "sex : ".$xsex.", ";
	                } elseif ($merokok == 12) {
	                    $xmerokok =  $merokok21;
	                    // echo "sex : ".$xsex.", ";
	                }elseif ($merokok == 16) {
	                    $xmerokok =  $merokok23;
	                    // echo "sex : ".$xsex.", ";
	                }




	                  
	            $pl1 = $xumur*$xpenyakitkanak*$xkecelakaan*$xbedah*$xdemamtinggi*$xmerokok;
	                echo "P (X | Group = 0) = ".$pl1."<br>";
	            ?>
	           <?php 
	                if ($umur <=60) {
	                    $xumur = $umur12;
	                    // echo "umur : ".$xumur.", ";
	                } elseif ($umur >= 61 && $umur <= 70 ) {
	                    $xumur =  $umur22;
	                    // echo "umur : ".$xumur.", ";
	                } elseif ($umur >= 71 && $umur <= 80 ) {
	                    $xumur =  $umur32;
	                    // echo "umur : ".$xumur.", ";
	                } elseif ($umur >= 81 && $umur <= 90 ) {
	                    $xumur =  $umur42;
	                    // echo "umur : ".$xumur.", ";
	                } elseif ($umur >= 91 && $umur <= 100) {
	                    $xumur =  $umur52;
	                    // echo "umur : ".$xumur.", ";
	                } 

	                if ($penyakitkanak == 1) {
	                    $xpenyakitkanak = $penyakitkanak02;
	                    // echo "penyakitkanak : ".$xpenyakitkanak.", ";
	                } elseif ($penyakitkanak == 4) {
	                    $xpenyakitkanak =  $penyakitkanak12;
	                    // echo "sex : ".$xsex.", ";
	                }

	                 if ($kecelakaan == 1) {
	                    $xkecelakaan = $kecelakaan02;
	                    // echo "penyakitkanak : ".$xpenyakitkanak.", ";
	                } elseif ($kecelakaan == 1) {
	                    $xkecelakaan =  $kecelakaan12;
	                    // echo "sex : ".$xsex.", ";
	                }

	                if ($demamtinggi == 1) {
	                    $xdemamtinggi = $demamtinggi11;
	                    // echo "penyakitkanak : ".$xpenyakitkanak.", ";
	                } elseif ($demamtinggi == 4) {
	                    $xdemamtinggi =  $demamtinggi12;
	                    // echo "sex : ".$xsex.", ";

	                } elseif ($demamtinggi == -4) {
	                	$xdemamtinggi =  $demamtinggi22;
	                    // echo "sex : ".$xsex.", ";
	                
	                }

	                if ($bedah == 1) {
	                    $xbedah = $bedah11;
	                    // echo "penyakitkanak : ".$xpenyakitkanak.", ";
	                } elseif ($bedah == 4) {
	                    $xbedah =  $bedah12;
	                    // echo "sex : ".$xsex.", ";
	                }

	                if ($merokok == 4) {
	                    $xmerokok = $merokok02;
	                    // echo "penyakitkanak : ".$xpenyakitkanak.", ";
	                } elseif ($merokok == 8) {
	                    $xmerokok =  $merokok12;
	                    // echo "sex : ".$xsex.", ";
	                } elseif ($merokok == 12) {
	                    $xmerokok =  $merokok22;
	                    // echo "sex : ".$xsex.", ";
	                }elseif ($merokok == 16) {
	                    $xmerokok =  $merokok24;
	                    // echo "sex : ".$xsex.", ";
	                }



	            $pl2 = $xumur*$xpenyakitkanak*$xkecelakaan*$xbedah*$xdemamtinggi*$xmerokok;
	                echo "P (X | Group = 1) = ".$pl2."<br>";
	            ?>
	            <?php 


	                if ($pl1 > $pl2){
	                    echo "<br>";
	                    echo "Jadi, Conditional Probabilites yang terpilih adalah Group 0 / Absence";
	                    echo "<br>";
	                } else if ($pl1 < $pl2) {
	                    echo "<br>";
	                    echo "Jadi, Conditional Probabilites yang terpilih adalah Group 1 / Presence";
	                    echo "<br>";
	                }
	            ?>
	            <br>
	            <a href="index.php" class="btn btn-primary">Kembali</a>
	        </div>
	        <div class="w-100"></div>
	    </div>
	</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</html>

