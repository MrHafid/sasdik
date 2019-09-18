 <ol class='breadcrumb'>
                    <li><a href='./'>Home</a></li>
                    <li class='active'>pendaftar</li>
                </ol>
                <!-- end:breadcrumb -->   

                <div class='row' id='home-content'>
                    <div class='col-lg-12'>
           <script type="text/javascript">
    $(document).ready(function(){
        
    $("body").on("click", "#tambah",function(e){
        $('#area-loading').html(''); 
        $("#id").removeAttr('readonly')
        $('#id').val('');
        $('#nama').val('');
        $('#jk').val('');
        $('#agama').val('');
        $('#tempat_lahir').val('');
        $('#tanggal_lahir').val('');
        $('#alamat').val('');
        $('#no_hp').val('');
        $('#kelas').val('');
        $('#nama_ortu').val('');
        $('#uk_seragam').val('');
        $('#organisasi').val('');
        $('#asal_sekolah').val('');
        $('#motto').val('');
        $('#status').val('');

        $(".edit-dialog").modal('toggle');
    })
  $("body").on("click", ".hapus", function(e) {
                var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
                var DbNumberID = ".data-0-"+clickedID[1];
                var DbNumberID2 = ".data-1-"+clickedID[1];
                $(".id").html($(DbNumberID).html());
                $(".nama").html($(DbNumberID2).html());
                $('.dialog-hapus').modal('toggle');
                $("#konf").attr("href","hapusdaftar.php?id="+$(DbNumberID).html());
            });

    $("body").on("click", ".edit", function(e) {
                var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
                var DbNumberID = clickedID[1];
                 var kelas1 = ".data-0-"+DbNumberID;
                var kelas2 = ".data-1-"+DbNumberID;
                var kelas3 = ".data-2-"+DbNumberID;
                var kelas4 = ".data-3-"+DbNumberID;
                var kelas5 = ".data-4-"+DbNumberID;
                var kelas6 = ".data-5-"+DbNumberID;
                var kelas7 = ".data-6-"+DbNumberID;
                var kelas8 = ".data-7-"+DbNumberID;
                var kelas9 = ".data-8-"+DbNumberID;
                var kelas10 = ".data-9-"+DbNumberID;
                var kelas11 = ".data-10-"+DbNumberID;
                var kelas12 = ".data-11-"+DbNumberID;
                var kelas13 = ".data-12-"+DbNumberID;
                var kelas14 = ".data-13-"+DbNumberID;
                var kelas15 = ".data-14-"+DbNumberID;

                var id = $(kelas1).html();
                var nama = $(kelas2).html();
                var jk = $(kelas3).html();
                var agama = $(kelas4).html();
                var tempat_lahir = $(kelas5).html();
                var tanggal_lahir = $(kelas6).html();
                var alamat = $(kelas7).html();
                var no_hp = $(kelas8).html();
                var kelas = $(kelas9).html();
                var nama_ortu = $(kelas10).html();
                var uk_seragam = $(kelas11).html();
                var organisasi = $(kelas12).html();
                var asal_sekolah = $(kelas13).html();
                var motto = $(kelas14).html();
                var status = $(kelas15).html();

                $("#id").val(id);
                $("#nama").val(nama);
                $("#id").attr("readonly","true");
                $('.edit-dialog').modal('toggle');
            });

    })
</script>
<form id="cetak" action="fpdf/examples/print.php" method="post">
    <input type="hidden" name="isi" id="isi" value=""><input type="hidden" name="namafile" value="hakakses">
</form>
<div class="modal fade bs-example-modal-lg dialog-hapus" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4>Hapus Data</h4>
        </div>
        <div class="modal-body">
            Apakah anda ingn menghapus data pendaftar =  <span class='nama'></span>?
        </div>
        <div class="modal-footer">
        <a id="konf" href=""><button type="button" class="btn btn-danger" id="simpan">Ya</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>
<a href="tambahdaftar.php">
<button type="button" onClick=""class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah</button></a>
<!-- <a href="laporan/cetakLaporan.php" target="_blank">
<button type="button" onClick=""class="btn btn-warning"><i class="fa fa-check"></i>&nbsp;Cetak Laporan</button></a> -->
<br>
<div class="modal fade bs-example-modal-lg edit-dialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data pendaftar</h4>
        <div class="area-loading"></div>
      </div>
      <div class="modal-body">
        <form method="post" id="form" action="insertpendaftar.php">
        <table class="table table-striped" width="100%">
            <tr>
                <th width="25%">kode pendaftar</th>
                <td width="1%"> : </td>
                <td> <input id="kdpendaftar" name="kdpendaftar" placeholder="Kode" class="form-control" type="text" required></td>
            </tr><tr>
                <th width="25%">Nama pendaftar</th>
                <td width="1%"> : </td>
                <td> <input id="nama" name="nama" placeholder="Nama" class="form-control" type="text" required ></td>
            </tr>
            <tr>
                <th width="25%">Jenis Kelamin</th>
                <td width="1%"> : </td>
                <td> <select id="jenkel" name="jenkel"  class="form-control" required >
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </td>
            </tr>
            <tr>
            <th width="25%">No. Pelanggan Terdekat</th>
            <td width="1%"> : </td>
            <td><select id="no_pelanggan_terdekat" name="no_pelanggan_terdekat"   class="form-control">
              <option>--Pilih Pelanggan--</option>
              <?php
                $exec=mysql_query("select * from pelanggan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'>$hasil[0] | $hasil[2]</option>";
              ?>
            </select></td>
          </tr>
        </table>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </form>
      </div>
    </div>
  </div>
</div>

    <?php
        if(isset($_GET['code']))
        {
            if($_GET['code']==1)
                echo "<h3 style='color:green'>Data pendaftar berhasil disimpan</h3>";
            elseif($_GET['code']==2)
                echo "<h3 style='color:red'>Terjadi kesalahan</h3>";
            elseif($_GET['code']==3)
                echo "<h3 style='color:blue'>Data pendaftar berhasil dihapus</h3>";
        }
    ?>
    <div class="table-responsive">
<table class="table table-striped table-responsive" id="tabel">
    <thead style="background: #88c9fb;">
    <tr>
        <th width="5%">
            No.
        </th>
      
        <th>
            Nama pendaftar
        </th>
     <th>
            Jenis kelamin
        </th>
        <th>
        </th>
    </tr>
</thead>
<tbody>
    <?php
        if(!isset($_GET['data']))
        $exec=mysql_query("select * from pendaftar ");
        else{
            $data=trim(addslashes($_GET['data']));
            $exec=mysql_query("select * from pendaftar where id like '%".$data."%' or nama like '%".$data."%'");
        }
            
        $no=0;
        while($r=mysql_fetch_array($exec))
        
        {
            $no++;

    ?>
    <tr>
        <td width="5%">
            <?php echo $no; ?>
        </td>
       
        <td>
            <span class="data-1-<?php echo $no; ?>"><?php echo $r[1]; ?></span>
        </td>
         <td>
            <span class="data-1-<?php echo $no; ?>"><?php echo $r[2]; ?></span>
        </td>
    
        <td>
           
            <a href="laporan/cetakformulir.php?id=<?php echo $r[0];  ?>" target="_blank"><button type="button" class="btn btn-primary"><span class='fa fa-print'></span> Cetak Formulir Pendaftar</button></a>
            </a>&nbsp;<button class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $r[0]; ?>">Detail</button>

 <div class="modal fade bs-example-modal-lg<?php echo $r[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped" width="100%">
          <tr>
            <th width="25%">Nama</th>
            <td width="1%"> : </td>
            <td> <span class="data-0-<?php echo $r[0]; ?>"><?php echo $r[1]; ?></span></td>
          </tr><tr>
            <th width="25%">Jenis Kelamin</th>
            <td width="1%"> : </td>
            <td> <span class="data-1-<?php echo $r[0]; ?>"><?php echo $r[2]; ?></span></td>
          </tr><tr>
            <th width="25%">Agama</th>
            <td width="1%"> : </td>
            <td> <span class="data-2-<?php echo $r[0]; ?>"><?php echo $r[3]; ?></span></td>
          </tr><tr>
            <th width="25%">Tempat Lahir</th>
            <td width="1%"> : </td>
            <td> <span class="data-3-<?php echo $r[0]; ?>"><?php echo $r[4]; ?></span></td>
          </tr><tr>
            <th width="25%">Tanggal Lahir</th>
            <td width="1%"> : </td>
            <td> <span class="data-4-<?php echo $r[0]; ?>"><?php echo $r[5]; ?></span></td>
          </tr><tr>
            <th width="25%">Alamat</th>
            <td width="1%"> : </td>
            <td> <span class="data-5-<?php echo $r[0]; ?>"><?php echo $r[6]; ?></span></td>
          </tr><tr>
            <th width="25%">Whatsapp / HP</th>
            <td width="1%"> : </td>
            <td> <span class="data-6-<?php echo $r[0]; ?>"><?php echo $r[7]; ?></span></td>
          </tr><tr>
            <th width="25%">Kelas</th>
            <td width="1%"> : </td>
            <td> <span class="data-7-<?php echo $r[0]; ?>"><?php echo $r[8]; ?></span></td>
          </tr><tr>
            <th width="25%">Nama Ortu / Wali</th>
            <td width="1%"> : </td>
            <td> <?php echo $r[9]; ?></td>
          </tr>
          <tr>
            <th width="25%">Ukuran Seragam</th>
            <td width="1%"> : </td>
            <td> <?php echo $r[10]; ?></td>
          </tr>
          <tr>
            <th width="25%">Organisasi yang diikuti</th>
            <td width="1%"> : </td>
            <td>  <?php echo $r[11]; ?></td>
          </tr>
          <tr>
            <th width="25%">Asal Sekolah</th>
            <td width="1%"> : </td>
            <td> <?php echo $r[12]; ?></td>
          </tr>
          <tr>
            <th width="25%">Motto</th>
            <td width="1%"> : </td>
            <td>  <?php echo $r[13]; ?></td>
          </tr>
          <tr>
            <th width="25%">Status</th>
            <td width="1%"> : </td>
            <td>
                <?php if ($r[14] == 'Diterima') {
                    echo "<span class='label label-success'> $r[14] </span>";
                } else if ($r[14] == 'Ditolak') {
                    echo "<span class='label label-danger'> $r[14] </span>";
                } else if ($r[14] == 'Dipertimbangkan') {
                    echo "<span class='label label-warning'> $r[14] </span>";
                } else {
                    echo "<span class='label label-primary'> $r[14] </span>";
                }

                ?>
            </td>
          </tr>
        
      
      
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        </td>
    </tr>
    <?php
        }
    ?>
</tbody>
</table>
                    </div>
                    </div>
                 
                </div>