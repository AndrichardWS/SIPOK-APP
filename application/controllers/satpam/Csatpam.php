<?php

class Csatpam extends SessionSatpam_Controller {

        function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }


	
	public function index(){


        $x['data']=$this->Mpermohonan->tampil_permohonan_accepted();

        foreach ($this->Mpermohonan->grafik_permohonan_fungsi()->result_array() as $row) {
            
        
        $x['grafik2'][]=(float)$row['FAES'];
        $x['grafik2'][]=(float)$row['FASPURKIPK'];
        $x['grafik2'][]=(float)$row['FDSEK'];
        $x['grafik2'][]=(float)$row['FKKK'];
        $x['grafik2'][]=(float)$row['FPPSPPUR'];
        $x['grafik2'][]=(float)$row['FPPU'];
        $x['grafik2'][]=(float)$row['SLA'];
        $x['grafik2'][]=(float)$row['UOSP'];
        }

        foreach ($this->Mpermohonan->grafik_permohonan_bulan()->result_array() as $row) {
            
        
        $x['grafik'][]=(float)$row['Januari'];
        $x['grafik'][]=(float)$row['Februari'];
        $x['grafik'][]=(float)$row['Maret'];
        $x['grafik'][]=(float)$row['April'];
        $x['grafik'][]=(float)$row['Mei'];
        $x['grafik'][]=(float)$row['Juni'];
        $x['grafik'][]=(float)$row['Juli'];
        $x['grafik'][]=(float)$row['Agustus'];
        $x['grafik'][]=(float)$row['September'];
        $x['grafik'][]=(float)$row['Oktober'];
        $x['grafik'][]=(float)$row['November'];
        $x['grafik'][]=(float)$row['Desember'];
        }


        foreach ($this->Mservice->grafik_service_bulan()->result_array() as $row) {
            
        
        $x['grafik1'][]=(float)$row['Januari'];
        $x['grafik1'][]=(float)$row['Februari'];
        $x['grafik1'][]=(float)$row['Maret'];
        $x['grafik1'][]=(float)$row['April'];
        $x['grafik1'][]=(float)$row['Mei'];
        $x['grafik1'][]=(float)$row['Juni'];
        $x['grafik1'][]=(float)$row['Juli'];
        $x['grafik1'][]=(float)$row['Agustus'];
        $x['grafik1'][]=(float)$row['September'];
        $x['grafik1'][]=(float)$row['Oktober'];
        $x['grafik1'][]=(float)$row['November'];
        $x['grafik1'][]=(float)$row['Desember'];
        }
        
		$this->template->load('satpam/_vtemplate_satpam','satpam/_vsatpam_dpermohonan',$x);
	}


            // Edit
    public function edit_permohonan(){

        
        $id_permohonan=$this->input->post('id_permohonan');
        // $nip_pegawai=$this->input->post('nip_pegawai');
        // $nip_pengemudi=$this->input->post('nip_pengemudi');
        // $no_polisi=$this->input->post('no_polisi');
        $jam_keluar=$this->input->post('jam_keluar');
        $tanggal_keluar=$this->input->post('tanggal_keluar');
        $jam_masuk=$this->input->post('jam_masuk');
        $tanggal_masuk=$this->input->post('tanggal_masuk');
        // $keperluan=$this->input->post('keperluan');
        // $tujuan=$this->input->post('tujuan');


        $this->Mpermohonan->edit_data_satpam($id_permohonan,$jam_keluar,$tanggal_keluar,$jam_masuk,$tanggal_masuk);

        

        //$jam_masuk=$this->input->post('jam_masuk');
        $data=array('jam_masuk' => '' );
        $cek=$this->Mpermohonan->check_data('tbl_permohonan',$data)->row();
        if ($cek == 1) {

            $nip_pengemudi=$this->input->post('nip_pengemudi');
            $status_peng="Tidak Aktif";
            $this->Mpermohonan->edit_data_status_peng($nip_pengemudi,$status_peng);

            $no_polisi=$this->input->post('no_polisi');
            $status_kend="Tidak Tersedia";
            $this->Mpermohonan->edit_data_status_kend($no_polisi,$status_kend);

            

        }else{

            $nip_pengemudi=$this->input->post('nip_pengemudi');
            $status_peng="Aktif";
            $this->Mpermohonan->edit_data_status_peng($nip_pengemudi,$status_peng);

            $no_polisi=$this->input->post('no_polisi');
            $status_kend="Tersedia";
            $this->Mpermohonan->edit_data_status_kend($no_polisi,$status_kend);
        }



        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('satpam/Csatpam');

    }









    // ======================== Export PERMOHONAN =========================


    function dpermohonan_by_id($id_permohonan){

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
            $permohonan = $this->db->query("SELECT * FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai INNER JOIN tbl_master_pengemudi ON tbl_permohonan.nip_pengemudi=tbl_master_pengemudi.nip_pengemudi INNER JOIN tbl_master_kendaraan ON tbl_permohonan.no_polisi=tbl_master_kendaraan.no_polisi INNER JOIN tbl_pengguna ON tbl_pegawai.id_pengguna=tbl_pengguna.id_pengguna INNER JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan WHERE id_permohonan='$id_permohonan'")->result();


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

            $pdf->Output("Laporan Detail Permohonan Kendaraan.pdf","I");

    }




    function dpermohonan_all(){

        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/bi.png');
        $pdf->Cell(280,7,'SIPOK-APP',0,10,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Data Permohonan Kendaraan',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(24,6,'Status',1,0);
        $pdf->Cell(35,6,'Nip Pegawai',1,0);
        $pdf->Cell(40,6,'Nip Pengemudi',1,0);
        $pdf->Cell(35,6,'No Polisi',1,0);
        $pdf->Cell(90,6,'Keperluan',1,0);
        $pdf->Cell(45,6,'Tujuan',1,0);
        
       
        $pdf->SetFont('Arial','',10);
        $data = $this->db->query("SELECT * FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai LEFT JOIN tbl_master_pengemudi ON tbl_permohonan.nip_pengemudi=tbl_master_pengemudi.nip_pengemudi LEFT JOIN tbl_master_kendaraan ON tbl_permohonan.no_polisi=tbl_master_kendaraan.no_polisi LEFT JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan ORDER BY id_permohonan ASC")->result();


        $no=1;

        foreach ($data as $row){
            $pdf->Cell(40,6 ,'',0,1);
            $pdf->cell(10,6,$no++,1,0);
            $pdf->cell(24,6,$row->status,1,0);
            $pdf->Cell(35,6,$row->nip_pegawai,1,0);
            $pdf->Cell(40,6,$row->nip_pengemudi,1,0);
            $pdf->Cell(35,6,$row->no_polisi,1,0);
            $pdf->Cell(90,6,$row->keperluan,1,0);
            $pdf->Cell(45,6,$row->tujuan,1,0); 

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
                
        $pdf->Output("Laporan Data Permohonan Kendaraan.pdf","I");


    }

}
