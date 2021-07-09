<?php
Class Cexport_pdf_dpegawai extends SessionAdmin_Controller{

	function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    function dpegawai_by_id($nip_pegawai){

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
			$data = $this->db->query("SELECT * FROM tbl_pegawai INNER JOIN tbl_pengguna ON tbl_pegawai.id_pengguna=tbl_pengguna.id_pengguna INNER JOIN tbl_master_fungsi ON tbl_pegawai.kd_fungsi=tbl_master_fungsi.kd_fungsi WHERE nip_pegawai='$nip_pegawai'")->result();

			$data1 = $this->db->query("SELECT * FROM tbl_riwayat_pangkat INNER JOIN tbl_master_pangkat ON tbl_riwayat_pangkat.kd_pangkat=tbl_master_pangkat.kd_pangkat WHERE nip_pegawai='$nip_pegawai'")->result();


			foreach ($data as $row){

			
			//make a dummy empty cell as a vertical spacer
				$pdf->Cell(189 ,10,'',0,1);//end of line

				//billing address
				$pdf->SetFont('Arial','B',12);
				$pdf->Cell(100 ,5,'DETAILS PEGAWAI CHECK',0,1);//end of line
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
				$pdf->Cell(45 ,5,'Alamat',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->alamat,0,1);
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
				$pdf->Cell(45 ,5,'Email',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->email,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Fungsi',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->kd_fungsi,0,1);
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
				$pdf->Cell(45 ,5,'Username',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,$row->username,0,1);
				$pdf->Cell(100 ,2,'',0,1);//end of line

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'Password',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(90 ,5,'*Enkripsi Md5',0,1);
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
				$pdf->Cell(45 ,5,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -',0,0);
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


				$pdf->SetFont('Arial','B',12);
				$pdf->Cell(100 ,5,'DETAILS RIWAYAT PANGKAT CHECK',0,1);//end of line
				$pdf->Cell(100 ,5,'',0,1);//end of line


				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(45 ,5,'==================================================',0,0);
				$pdf->SetFont('Arial','I',10);
				$pdf->Cell(100 ,2,'',0,1);//end of line

			

				$pdf->Cell(10,7,'',0,1);
		        $pdf->SetFont('Arial','B',10);
		        $pdf->Cell(10,6,'No',1,0);
		        $pdf->Cell(40,6,'No SK Pangkat',1,0);
		        $pdf->Cell(40,6,'Tanggal SK Pangkat',1,0);
		        $pdf->Cell(25,6,'Kode Pangkat',1,0);
		        $pdf->Cell(75,6,'Nama Pangkat',1,0);

		        $no=1;
		        foreach ($data1 as $row){
		            $pdf->Cell(40,6 ,'',0,1);
		            $pdf->cell(10,6,$no++,1,0);
		            $pdf->cell(40,6,$row->no_sk_pangkat,1,0);
		            $pdf->Cell(40,6,$row->tanggal_sk_pangkat,1,0);
		            $pdf->Cell(25,6,$row->kd_pangkat,1,0);
		            $pdf->Cell(75,6,$row->uraian,1,0);

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


				//make a dummy empty cell as a vertical spacer
				$pdf->Cell(189 ,10,'',0,1);//end of line
				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(182,4,"Di Cetak Pada : Jayapura, ".date('d F Y'),0,0,'R');
				//set font to arial, bold, 14pt

		}

			$pdf->Output("Laporan Detail Pegawai.pdf","I");

    }


    function dpegawai_all(){

    	$pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/bi.png');
        $pdf->Cell(280,7,'SIPOK-APP',0,10,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data Pegawai',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(25,6,'Nip Pegawai',1,0);
        $pdf->Cell(50,6,'Nama Pegawai',1,0);
        $pdf->Cell(36,6,'Tempat Lahir',1,0);
        $pdf->Cell(26,6,'Tanggal Lahir',1,0);
        $pdf->Cell(75,6,'Alamat',1,0);
        $pdf->Cell(26,6,'Jenis Kelamin',1,0);
        $pdf->Cell(30,6,'Fungsi',1,0);
        
       
        $pdf->SetFont('Arial','',10);
        $data = $this->db->query("SELECT * FROM tbl_pegawai INNER JOIN tbl_pengguna ON tbl_pegawai.id_pengguna=tbl_pengguna.id_pengguna INNER JOIN tbl_master_fungsi ON tbl_pegawai.kd_fungsi=tbl_master_fungsi.kd_fungsi ORDER BY nip_pegawai ASC")->result();

        $no=1;

        foreach ($data as $row){
            $pdf->Cell(40,6 ,'',0,1);
            $pdf->cell(10,6,$no++,1,0);
            $pdf->cell(25,6,$row->nip_pegawai,1,0);
            $pdf->Cell(50,6,$row->nama_pegawai,1,0);
            $pdf->Cell(36,6,$row->tempat_lahir,1,0);
            $pdf->Cell(26,6,$row->tanggal_lahir,1,0);
            $pdf->Cell(75,6,$row->alamat,1,0);
            $pdf->Cell(26,6,$row->jenis_kelamin,1,0); 
            $pdf->Cell(30,6,$row->kd_fungsi,1,0);

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

        $pdf->Output("Laporan Data Pegawai.pdf","I");


        		



    }





}