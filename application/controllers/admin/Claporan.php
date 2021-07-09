<?php

class Claporan extends SessionAdmin_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->library('pdff');
    }

	public function index(){

		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_laporan');
	}


    public function rekapitulasi_semua_fungsi(){

        $x['fungsi']=$this->Mfungsi->tampil_fungsi();
        $x['pangkat']=$this->Mpangkat->tampil_pangkat();
        $this->template->load('admin/_vtemplate_admin','admin/_vadmin_rekapitulasi_semua_fungsi',$x);

    }

    public function cetak_rekapitulasi_semua_fungsi(){

        $x['fungsi']=$this->Mfungsi->tampil_fungsi();
        $x['pangkat']=$this->Mpangkat->tampil_pangkat();
        //nama file yang dikonversi ke pdf | PASTIKAN FILE BERADA PADA .views/download/
        $filename_source = 'pdf_data_rekapitulasi_semua_fungsi'; 
        //nama file pdf
        $filename_result = 'Data Rekapitulasi Semua Fungsi'; 
        //ukuran kertas 'letter', 'legal', 'A4',
        $paper_size      = 'legal'; 
        //tipe format kertas 'portrait' or 'landscape'
        $orientation     = 'landscape'; 
        
        $this->pdff->setPaper($paper_size, $orientation);
        $this->pdff->filename = $filename_result;
        $this->pdff->load_view('admin/download/'.$filename_source,$x);

    }


    public function pegawai_per_fungsi(){

        $x['tbl_master_fungsi']=$this->Mfungsi->tampil_fungsi();
        $x['data']=$this->Mpegawai->tampil_pegawai();
        $this->template->load('admin/_vtemplate_admin','admin/_vadmin_pegawai_per_fungsi',$x);

    }


    public function tampil_pegawai_per_fungsi(){

       $formSubmit = $this->input->post('submitForm');

        if( $formSubmit == 'cari' ){

        $carifungsi=$this->input->post('carifungsi');

        $x['tbl_master_fungsi']=$this->Mfungsi->tampil_fungsi();
        $x['data']=$this->Mpegawai->tampil_pegawai_per_fungsi($carifungsi);

        $this->template->load('admin/_vtemplate_admin','admin/_vadmin_pegawai_per_fungsi',$x);

    }else{

        $carifungsi=$this->input->post('carifungsi');

        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/bi.png');
        $pdf->Cell(280,7,'SIPOK-APP',0,10,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data Pegawai Per Fungsi',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(25,6,'Nip Pegawai',1,0);
        $pdf->Cell(45,6,'Nama Pegawai',1,0);
        $pdf->Cell(36,6,'Tempat Lahir',1,0);
        $pdf->Cell(26,6,'Tanggal Lahir',1,0);
        $pdf->Cell(45,6,'Alamat',1,0);
        $pdf->Cell(26,6,'Jenis Kelamin',1,0);
        $pdf->Cell(30,6,'No Telp',1,0);
        $pdf->Cell(45,6,'Email',1,0);
        
       
        $pdf->SetFont('Arial','',10);
        $data_fungsi = $this->db->query("SELECT * FROM tbl_pegawai WHERE kd_fungsi='$carifungsi'")->result();

        // $no=1;

        foreach ($data_fungsi as $row){
            $pdf->Cell(40,6 ,'',0,1);
            $pdf->cell(25,6,$row->nip_pegawai,1,0);
            $pdf->Cell(45,6,$row->nama_pegawai,1,0);
            $pdf->Cell(36,6,$row->tempat_lahir,1,0);
            $pdf->Cell(26,6,$row->tanggal_lahir,1,0);
            $pdf->Cell(45,6,$row->alamat,1,0);
            $pdf->Cell(26,6,$row->jenis_kelamin,1,0); 
            $pdf->Cell(30,6,$row->no_telp,1,0);
            $pdf->Cell(45,6,$row->email,1,0); 

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


        $pdf->Output("Laporan Data Pegawai Per Fungsi.pdf","I");




       

    }
}





	public function permohonan_per_periode(){

		$x['data']=$this->Mpermohonan->tampil_permohonan();
		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_permohonan_per_periode',$x);


	}


    public function tampil_permohonan_per_periode_keluar(){

        $formSubmit = $this->input->post('submitForm');

        if( $formSubmit == 'cari' ){

        $dari_tgl=$this->input->post('dari_tgl');
        $sampai_tgl=$this->input->post('sampai_tgl');
        $status=$this->input->post('status');

        $x['data']=$this->Mpermohonan->tampil_permohonan_periode_keluar($dari_tgl,$sampai_tgl,$status);

        $this->template->load('admin/_vtemplate_admin','admin/_vadmin_permohonan_per_periode',$x);

    }else{

        $dari_tgl=$this->input->post('dari_tgl');
        $sampai_tgl=$this->input->post('sampai_tgl');
        $status=$this->input->post('status');

        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/bi.png');
        $pdf->Cell(280,7,'SIPOK-APP',0,10,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data Permohonan KD Per Periode Tanggal Keluar',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(36,6,'Nip Pegawai',1,0);
        $pdf->Cell(41,6,'Nip Pengemudi',1,0);
        $pdf->Cell(36,6,'No Polisi',1,0);
        $pdf->Cell(36,6,'Jam Keluar',1,0);
        $pdf->Cell(41,6,'Tanggal Keluar',1,0);
        $pdf->Cell(36,6,'Jam Masuk',1,0);
        $pdf->Cell(41,6,'Tanggal Masuk',1,0);
        
       
        $pdf->SetFont('Arial','',10);
        $data_periode = $this->db->query("SELECT * FROM tbl_permohonan WHERE tanggal_keluar BETWEEN '$dari_tgl' AND '$sampai_tgl' AND status='$status' ORDER BY tanggal_keluar ASC")->result();

        $no=1;

        foreach ($data_periode as $row){
            $pdf->Cell(40,6 ,'',0,1);
            $pdf->cell(10,6,$no++,1,0);
            $pdf->cell(36,6,$row->nip_pegawai,1,0);
            $pdf->Cell(41,6,$row->nip_pengemudi,1,0);
            $pdf->Cell(36,6,$row->no_polisi,1,0);
            $pdf->Cell(36,6,$row->jam_keluar,1,0);
            $pdf->Cell(41,6,$row->tanggal_keluar,1,0);
            $pdf->Cell(36,6,$row->jam_masuk,1,0); 
            $pdf->Cell(41,6,$row->tanggal_masuk,1,0); 

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

        $pdf->Output("Laporan Permohonan KD Per Periode Tanggal Keluar.pdf","I");
    }


    }



	public function tampil_permohonan_per_periode_masuk(){

		$formSubmit = $this->input->post('submitForm');

        if( $formSubmit == 'cari' ){

		$dari_tgl=$this->input->post('dari_tgl');
		$sampai_tgl=$this->input->post('sampai_tgl');
		$status=$this->input->post('status');

		$x['data']=$this->Mpermohonan->tampil_permohonan_periode_masuk($dari_tgl,$sampai_tgl,$status);

		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_permohonan_per_periode',$x);

	}else{

		$dari_tgl=$this->input->post('dari_tgl');
		$sampai_tgl=$this->input->post('sampai_tgl');
		$status=$this->input->post('status');

		$pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/bi.png');
        $pdf->Cell(280,7,'SIPOK-APP',0,10,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data Permohonan KD Per Periode Tanggal Masuk',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(36,6,'Nip Pegawai',1,0);
        $pdf->Cell(41,6,'Nip Pengemudi',1,0);
        $pdf->Cell(36,6,'No Polisi',1,0);
        $pdf->Cell(36,6,'Jam Keluar',1,0);
        $pdf->Cell(41,6,'Tanggal Keluar',1,0);
        $pdf->Cell(36,6,'Jam Masuk',1,0);
        $pdf->Cell(41,6,'Tanggal Masuk',1,0);
        
       
        $pdf->SetFont('Arial','',10);
        $data_periode = $this->db->query("SELECT * FROM tbl_permohonan WHERE tanggal_masuk BETWEEN '$dari_tgl' AND '$sampai_tgl' AND status='$status' ORDER BY tanggal_masuk ASC")->result();

        $no=1;

        foreach ($data_periode as $row){
            $pdf->Cell(40,6 ,'',0,1);
            $pdf->cell(10,6,$no++,1,0);
            $pdf->cell(36,6,$row->nip_pegawai,1,0);
            $pdf->Cell(41,6,$row->nip_pengemudi,1,0);
            $pdf->Cell(36,6,$row->no_polisi,1,0);
            $pdf->Cell(36,6,$row->jam_keluar,1,0);
            $pdf->Cell(41,6,$row->tanggal_keluar,1,0);
            $pdf->Cell(36,6,$row->jam_masuk,1,0); 
            $pdf->Cell(41,6,$row->tanggal_masuk,1,0); 

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


        $pdf->Output("Laporan Permohonan KD Per Periode Tanggal Masuk.pdf","I");
    }

}


public function service_per_periode(){

    $x['data']=$this->Mservice->tampil_service();
    $this->template->load('admin/_vtemplate_admin','admin/_vadmin_service_per_periode',$x);

}


public function tampil_service_per_periode(){

    $formSubmit = $this->input->post('submitForm');

        if( $formSubmit == 'cari' ){

        $dari_tgl=$this->input->post('dari_tgl');
        $sampai_tgl=$this->input->post('sampai_tgl');

        $x['data']=$this->Mservice->tampil_service_per_periode($dari_tgl,$sampai_tgl);

        $this->template->load('admin/_vtemplate_admin','admin/_vadmin_service_per_periode',$x);

    }else{

        $dari_tgl=$this->input->post('dari_tgl');
        $sampai_tgl=$this->input->post('sampai_tgl');

        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/bi.png');
        $pdf->Cell(280,7,'SIPOK-APP',0,10,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data Service KD Per Periode',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(25,6,'No Polisi',1,0);
        $pdf->Cell(36,6,'Nama Kendaraan',1,0);
        $pdf->Cell(36,6,'Merk Kendaraan',1,0);
        $pdf->Cell(36,6,'Jenis Kendaraan',1,0);
        $pdf->Cell(36,6,'Tahun Produksi',1,0);
        $pdf->Cell(36,6,'Tanggal Service',1,0);
        $pdf->Cell(60,6,'Keterangan',1,0);
        
       
        $pdf->SetFont('Arial','',10);
        $data_periode = $this->db->query("SELECT * FROM tbl_service_kendaraan INNER JOIN  tbl_master_kendaraan ON tbl_master_kendaraan.no_polisi=tbl_service_kendaraan.no_polisi INNER JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan WHERE tanggal_service BETWEEN '$dari_tgl' AND '$sampai_tgl' ORDER BY tanggal_service ASC")->result();

        $no=1;

        foreach ($data_periode as $row){
            $pdf->Cell(40,6 ,'',0,1);
            $pdf->cell(10,6,$no++,1,0);
            $pdf->cell(25,6,$row->no_polisi,1,0);
            $pdf->Cell(36,6,$row->nama_kendaraan,1,0);
            $pdf->Cell(36,6,$row->merk_kendaraan,1,0);
            $pdf->Cell(36,6,$row->jenis_kendaraan,1,0);
            $pdf->Cell(36,6,$row->tahun_produksi,1,0);
            $pdf->Cell(36,6,$row->tanggal_service,1,0);
            $pdf->Cell(60,6,$row->keterangan,1,0);

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


        $pdf->Output("Laporan Service KD Per Periode.pdf","I");
    }

}








}