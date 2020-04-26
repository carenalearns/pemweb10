<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($conn,"select * from pd");
$html = '<center><h2>DAFTAR DATA PESERTA DIDIK</h2></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Tanggal Regis</th>
 <th>Nama</th>
 <th>Jenis Kelamin</th>
 <th>NISN</th>
 <th>NIK/No. KITAS</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>No. Regis Akta</th>
 <th>Agama</th>
 <th>Kewarganegaraan</th>
 <th>Negara</th>
 <th>Berkebutuhan Khusus</th>
 <th>Alamat</th>
 <th>RT</th>
 <th>RW</th>
 <th>Dusun</th>
 <th>Kelurahan/Desa</th>
 <th>Kecamatan</th>
 <th>Kode Pos</th>
 <th>Lintang</th>
 <th>Bujur</th>
 <th>Tempat Tinggal</th>
 <th>Transportasi</th>
 <th>No.KKS</th>
 <th>Anak ke</th>
 <th>KPS</th>
 <th>No.KPS</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['tgl']."</td>
 <td>".$row['nama']."</td>
 <td>".$row['jk']."</td>
 <td>".$row['nisn']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['tempatl']."</td>
 <td>".$row['tanggall']."</td>
 <td>".$row['akta']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['kwn']."</td>
 <td>".$row['negara']."</td>
 <td>".$row['bk']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['rt']."</td>
 <td>".$row['rw']."</td>
 <td>".$row['ndsn']."</td>
 <td>".$row['nkel']."</td>
 <td>".$row['nkec']."</td>
 <td>".$row['kp']."</td>
 <td>".$row['lintang']."</td>
 <td>".$row['bujur']."</td>
 <td>".$row['stempat']."</td>
 <td>".$row['trans']."</td>
 <td>".$row['nokks']."</td>
 <td>".$row['anakke']."</td>
 <td>".$row['kps']."</td>
 <td>".$row['nokps']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
$dompdf->setPaper('A1', 'landscape');
$dompdf->render();
$dompdf->stream('Laporan Peserta Didik.pdf');
?>
<meta http-equiv="refresh" content="0; url=formpd.php">
