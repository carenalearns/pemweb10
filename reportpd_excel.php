<?php
include 'koneksi.php';
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Tanggal Regis');
$sheet->setCellValue('B1', 'Nama Lengkap');
$sheet->setCellValue('C1', 'Jenis Kelamin');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('E1', 'NIK/ NO. KITAS');
$sheet->setCellValue('F1', 'Tempat Lahir');
$sheet->setCellValue('G1', 'Tanggal Lahir');
$sheet->setCellValue('H1', 'No Regis Akta Lahir');
$sheet->setCellValue('I1', 'Agama');
$sheet->setCellValue('J1', 'Kewarganegaraan');
$sheet->setCellValue('K1', 'Negara');
$sheet->setCellValue('L1', 'Berkebutuhan Khusus');
$sheet->setCellValue('M1', 'Alamat');
$sheet->setCellValue('N1', 'RT');
$sheet->setCellValue('O1', 'RW');
$sheet->setCellValue('P1', 'Dusun');
$sheet->setCellValue('Q1', 'Kelurahan/ Desa');
$sheet->setCellValue('R1', 'Kecamatan');
$sheet->setCellValue('S1', 'Kode Pos');
$sheet->setCellValue('T1', 'Lintang');
$sheet->setCellValue('U1', 'Bujur');
$sheet->setCellValue('V1', 'Tempat Tinggal');
$sheet->setCellValue('W1', 'Media Transportasi');
$sheet->setCellValue('X1', 'No. KKS');
$sheet->setCellValue('Y1', 'Anak ke');
$sheet->setCellValue('Z1', 'Penerima KPS/ PKH');
$sheet->setCellValue('AA1', 'No. KPS/ PKH');

$query = mysqli_query($conn,"select * from pd");
$i = 2;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $row['tgl']);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['jk']);
	$sheet->setCellValue('D'.$i, $row['nisn']);	
	$sheet->setCellValue('E'.$i, $row['nik']);
	$sheet->setCellValue('F'.$i, $row['tempatl']);
	$sheet->setCellValue('G'.$i, $row['tanggall']);
	$sheet->setCellValue('H'.$i, $row['akta']);
	$sheet->setCellValue('I'.$i, $row['agama']);
	$sheet->setCellValue('J'.$i, $row['kwn']);
	$sheet->setCellValue('K'.$i, $row['negara']);	
	$sheet->setCellValue('L'.$i, $row['bk']);
	$sheet->setCellValue('M'.$i, $row['alamat']);
	$sheet->setCellValue('N'.$i, $row['rt']);
	$sheet->setCellValue('O'.$i, $row['rw']);
	$sheet->setCellValue('P'.$i, $row['ndsn']);
	$sheet->setCellValue('Q'.$i, $row['nkel']);
	$sheet->setCellValue('R'.$i, $row['nkec']);	
	$sheet->setCellValue('S'.$i, $row['kp']);
	$sheet->setCellValue('T'.$i, $row['lintang']);
	$sheet->setCellValue('U'.$i, $row['bujur']);
	$sheet->setCellValue('V'.$i, $row['stempat']);
	$sheet->setCellValue('W'.$i, $row['trans']);
	$sheet->setCellValue('X'.$i, $row['nokks']);
	$sheet->setCellValue('Y'.$i, $row['anakke']);
	$sheet->setCellValue('Z'.$i, $row['kps']);	
	$sheet->setCellValue('AA'.$i, $row['nokps']);	
	$i++;
}
 
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:AA'.$i)->applyFromArray($styleArray);
 
 
$writer = new Xlsx($spreadsheet);
$writer->save('Laporan Data Peserta Didik.xlsx');
?>