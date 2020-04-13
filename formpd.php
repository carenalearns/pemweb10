<!DOCTYPE html>
<html>
<head>
	<title>Form Peserta Didik</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning{color: #FF0000}
	</style>
</head>
<body>
<?php 

$error_nama="";
$error_jk="";
$error_nisn="";
$error_nik="";
$error_tempatl="";
$error_tanggall="";
$error_akta="";
$error_agama="";
$error_kwn="";
$error_negara="";
$error_bk="";
$error_alamat="";
$error_rt="";
$error_rw="";
$error_ndsn="";
$error_nkel="";
$error_nkec="";
$error_kp="";
$error_lintang="";
$error_bujur="";
$error_stempat="";
$error_trans="";
$error_nokks="";
$error_anakke="";
$error_kps="";
$error_nokps="";

date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d");
$nama="";
$jk="";
$nisn="";
$nik="";
$tempatl="";
$tanggall="";
$akta="";
$agama="";
$kwn="";
$negara="";
$bk="";
$alamat="";
$rt="";
$rw="";
$ndsn="";
$nkel="";
$nkec="";
$kp="";
$lintang="";
$bujur="";
$stempat="";
$trans="";
$nokks="";
$anakke="";
$kps="";
$nokps="";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (empty($_POST["nama"])) {
		$error_nama="nama lengkap wajib diisi";
	}
	else {
		$nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
			$error_nama="hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["jk"])) {
	$error_jk="Jenis Kelamin tidak boleh kosong";
	}
	else {
		$jk = cek_input($_POST["jk"]);
	}
	
	if (empty($_POST["nisn"])) {
	$error_nisn="NISN wajib diisi";
	}
	else {
		$nisn = cek_input($_POST["nisn"]);
			if (!is_numeric($nisn) || strlen($_POST["nisn"])!=10) {
			$error_nisn = "NISN hanya boleh angka dan terdiri dari 10 digit";
			}
	}

	if (empty($_POST["nik"])) {
	$error_nik="NIK wajib diisi";
	}
	else {
		$nik = cek_input($_POST["nik"]);
			if (!is_numeric($nik) || strlen($_POST["nik"])!=16) {
			$error_nik = "NIK hanya boleh angka dan terdiri dari 16 digit";
			}
	}

	if (empty($_POST["tempatl"])) {
		$error_tempatl="tempat lahir wajib diisi";
	}
	else {
		$tempatl = cek_input($_POST["tempatl"]);
		if (!preg_match("/^[a-zA-Z]*$/", $tempatl)) {
			$error_tempatl="hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["tanggall"])) {
		$error_tanggall="tanggal lahir wajib diisi";
	}
	else {
		$tanggall = cek_input($_POST["tanggall"]);
		if (!preg_match("/^[0-9+\/]/", $tanggall)) {
			$error_tanggall="format tanggal salah";
		}
	}

	if (empty($_POST["akta"])) {
		$error_akta="no. regis akta lahir wajib diisi";
	}
	else {
		$akta = cek_input($_POST["akta"]);
		if (!preg_match("/^[A-Z0-9+\/]/", $akta)) {
			$error_akta="nomor regis akta salah";
		}
	}	

	if (($_POST["agama"])=="Pilih") {
	$error_agama="pilih agama";
	}
	else {
		$agama = cek_input($_POST["agama"]);
	}

	if (empty($_POST["kwn"])) {
	$error_kwn="kewarganegaraan wajib diisi";
	}
	else {
		$kwn = cek_input($_POST["kwn"]);
	}

	if (($_POST["kwn"])=="WNA"&&empty($_POST["negara"])) {
		$error_negara="Jika WNA maka negara wajib diisi";
	}
	elseif (($_POST["kwn"])=="WNI") {
		$negara="";
	}
	else {
		$negara = cek_input($_POST["negara"]);
		if (!preg_match("/^[a-zA-Z]*$/", $negara)) {
			$error_negara="inputan hanya terdiri dari huruf dan spasi";
		}
	}

	if (empty($_POST["bk"])) {
		$bk="-";
	}
	else {
		$bk = cek_input($_POST["bk"]);
	}

	if (empty($_POST["alamat"])) {
	$error_alamat="alamat wajib diisi";
	}
	else {
		$alamat = cek_input($_POST["alamat"]);
	}

	if (empty($_POST["rt"])) {
		$error_rt="wajib diisi";
	}
	else {
		$rt = cek_input($_POST["rt"]);
		if(!is_numeric($rt)){
			$error_rt = "Hanya boleh angka";
		}
	}

	if (empty($_POST["rw"])) {
		$error_rw="wajib diisi";
	}
	else {
		$rw = cek_input($_POST["rw"]);
		if(!is_numeric($rw)){
			$error_rw = "Hanya boleh angka";
		}
	}

	if (empty($_POST["ndsn"])) {
		$error_ndsn="wajib diisi";
	}
	else {
		$ndsn = cek_input($_POST["ndsn"]);
	}

	if (empty($_POST["nkel"])) {
		$error_nkel="wajib diisi";
	}
	else {
		$nkel = cek_input($_POST["nkel"]);
	}

	if (empty($_POST["nkec"])) {
		$error_nkec="wajib diisi";
	}
	else {
		$nkec = cek_input($_POST["nkec"]);
	}
	
	if (empty($_POST["kp"])) {
		$error_kp="wajib diisi";
	}
	else {
		$kp = cek_input($_POST["kp"]);
		if(!is_numeric($kp)){
			$error_kp = "Hanya boleh angka";
		}
	}

	if (empty($_POST["lintang"])) {
		$error_lintang="wajib diisi";
	}
	else {
		$lintang = cek_input($_POST["lintang"]);
		if (!preg_match("/^[0-9+.-]*$/", $lintang)) {
			$error_lintang="format salah";
		}
	}

	if (empty($_POST["bujur"])) {
		$error_bujur="wajib diisi";
	}
	else {
		$bujur = cek_input($_POST["bujur"]);
		if (!preg_match("/^[0-9+.-]*$/", $bujur)) {
			$error_bujur="format salah";
		}
	}

	if (empty($_POST["stempat"])) {
		$error_stempat="wajib diisi";
	}
	else {
		$stempat = cek_input($_POST["stempat"]);
		if (!preg_match("/^[a-zA-Z]*$/", $stempat)) {
			$error_stempat="hanya boleh huruf dan spasi";
		}
	}

	if (($_POST["trans"])=="Pilih") {
	$error_trans="pilih media transportasi";
	}
	else {
		$trans = cek_input($_POST["trans"]);
	}

	if (empty($_POST["stempat"])) {
		$error_stempat="wajib diisi";
	}
	else {
		$stempat = cek_input($_POST["stempat"]);
		if (!preg_match("/^[a-zA-Z]*$/", $stempat)) {
			$error_stempat="hanya boleh huruf dan spasi";
		}
	}
	
	if (!preg_match("/^[A-Z0-9]*$/", $nokks)) {
		$error_nokks="format salah";
	}
	else {
		$nokks = cek_input($_POST["nokks"]);
	}
	
	if (empty($_POST["anakke"])) {
		$error_anakke="wajib diisi";
	}
	else {
		$anakke = cek_input($_POST["anakke"]);
		if(!is_numeric($anakke)){
			$error_anakke = "hanya boleh angka";
		}
	}

	if (empty($_POST["kps"])) {
		$error_kps="wajib diisi";
	}
	else {
		$kps = cek_input($_POST["kps"]);
	}

	if (($_POST["kps"])=="Ya"&&empty($_POST["nokps"])) {
		$error_nokps="pemilik KPS atau PKH wajib mengisi";
	}
	elseif (($_POST["kps"])=="Tidak") {
		$nokps="";
	}
	else {
		$nokps = cek_input($_POST["nokps"]);
		if (!preg_match("/^[a-z0-9]*$/", $nokps)) {
			$error_nokps="format salah";
		}
	}	
}

function cek_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	
	return $data;
}
?>

<div class="row">
<div class="col-md-12">
<div class="container">
<div class="card">
	<div class="card-header bg-primary text-white" align="center">
		<b>FORMULIR PESERTA DIDIK</b>
	</div>
	<div class="card-body">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="form-group row">
				<label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
				<div class="col-sm-2">
					<input type="text" name="tgl" class="form-control" id="tgl" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("d/m/Y");?>" readonly="true">
					<span></span>
				</div>
			</div>
			<p class="bg-light" align="center">
				<b>DATA PRIBADI</b>
			</p>
			<div class="form-group row">
				<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
				<div class="col-sm-8">
					<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid":"");?>" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama;?>">
					<span class="warning"><?php echo $error_nama; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
				    <input type="radio" name="jk" <?php if (isset($jk) && $jk=="L") ;?> value="L"> Laki-laki
					<input type="radio" name="jk" <?php if (isset($jk) && $jk=="P") ;?> value="P"> Perempuan 
					<span class="warning"><?php echo $error_jk; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
				<div class="col-sm-5">
					<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid":"");?>" id="nisn" placeholder="Nomor Induk Siswa Nasional" value="<?php echo $nisn;?>">
					<span class="warning"><?php echo $error_nisn; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="nik" class="col-sm-2 col-form-label">NIK/ No. KITAS</label>
				<div class="col-sm-5">
					<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid":"");?>" id="nik" placeholder="NIK / No. KITAS (WNA)" value="<?php echo $nik;?>">
					<span class="warning"><?php echo $error_nik; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="tempatl" class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-5">
					<input type="text" name="tempatl" class="form-control <?php echo ($error_tempatl !="" ? "is-invalid":"");?>" id="tempatl" placeholder="Tempat Lahir" value="<?php echo $tempatl;?>">
					<span class="warning"><?php echo $error_tempatl; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="tanggall" class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-2">
					<input type="text" name="tanggall" class="form-control <?php echo ($error_tanggall !="" ? "is-invalid":"");?>" id="tanggall" placeholder="DD/MM/YYYY" value="<?php echo $tanggall;?>">
					<span class="warning"><?php echo $error_tanggall; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="akta" class="col-sm-2 col-form-label">No. Regis Akta Lahir</label>
				<div class="col-sm-5">
					<input type="text" name="akta" class="form-control <?php echo ($error_akta !="" ? "is-invalid":"");?>" id="akta" placeholder="Nomor Registrasi Akta Lahir" value="<?php echo $akta;?>">
					<span class="warning"><?php echo $error_akta; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="agama" class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-3">
					<select name="agama" class="form-control <?php echo ($error_agama !="" ? "is-invalid":"");?>" id="agama">
						<option value="Pilih">- Pilih -</option>
						<option value="Islam">Islam</option>
        				<option value="Kristen">Kristen</option>
        				<option value="Khatolik">Khatolik</option>
        				<option value="Buddha">Buddha</option>
        				<option value="Hindu">Hindu</option>
        				<option value="Kong Hu Cu">Kong Hu Cu</option>
        			</select>
					<span class="warning"><?php echo $error_agama; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
				<div class="col-sm-5">
				    <input type="radio" name="kwn" <?php if (isset($kwn) && $kwn=="WNI") ;?> value="WNI"> WNI
					<input type="radio" name="kwn" <?php if (isset($kwn) && $kwn=="WNA") ;?> value="WNA"> WNA 
					<input type="text" name="negara" class="form-control <?php echo ($error_negara !="" ? "is-invalid":"");?>" id="negara" placeholder="Negara *diisi bila WNA" value="<?php echo $negara;?>">
					<span class="warning"><?php echo $error_kwn; echo $error_negara; ?></span>
				</label>
				</div>
			</div>
			<div class="form-group row">
				<label for="bk" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
				<div class="col-sm-8">
					<input type="text" name="bk" class="form-control <?php echo ($error_bk !="" ? "is-invalid":"");?>" id="bk" placeholder="Berkebutuhan Khusus *tidak wajib" value="<?php echo $bk;?>">
					<span class="warning"><?php echo $error_bk; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-8">
					<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid":"");?>" id="alamat" placeholder="Alamat Jalan" value="<?php echo $alamat;?>">
					<span class="warning"><?php echo $error_alamat; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="rt" class="col-sm-2 col-form-label">RT</label>
				<div class="col-sm-1">
					<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid":"");?>" id="rt" placeholder="RT" value="<?php echo $rt;?>">
					<span class="warning"><?php echo $error_rt; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="rw" class="col-sm-2 col-form-label">RW</label>
				<div class="col-sm-1">
					<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid":"");?>" id="rw" placeholder="RW" value="<?php echo $rw;?>">
					<span class="warning"><?php echo $error_rw; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="ndsn" class="col-sm-2 col-form-label">Dusun</label>
				<div class="col-sm-5">
					<input type="text" name="ndsn" class="form-control <?php echo ($error_ndsn !="" ? "is-invalid":"");?>" id="ndsn" placeholder="Dusun" value="<?php echo $ndsn;?>">
					<span class="warning"><?php echo $error_ndsn; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="nkel" class="col-sm-2 col-form-label">Kelurahan/ Desa</label>
				<div class="col-sm-5">
					<input type="text" name="nkel" class="form-control <?php echo ($error_nkel !="" ? "is-invalid":"");?>" id="nkel" placeholder="Kelurahan/ Desa" value="<?php echo $nkel;?>">
					<span class="warning"><?php echo $error_nkel; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="nkec" class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-5">
					<input type="text" name="nkec" class="form-control <?php echo ($error_nkec !="" ? "is-invalid":"");?>" id="nkec" placeholder="Kecamatan" value="<?php echo $nkec;?>">
					<span class="warning"><?php echo $error_nkec; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="kp" class="col-sm-2 col-form-label">Kode Pos</label>
				<div class="col-sm-2">
					<input type="text" name="kp" class="form-control <?php echo ($error_kp !="" ? "is-invalid":"");?>" id="kp" placeholder="Kode Pos" value="<?php echo $kp;?>">
					<span class="warning"><?php echo $error_kp; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="lintang" class="col-sm-2 col-form-label">Lintang</label>
				<div class="col-sm-5">
					<input type="text" name="lintang" class="form-control <?php echo ($error_lintang !="" ? "is-invalid":"");?>" id="lintang" placeholder="Lintang" value="<?php echo $lintang;?>">
					<span class="warning"><?php echo $error_lintang; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="bujur" class="col-sm-2 col-form-label">Bujur</label>
				<div class="col-sm-5">
					<input type="text" name="bujur" class="form-control <?php echo ($error_bujur !="" ? "is-invalid":"");?>" id="bujur" placeholder="Bujur" value="<?php echo $bujur;?>">
					<span class="warning"><?php echo $error_bujur; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="stempat" class="col-sm-2 col-form-label">Tempat Tinggal</label>
				<div class="col-sm-5">
					<input type="text" name="stempat" class="form-control <?php echo ($error_stempat !="" ? "is-invalid":"");?>" id="stempat" placeholder="Tempat Tinggal" value="<?php echo $stempat;?>">
					<span class="warning"><?php echo $error_stempat; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="trans" class="col-sm-2 col-form-label">Media Transportasi</label>
				<div class="col-sm-3">
					<select name="trans" class="form-control <?php echo ($error_trans !="" ? "is-invalid":"");?>" id="trans">
						<option value="Pilih">- Pilih -</option>
						<option value="Sepeda Motor">Sepeda Motor</option>
        				<option value="Mobil">Mobil</option>
        				<option value="Sepeda">Sepeda</option>
        				<option value="Kendaraan Umum">Kendaraan Umum</option>
        				<option value="Lain-lain">Lain-lain</option>
        			</select>
					<span class="warning"><?php echo $error_trans; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="nokks" class="col-sm-2 col-form-label">No. KKS</label>
				<div class="col-sm-5">
					<input type="text" name="nokks" class="form-control <?php echo ($error_nokks !="" ? "is-invalid":"");?>" id="nokks" placeholder="Nomor Kartu Keluarga Sejahtera *diisi bila memiliki" value="<?php echo $nokks;?>">
					<span class="warning"><?php echo $error_nokks; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="anakke" class="col-sm-2 col-form-label">Anak ke *sesuai KK</label>
				<div class="col-sm-1">
					<input type="text" name="anakke" class="form-control <?php echo ($error_anakke !="" ? "is-invalid":"");?>" id="anakke" placeholder="" value="<?php echo $anakke;?>">
					<span class="warning"><?php echo $error_anakke; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="kps" class="col-sm-2 col-form-label">Penerima PKS/ PKH?</label>
				<div class="col-sm-8">
				    <label class="radio-inline <?php echo ($error_kps !="" ? "is-invalid":"");?>">
				    <input type="radio" name="kps" value="Ya"> Ya
					<input type="radio" name="kps" value="Tidak"> Tidak 
					</label>
					<span class="warning"><?php echo $error_kps; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<label for="nokps" class="col-sm-2 col-form-label">No. KPS/ PKH</label>
				<div class="col-sm-5">
					<input type="text" name="nokps" class="form-control <?php echo ($error_nokps !="" ? "is-invalid":"");?>" id="nokps" placeholder="Nomor KPS/ PKH *diisi bila memiliki" value="<?php echo $nokps;?>">
					<span class="warning"><?php echo $error_nokps; ?></span>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-11">
					<p class="text-info"><br>Catatan : Pastikan semua data terisi. Teliti dengan baik data yang telah dimasukkan sebelum disimpan.</p>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-12" align="right">
					<button type="submit" class="btn btn-primary"> Simpan </button>
					<button type="reset" class="btn btn-danger"> Batal </button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>
<?php
include 'koneksi.php';

if (!empty($nama) && !empty($jk) && !empty($nisn) && !empty($nik) && !empty($tempatl) && !empty($tanggall) && !empty($akta) && !empty($agama)  && !empty($kwn) &&  !empty($alamat) && !empty($rt) && !empty($rw) && !empty($ndsn) && !empty($nkel) && !empty($nkec) && !empty($kp) && !empty($lintang) && !empty($bujur) && !empty($stempat) && !empty($trans) && !empty($anakke) && !empty($kps)) {
	$sql="INSERT INTO pd set tgl='$tgl', nama='$nama', jk='$jk', nisn='$nisn', nik='$nik', tempatl='$tempatl', tanggall='$tanggall', akta='$akta', agama='$agama', kwn='$kwn', negara='$negara', bk='$bk', alamat='$alamat', rt='$rt', rw='$rw', ndsn='$ndsn', nkel='$nkel', nkec='$nkec', kp='$kp', lintang='$lintang', bujur='$bujur', stempat='$stempat', trans='$trans', nokks='$nokks', anakke='$anakke', kps='$kps', nokps='$nokps'";

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Data Tersimpan')</script>";
		?><meta http-equiv="refresh" content="0; url=formpd.php"><?php
	} else {
		echo "<script>alert('Data gagal disimpan')</script>";
	}
mysqli_close();
}
?>
