
    <style>
    table{
        border-collapse: collapse;
        width: 100%;
        margin: 0 auto;
        table-layout: auto;
        font-size: 11px;
    }
    table th{
        border:1px solid #000;
        padding: 3px;
        font-weight: bold;
        text-align: center;
        height: 50px;
    }
    table td{
        border:1px solid #000;
        padding: 3px;
        vertical-align: top;
    }
    </style>
  </head>
  <body>

  <br>
  <p style="text-align:center;">
    <b>DATA REKAPITULASI SEMUA FUNGSI <br>
    Bank Indonesia Provinsi Papua</b>
  </p>
  <hr>
   
  <br>
  <br>
  
  <font size="2"><i>Data s.d <?php echo date('d F Y') ?></i></font>
    <table>

<?php
  
  //$fungsi = $this->Mfungsi->tampil_fungsi();
  $npangkat = $this->Mrekapitulasi->get_n('tbl_master_pangkat');
  $jmlfungsi = $this->Mrekapitulasi->get_jmlfungsi();
  $jmljk = $this->Mrekapitulasi->get_jmljk();
  
  $a = 0;


    echo '<tr style="text-align:center;vertical-align:middle;font-weight:bold;">';
        echo '<td rowspan="2" style="vertical-align:middle;">BAGIAN/FUNGSI</td>';
        echo '<td rowspan="2" style="vertical-align:middle;">JML</td>';
        echo '<td colspan="2">JENIS KELAMIN</td>';
        echo '<td style="vertical-align:middle;" colspan="'.$npangkat.'">PANGKAT</td>';
    echo "</tr>";

    echo '<tr style="text-align:center;vertical-align:middle;font-weight:bold;">';
        echo '<td>L</td>';
        echo '<td>P</td>';

foreach($pangkat->result_array() as $i): $kd_pangkat=$i['kd_pangkat'];


        echo '<td>'.$kd_pangkat.'</td>';
        endforeach;



    echo "</tr>";

    echo "<tr>";
        echo '<td style="vertical-align:middle;font-weight:bold;">JUMLAH SELURUHNYA</td>';
    foreach ($jmlfungsi as $key => $jmlfungsi) {
        echo '<td style="text-align:center;">'.$jmlfungsi->n.'</td>';
    }

    foreach ($jmljk as $key => $jmljk) {
        echo '<td style="text-align:center;">'.$jmljk->nlaki.'</td>';
        echo '<td style="text-align:center;">'.$jmljk->nperem.'</td>';
    }

        foreach($pangkat->result_array() as $i): $kd_pangkat=$i['kd_pangkat'];
        $jmlpangkat = $this->Mrekapitulasi->get_jmlpangkat($kd_pangkat);
        foreach ($jmlpangkat as $key => $jmlpangkat) {
        echo '<td style="text-align:center;">'.$jmlpangkat->n.'</td>';
      }
        endforeach;
    

    echo "</tr>";

      foreach($fungsi->result_array() as $i): $kd_fungsi=$i['kd_fungsi'];
        echo "<tr>";

            echo '<td class="font-bold" nowrap>'.$kd_fungsi.'</td>'; 

            ${"sql_result_a_".$a} = $this->Mrekapitulasi->get_jmljk_per_fungsi($kd_fungsi);

            foreach (${"sql_result_a_".$a} as $key => $value_sql_result_a) {
                echo '<td style="text-align:center;">'.$value_sql_result_a->n.'</td>';
            }

            ${"sql_result_b_".$a} = $this->Mrekapitulasi->get_jmljk_per_jk_per_fungsi($kd_fungsi);       
            foreach (${"sql_result_b_".$a} as $key => $value_sql_result_b) {
                echo '<td style="text-align:center;">'.$value_sql_result_b->nlaki.'</td>';
                echo '<td style="text-align:center;">'.$value_sql_result_b->nperem.'</td>';
            }


        foreach($pangkat->result_array() as $i): $kd_pangkat=$i['kd_pangkat'];
            ${"sql_result_c_".$a} = $this->Mrekapitulasi->get_jmlpangkat_per_pangkat_per_fungsi($kd_fungsi,$kd_pangkat);       
            foreach (${"sql_result_c_".$a} as $key => $value_sql_result_c) {
                echo '<td style="text-align:center;">'.$value_sql_result_c->n.'</td>';
            }
      endforeach;

            $a=$a+1;
      echo "</tr>";
      endforeach;
      
      
  
?>


                        </table>


  </body>