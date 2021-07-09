<?php
Class Cexport_pdf_dkendaraan extends SessionPengemudi_Controller{

	function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    function dkendaraan_by_id($no_polisi){

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
			$data = $this->db->query("SELECT * FROM tbl_master_kendaraan INNER JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan WHERE no_polisi='$no_polisi'")->result();


			foreach ($data as $row){

			
			//make a dummy empty cell as a vertical spacer
				$pdf->Cell(189 ,10,'',0,1);//end of line

				//billing address
				$pdf->SetFont('Arial','B',12);
				$pdf->Cell(100 ,5,'DETAILS KENDARAAN CHECK',0,1);//end of line
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
				$pdf->Cell(45 ,5,'No Polisi',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5, $row->no_polisi,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Jenis Kendaraan',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->jenis_kendaraan,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line
				

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Nama Kendaraan',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->nama_kendaraan,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Merk Kendaraan',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->merk_kendaraan,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Tahun Produksi',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->tahun_produksi,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Warna Kendaraan',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->warna_kendaraan,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'No Rangka',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->no_rangka,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'No Mesin',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->no_mesin,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'No BPKB',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->no_bpkb,0,1);
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

			$pdf->Output("Laporan Detail Kendaraan.pdf","I");


    }


    function dkendaraan_all(){

    	$pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/bi.png');
        $pdf->Cell(280,7,'SIPOK-APP',0,10,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data Kendaraan',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(39,6,'No Polisi',1,0);
        $pdf->Cell(39,6,'Jenis Kendaraan',1,0);
        $pdf->Cell(72,6,'Nama Kendaraan',1,0);
        $pdf->Cell(39,6,'Merk Kendaraan',1,0);
        $pdf->Cell(39,6,'Tahun Produksi',1,0);
        $pdf->Cell(39,6,'Warna Kendaraan',1,0);
        
       
        $pdf->SetFont('Arial','',10);
        $data = $this->db->query("SELECT * FROM tbl_master_kendaraan INNER JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan WHERE tbl_master_kendaraan.no_polisi != 'PA000001' AND tbl_master_kendaraan.no_polisi != 'PA000002' ORDER BY no_polisi ASC")->result();

        $no=1;

        foreach ($data as $row){
            $pdf->Cell(40,6 ,'',0,1);
            $pdf->cell(10,6,$no++,1,0);
            $pdf->cell(39,6,$row->no_polisi,1,0);
            $pdf->Cell(39,6,$row->jenis_kendaraan,1,0);
            $pdf->Cell(72,6,$row->nama_kendaraan,1,0);
            $pdf->Cell(39,6,$row->merk_kendaraan,1,0);
            $pdf->Cell(39,6,$row->tahun_produksi,1,0);
            $pdf->Cell(39,6,$row->warna_kendaraan,1,0); 

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

        $pdf->Output("Laporan Data Kendaraan.pdf","I");




    }

}