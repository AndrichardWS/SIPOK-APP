<?php
Class Cexport_pdf_dpengemudi extends SessionPengemudi_Controller{

	function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }


    function dpengemudi_by_id($nip_pengemudi){

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
			$data = $this->db->query("SELECT * FROM tbl_master_pengemudi WHERE nip_pengemudi='$nip_pengemudi'")->result();


			foreach ($data as $row){

			
			//make a dummy empty cell as a vertical spacer
				$pdf->Cell(189 ,10,'',0,1);//end of line

				//billing address
				$pdf->SetFont('Arial','B',12);
				$pdf->Cell(100 ,5,'DETAILS PENGEMUDI CHECK',0,1);//end of line
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
				$pdf->Cell(45 ,5,'Nip Pengemudi',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5, $row->nip_pengemudi,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Nama Pengemudi',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->nama_pengemudi,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line
				

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Tempat Lahir',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->tempat_lahir,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Tanggal Lahir',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->tanggal_lahir,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Jenis Kelamin',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->jenis_kelamin,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'No Telp',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->no_telp,0,1);
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

			$pdf->Output("Laporan Detail Pengemudi.pdf","I");


    }



    function dpengemudi_all(){

    	$pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/bi.png');
        $pdf->Cell(280,7,'SIPOK-APP',0,10,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data Pengemudi',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(39,6,'Nip Pengemudi',1,0);
        $pdf->Cell(72,6,'Nama Pengemudi',1,0);
        $pdf->Cell(39,6,'Tempat Lahir',1,0);
        $pdf->Cell(39,6,'Tanggal Lahir',1,0);
        $pdf->Cell(39,6,'Jenis Kelamin',1,0);
        $pdf->Cell(39,6,'No Telp',1,0);
        
       
        $pdf->SetFont('Arial','',10);
        $data = $this->db->query("SELECT * FROM tbl_master_pengemudi ORDER BY nip_pengemudi ASC")->result();

        $no=1;

        foreach ($data as $row){
            $pdf->Cell(40,6 ,'',0,1);
            $pdf->cell(10,6,$no++,1,0);
            $pdf->cell(39,6,$row->nip_pengemudi,1,0);
            $pdf->Cell(72,6,$row->nama_pengemudi,1,0);
            $pdf->Cell(39,6,$row->tempat_lahir,1,0);
            $pdf->Cell(39,6,$row->tanggal_lahir,1,0);
            $pdf->Cell(39,6,$row->jenis_kelamin,1,0); 
            $pdf->Cell(39,6,$row->no_telp,1,0);

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

        $pdf->Output("Laporan Data Pengemudi.pdf","I");




    }

}