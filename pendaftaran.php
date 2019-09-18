<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "koneksi.php";
                if(isset($_POST['nama'])){

                  $nama=addslashes($_POST['nama']);
                  $jk=addslashes($_POST['jk']);
                  $agama=addslashes($_POST['agama']);
                  $tempat_lahir=addslashes($_POST['tempat_lahir']);
                  $tanggal_lahir=addslashes($_POST['tanggal_lahir']);
                  $alamat=addslashes($_POST['alamat']);
                  $no_hp=addslashes($_POST['no_hp']);
                  $kelas=addslashes($_POST['kelas']);
                  $nama_ortu=addslashes($_POST['nama_ortu']);
                  $uk_seragam=addslashes($_POST['uk_seragam']);
                  $organisasi=addslashes($_POST['organisasi']);
                  $asal_sekolah=addslashes($_POST['asal_sekolah']);
                  $motto=addslashes($_POST['motto']);
                  $status=addslashes($_POST['status']);

                  mysql_query("insert into pendaftar values('','$nama','$jk','$agama','$tempat_lahir','$tanggal_lahir','$alamat',
                      '$no_hp','$kelas','$nama_ortu','$uk_seragam','$organisasi','$asal_sekolah','$motto','$status')");
                                header("location:./berhasil.php");

                  }
              ?>
  <?php require_once 'template/head.php' ?>
<body>
	<!-- Fixed navbar -->

  <div class="container">
    <div class="row">
			
					
				</div>
    </div>
    <div class="site-wrap">

<div class="site-navbar mt-4">
    <div class="container py-1">
      <div class="row align-items-center">
        <div class="col-8 col-md-8 col-lg-4">
          <a href="./" class=""><img src="assets/images/p/badge.png" style="width: 100px; height: 100px" alt=""></a>
        </div>
        <div class="col-4 col-md-4 col-lg-8">
          <nav class="site-navigation text-right text-md-right" role="navigation">

            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li >
                <a href="index.php">Home</a>
              </li>
              <li><a href="pengumuman.php">Pengumuman</a></li>
              <li class="active"><a href="pendaftaran.php">Pendaftaran</a></li>
              <!-- <li class="has-children">
                <a href="pendaftaran.php">Pendaftaran</a>
                <ul class="dropdown arrow-top">
                  <li disabled="disabled"><a href="#">Daftar Ulang</a></li>
                  <li><a href="#">Ketentuan</a></li>
                  <li><a href="#">Jadwal</a></li>
                </ul>
              </li> -->
              <!-- <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li> -->
            </ul>
          </nav>
        </div>
       

      </div>
    </div>
  </div>
</div>

<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->

<div class="site-blocks-cover overlay" style="background-image: url('assets/images/p/1pengumuman.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
        <h1 class="mb-4"></h1>
        
      </div>
    </div>
  </div>
</div>


<div class="site-section bg-dark">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
						<div class="grey-box-icon b4">  
							 <h4 class="modal-title" id="myModalLabel">Silahkan Isi Data Pendaftar</h4>
        <div class="area-loading"></div>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="table-responsive">
        <table class="table " width="100%">
          <tr>
                <th width="25%">Nama pendaftar</th>
                <td width="1%"> : </td>
                <td> <input id="nama" name="nama" placeholder="Nama" class="form-control" type="text" required style="color:red"></td>
            </tr>
            <tr>
                <th width="25%">Jenis Kelamin</th>
                <td width="1%"> : </td>
                <td> <select id="jk" name="jk"  class="form-control" required style="color:blue" >
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
                </td>
            </tr>
            <tr>
            <th width="25%">Agama</th>
            <td width="1%"> : </td>
            <td><select  name="agama"   class="form-control" required style="color:lime">
            
              <?php
                $exec=mysql_query("select * from agama");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[1]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
            <tr>
            <th width="25%">Jurusan</th>
            <td width="1%"> : </td>
            <td><select  name="jurusan"   class="form-control" required style="color:pink">
            
              <?php
                $exec=mysql_query("select * from jurusan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
            <tr>
                <th width="25%">Tempat Lahir</th>
                <td width="1%"> : </td>
                <td> <input id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" type="text" required style="color:magenta" ></td>
            </tr>
            <tr>
                <th width="25%">Tanggal Lahir</th>
                <td width="1%"> : </td>
                <td> <input id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal LAhir" class="form-control"  type="date" required style="color:orange"></td>
            </tr>
            <tr>
                <th width="25%">Alamat</th>
                <td width="1%"> : </td>
                <td> <input id="alamat" name="alamat" placeholder="Alamat" class="form-control" type="textarea" required style="color:pink"></td>
            </tr>
            <tr>
                <th width="25%">Whatsapp / HP</th>
                <td width="1%"> : </td>
                <td> 
                    <input id="no_hp" name="no_hp" placeholder="No Nya oi" class="form-control no_hp" type="text" required onkeypress="return isNumberKey(event)">
                </td>
            </tr>
            <!-- sini -->
            <tr>

                <th width="25%">Kelas</th>
                <td width="1%"> : </td>
                <td> 
                    <select name="kelas" id="kelas" class="form-control">
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </td>
            </tr>
              <tr>
            <th width="25%">Nama Ortu / Wali</th>
            <td width="1%"> : </td>
            <td>
                <input type="text" name="nama_ortu" id="nama_ortu" class="form-control" placeholder="Nama Ortu / Wali" required>
            </td>
          </tr>
           <tr>
            <th width="25%">Ukuran Seragam</th>
            <td width="1%"> : </td>
            <td>
                <select name="uk_seragam" id="uk_seragam" class="form-control">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXL">XXL</option>
                    <option value="3XL">3XL</option>
                </select>
            </td>
          </tr>
 <tr>

                <th width="25%">Organisasi yang Diikuti</th>
                <td width="1%"> : </td>
                <td> <input id="organisasi" name="organisasi" placeholder="Organisasi yang diikuti saat ini" class="form-control" type="text" required ></td>
            </tr>
 <tr>

                <th width="25%">Asal Sekolah</th>
                <td width="1%"> : </td>
                <td> <input id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah" class="form-control" type="text" required ></td>
            </tr>
            <tr>
            <th width="25%">Motto</th>
            <td width="1%"> : </td>
            <td>
                <input type="textarea" class="form-control" id="motto" name="motto" placeholder="Motto ini " required>
            </td>
          </tr>
            <input type="hidden" name="status" value="Belum Dikonfirmasi">
        </table>
                </div>
        *) Harap Teliti Sebelum Klik Simpan
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
        
            </form>
						</div><!--grey box -->
					</div><!--/span3-->
    </div>


    </div>
  </div>
</div>

<div class="bg-primary" data-aos="fade">
  <div class="container">
    <div class="row">
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
    </div>
  </div>
</div>
<?php require_once 'template/foot.php'; ?>