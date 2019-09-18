<body onload="window.print()">
<?php
// $id=addslashes($_GET['id']);
include "../../koneksi.php";     
        $exec=mysql_query("select * from pendaftar where status='Diterima' ");
     $r=mysql_fetch_array($exec);
    $no = 0;
    ?>
<table width="100%" border="0">
  <tr>
    <th ><img src="../../assets/images/p/badge.png" width="100" ></th>
    <th >FORMULIR PENDAFTARAN CALON SASDIK <br>
    SMK NEGERI 1 LUMAJANG</th>
    <th align="right"><img src="../../assets/images/p/Logo smk.png" width="75" height="85"></th>
  </tr>
  
</table>
<hr>
<img src="a.jpg"> <br><br>
<table class="table table-striped table-bordered" width="100%">
          <!-- <tr>
            <th width="25%"><div align="left">Nama</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-0-<?php echo $r[0]; ?>"><?php echo $r[1]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Jenis Kelamin</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-1-<?php echo $r[0]; ?>"><?php echo $r[2]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Agama</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-2-<?php echo $r[0]; ?>"><?php echo $r[3]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Tempat Lahir</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-3-<?php echo $r[0]; ?>"><?php echo $r[4]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Tanggal Lahir</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-4-<?php echo $r[0]; ?>"><?php echo $r[5]; ?></span></td>
          </tr> <tr>
            <th width="25%"><div align="left">Alamat</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-5-<?php echo $r[0]; ?>"><?php echo $r[6]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Whatsapp / HP</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-6-<?php echo $r[0]; ?>"><?php echo $r[7]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Kelas</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-7-<?php echo $r[0]; ?>"><?php echo $r[8]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Nama Ortu / Wali</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[9]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Ukuran Seragam SASDIK</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[10]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Organisasi yang Diikuti</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[11]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Asal Sekolah</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[12]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Motto</div></th>
            <td width="10%"> : </td>
            <td>  <?php echo $r[13]; ?></td>
          </tr> -->

          <tr>
			<th width="1%">No</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th >Agama</th>
			<th >Tanggal Lahir</th>
			<th >No HP</th>
		</tr>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['tanggal']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jumlah']; ?></td>
		</tr>
        
      
      
</table>

<p align="right">Yang Bertanda Tangan </p>
<p align="right"></p><br><br><br>

<p align="right">-------------------------</p>



        </body>