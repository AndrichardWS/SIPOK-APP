<?php
Class Cexport_pdf_duser extends SessionAdmin_Controller{

	function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    function duser_all(){

    	$pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/bi.png');
        $pdf->Cell(280,7,'SIPOK-APP',0,10,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data User',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(70,6,'Username',1,0);
        $pdf->Cell(100,6,'Password',1,0);
        $pdf->Cell(49,6,'Level',1,0);
        $pdf->Cell(49,6,'Status',1,0);
        
       
        $pdf->SetFont('Arial','',10);
        $data = $this->db->query("SELECT * FROM tbl_pengguna ORDER BY id_pengguna ASC")->result();

        $no=1;

        foreach ($data as $row){
            $pdf->Cell(40,6 ,'',0,1);
            $pdf->cell(10,6,$no++,1,0);
            $pdf->cell(70,6,$row->username,1,0);
            $pdf->cell(100,6,$row->password,1,0);
            $pdf->cell(49,6,$row->level,1,0);
            $pdf->cell(49,6,$row->status,1,0);

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

        $pdf->Output("Laporan Data User.pdf","I");

    }
}