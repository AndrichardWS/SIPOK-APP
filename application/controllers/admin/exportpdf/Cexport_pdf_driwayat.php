<?php
Class Cexport_pdf_driwayat extends SessionAdmin_Controller{

	function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }


    function driwayat_by_id($id_riwayat_pangkat){

    	//A4 width : 219mm
			//default margin : 10mm each side
			//writable horizontal : 219-(10*2)=189mm

			$pdf = new FPDF('P','mm','A4');

			$pdf->AddPage();

			//Image( file name , x position , y position , width [optional] , height [optional] )
			

			//set font to arial, bold, 14pt
			$pdf->SetFont('Arial','B',14);


			//Cell(width , height , text , border , end line , [align] )

			$pdf->image('assets/img/bi.png');


			// $query=mysqli_query($con,"select * from tblcheck where id = '".$_GET['id']."'");
			//         while($row=mysqli_fetch_array($query)){
			$data = $this->db->query("SELECT * FROM tbl_riwayat_pangkat INNER JOIN tbl_master_pangkat ON tbl_riwayat_pangkat.kd_pangkat=tbl_master_pangkat.kd_pangkat WHERE id_riwayat_pangkat='$id_riwayat_pangkat'")->result();


			foreach ($data as $row){

			
			//make a dummy empty cell as a vertical spacer
				$pdf->Cell(189 ,10,'',0,1);//end of line

				//billing address
				$pdf->SetFont('Arial','B',12);
				$pdf->Cell(100 ,5,'DETAILS RIWAYAT PANGKAT CHECK',0,1);//end of line
				$pdf->Cell(100 ,5,'',0,1);//end of line


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
				$pdf->Cell(45 ,5,'NIP Pegawai',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5, $row->nip_pegawai,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'No SK Pangkat',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5, $row->no_sk_pangkat,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Tanggal SK Pangkat',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->tanggal_sk_pangkat,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line
				

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Kode Pangkat',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->kd_pangkat,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Uraian',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->uraian,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line



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

		}

			$pdf->Output("Laporan Detail Riwayat Pangkat.pdf","I");



    }


     function driwayat_all($nip_pegawai){

     	$pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/bi.png');
        $pdf->Cell(280,7,'SIPOK-APP',0,10,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data Semua Riwayat Pangkat',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(42,6,'No SK Pangkat',1,0);
        $pdf->Cell(42,6,'Tanggal SK Pangkat',1,0);
        $pdf->Cell(42,6,'Kode Pangkat',1,0);
        $pdf->Cell(140,6,'Nama Pangkat',1,0);
        
       
        $pdf->SetFont('Arial','',10);
        $data = $this->db->query("SELECT * FROM tbl_riwayat_pangkat INNER JOIN tbl_master_pangkat ON tbl_riwayat_pangkat.kd_pangkat=tbl_master_pangkat.kd_pangkat WHERE nip_pegawai='$nip_pegawai' ORDER BY id_riwayat_pangkat ASC")->result();

        $no=1;

        foreach ($data as $row){
            $pdf->Cell(40,6 ,'',0,1);
            $pdf->cell(10,6,$no++,1,0);
            $pdf->cell(42,6,$row->no_sk_pangkat,1,0);
            $pdf->Cell(42,6,$row->tanggal_sk_pangkat,1,0);
            $pdf->Cell(42,6,$row->kd_pangkat,1,0);
            $pdf->Cell(140,6,$row->uraian,1,0);

        }

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


				//make a dummy empty cell as a vertical spacer
				$pdf->Cell(280 ,10,'',0,1);//end of line
				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(280,4,"Di Cetak Pada : Jayapura, ".date('d F Y'),0,0,'R');
				//set font to arial, bold, 14pt

        $pdf->Output("Laporan Data Semua Riwayat Pangkat.pdf","I");

     }

}