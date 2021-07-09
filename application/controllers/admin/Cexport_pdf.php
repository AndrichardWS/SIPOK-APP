<?php
Class Cexport_pdf extends CI_Controller{

	function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }



	function data_permohonan($id_permohonan){

			//A4 width : 219mm
			//default margin : 10mm each side
			//writable horizontal : 219-(10*2)=189mm

			$pdf = new FPDF('P','mm','A4');

			$pdf->AddPage();

			//Image( file name , x position , y position , width [optional] , height [optional] )
			$pdf->Image('assets/img/pesann.png',65,60,89);
			$pdf->Image('assets/img/bii.png',65,230,89);


			//set font to arial, bold, 14pt
			$pdf->SetFont('Arial','B',14);



			//Cell(width , height , text , border , end line , [align] )

			$pdf->Cell(130 ,5,'FORM PENGGUNAAN KENDARAAN DINAS',0,0);
			$pdf->Cell(59 ,5,'CHECK FASILITAS',0,1);//end of line

			//set font to arial, regular, 12pt
			$pdf->SetFont('Arial','',12);

			$pdf->Cell(130 ,5,'Jl. Dr. Sam Ratulangi No.9,',0,0);
			$pdf->Cell(59 ,5,'',0,1);//end of line
			$pdf->Cell(130 ,5,'Gurabesi, Jayapura Utara, Kota Jayapura, Papua, 92174',0,0);



			// $query=mysqli_query($con,"select * from tblcheck where id = '".$_GET['id']."'");
			//         while($row=mysqli_fetch_array($query)){
			$permohonan = $this->db->query("SELECT * FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai INNER JOIN tbl_master_pengemudi ON tbl_permohonan.nip_pengemudi=tbl_master_pengemudi.nip_pengemudi INNER JOIN tbl_master_kendaraan ON tbl_permohonan.no_polisi=tbl_master_kendaraan.no_polisi INNER JOIN tbl_pengguna ON tbl_pegawai.id_pengguna=tbl_pengguna.id_pengguna WHERE id_permohonan='$id_permohonan'")->result();

			foreach ($permohonan as $row){
			$pdf->Cell(25 ,5,'Username :',0,0);
			$pdf->Cell(34 ,5,$row->username,0,1);//end of line

			$pdf->Cell(130 ,5,'Nomor Telp (+62) 81524737292',0,0);
			$pdf->Cell(25 ,5,'Nomor  :',0,0);
			$pdf->Cell(34 ,5,$row->id_permohonan,0,1);//end of line

			$pdf->Cell(130 ,5,'Fax (0411) 11223344',0,0);
			$pdf->Cell(25 ,5,'To  :',0,0);
			$pdf->Cell(34 ,5,$row->nama_pegawai,0,1);//end of line

			
			//make a dummy empty cell as a vertical spacer
				$pdf->Cell(189 ,10,'',0,1);//end of line

				//billing address
				$pdf->SetFont('Arial','B',12);
				$pdf->Cell(100 ,5,'DETAILS PENGGUNAAN CHECK',0,1);//end of line
				$pdf->Cell(100 ,5,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Nip Pegawai',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5, $row->nip_pegawai,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Nama Pegawai',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->nama_pegawai,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'==================================================',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line
				

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Nip Pengemudi',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->nip_pengemudi,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Nama Pengemudi',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->nama_pengemudi,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'==================================================',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Jenis Kendaraan',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->jenis_kendaraan,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'No Polisi',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->no_polisi,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Nama Kendaraan',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->nama_kendaraan,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'==================================================',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Jam Keluar',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->jam_keluar,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Tanggal Keluar',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->tanggal_keluar,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Jam Masuk',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->jam_masuk,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Tanggal Masuk',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->tanggal_masuk,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Keperluan',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->keperluan,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Tujuan',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->MultiCell(120 ,5,$row->tujuan,0,1);

				
				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				//make a dummy empty cell as a vertical spacer
				$pdf->Cell(189 ,10,'',0,1);//end of line
				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(182,4,"Di Cetak Pada : Jayapura, ".date('d F Y'),0,0,'R');
				//set font to arial, bold, 14pt

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->Cell(189 ,10,'',0,1);//end of line
				$pdf->SetFont('Arial','B',10);

				$pdf->Cell(130 ,4,'PENGEMUDI',0,0);
				$pdf->Cell(59 ,5,'KEPALA UNIT SUMBER DAYA',0,1);//end of line


		}

			$pdf->Output("Laporan Permohonan.pdf","I");

	}








}