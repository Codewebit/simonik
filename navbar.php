<?php 
session_start();
include "header.php";
include "footer.php";
?>
<nav class="uk-navbar uk-navbar uk-navbar-attached">
    <ul class="uk-navbar-nav">
        <li><a href="dashboard.php"><i class="uk-icon-home"></i> DASHBOARD</a></li>

        <?php 
        //LEVEL AKSES SUPERADMIN 
            if ($_SESSION['level']=='SUPERADMIN'){ 
                ?>
                <!--FASILITAS MENU YANG DIBUKA UNTUK SUPERADMIN-->
                <li class="uk-parent" data-uk-dropdown>
                    <a href=""><i class="uk-icon-folder-open"></i> MASTER DATA <i class="uk-icon-caret-down"></i></a>
                    <div class="uk-dropdown uk-dropdown-navbar">
                        <ul class="uk-nav uk-nav-navbar">
                            <li><a href="master_pegawai.php"><i class="uk-icon-users"></i> MASTER PEGAWAI</a></li>
                            <li><a href="master_lokasibkbnf.php"><i class="uk-icon-institution"></i> MASTER LOKASI</a></li>
                            <li><a href="master_kls.php"><i class="uk-icon-tags"></i> MASTER KELAS</a></li>
                            <li><a href="master_bitsudi.php"><i class="uk-icon-glass"></i> MASTER B.STUDI</a></li>
                            <li><a href="master_harilist.php"><i class="uk-icon-calendar"></i> MASTER HARI</a></li>
                            <li><a href="master_jabatan.php"><i class="uk-icon-book"></i> MASTER JABATAN</a></li>
                            <li><a href="master_infonf.php"><i class="uk-icon-book"></i> MASTER INFO</a></li>
                        </ul>
                    </div>
                </li> 
                                     <li class="uk-parent" data-uk-dropdown>
                                        <a href=""><i class="uk-icon-inbox"></i> REKAM <i class="uk-icon-caret-down"></i></a>
                                        <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="report_absensinf.php"><i class="uk-icon-coffee"></i> OFFICE PFT</a></li>
                                                    <li><a href="tampil_konsulnf.php"><i class="uk-icon-heart"></i> KONSULTASI</a></li>
                                                     <li><a href="report_tonf.php"><i class="uk-icon-music"></i> LEMBURAN</a></li>
                                                     <li><a href="report_tonf.php"><i class="uk-icon-search"></i> ART ONLINE</a></li>
                                                     <li><a href="report_tonf.php"><i class="uk-icon-tags"></i> ABSENSI PENGAJAR</a></li>
                                                </ul>
                                        </div>
                                    </li>

                                    <li class="uk-parent" data-uk-dropdown>
                                        <a href=""><i class="uk-icon-signal"></i> STATISTIK <i class="uk-icon-caret-down"></i></a>
                                        <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="report_absensinf.php"><i class="uk-icon-signal"></i> OFFICE PENGAJAR</a></li>
                                                    <li><a href="tampil_konsulnf.php"><i class="uk-icon-signal"></i> KONSULTASI</a></li>
                                                </ul>
                                        </div>
                                    </li>
                                </ul>                           
                                <div class="uk-navbar-flip">
                                    <ul class="uk-navbar-nav uk-hidden-small">
                                        <li class="uk-parent" data-uk-dropdown>
                                            <a href=""><i class="uk-icon-user"></i> <?php echo $_SESSION['nama_pegawai']?> <i class="uk-icon-caret-down"></i></a>

                                            <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="logout.php"><i class="uk-icon-sign-out"></i> LOGOUT</a></li>
                                                    <li class="uk-nav-header">PENGATURAN</li>
                                                    <li><a href="pass_updated.php"><i class="uk-icon-key"></i> UBAH KATA SANDI</a></li>
                                                    <li><a href="show_profile_updated.php"><i class="uk-icon-gear"></i> UBAH PROFIL</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                        <!--AKHIR FASILITAS MENU SUPERADMIN-->
            <?php
            //LEVEL AKSES ADMIN 
            }else if($_SESSION['level']=='ADMIN'){ 
                ?> 
                <!--FASILITAS MENU YANG DIBUKA UNTUK ADMIN-->

                <!--AKHIR FASILITAS MENU ADMIN-->
            <?php
            //LEVEL AKSES STAFF 
            }else if($_SESSION['level']=='STAFF'){ 
                ?> 
                <!--FASILITAS MENU YANG DIBUKA UNTUK STAFF-->
                                     <li class="uk-parent" data-uk-dropdown>
                                        <a href=""><i class="uk-icon-inbox"></i> REKAM <i class="uk-icon-caret-down"></i></a>
                                        <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="report_absensinf.php"><i class="uk-icon-coffee"></i> OFFICE PFT</a></li>
                                                    <li><a href="report_tonf.php"><i class="uk-icon-heart"></i> KONSULTASI</a></li>
                                                     <li><a href="report_tonf.php"><i class="uk-icon-music"></i> LEMBURAN</a></li>
                                                     <li><a href="report_tonf.php"><i class="uk-icon-search"></i> ART ONLINE</a></li>
                                                     <li><a href="report_tonf.php"><i class="uk-icon-tags"></i> ABSENSI PENGAJAR</a></li>
                                                </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="uk-navbar-flip">
                                    <ul class="uk-navbar-nav uk-hidden-small">
                                        <li class="uk-parent" data-uk-dropdown>
                                            <a href=""><i class="uk-icon-user"></i> <?php echo $_SESSION['nama_pegawai']?> <i class="uk-icon-caret-down"></i></a>

                                            <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="logout.php"><i class="uk-icon-sign-out"></i> LOGOUT</a></li>
                                                    <li class="uk-nav-header">PENGATURAN</li>
                                                    <li><a href="pass_updated.php"><i class="uk-icon-key"></i> UBAH KATA SANDI</a></li>
                                                    <li><a href="show_profile_updated.php"><i class="uk-icon-gear"></i> UBAH PROFIL</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                         <!--AKHIR FASILITAS MENU STAFF-->

            <?php
            //LEVEL AKSES PENGAJAR 
            }else if($_SESSION['level']=='PENGAJAR'){ 
                ?> 
                <!--FASILITAS MENU YANG DIBUKA UNTUK PENGAJAR-->
                    <li class="uk-parent" data-uk-dropdown>
                                        <a href=""><i class="uk-icon-inbox"></i> INFORMASI <i class="uk-icon-caret-down"></i></a>
                                        <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="report_absensinf.php"><i class="uk-icon-coffee"></i> JADWAL NGAJAR</a></li>
                                                    <li><a href="report_tonf.php"><i class="uk-icon-heart"></i> KONSULTASI SAYA</a></li>
                                                     <li><a href="report_tonf.php"><i class="uk-icon-search"></i> HISTORY MENGAJAR</a></li>
                                                     <li><a href="report_tonf.php"><i class="uk-icon-tags"></i> ABSENSI DI LOKASI</a></li>
                                                </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="uk-navbar-flip">
                                    <ul class="uk-navbar-nav uk-hidden-small">
                                        <li class="uk-parent" data-uk-dropdown>
                                            <a href=""><i class="uk-icon-user"></i> <?php echo $_SESSION['nama_pegawai']?> <i class="uk-icon-caret-down"></i></a>

                                            <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="logout.php"><i class="uk-icon-sign-out"></i> LOGOUT</a></li>
                                                    <li class="uk-nav-header">PENGATURAN</li>
                                                    <li><a href="pass_updated.php"><i class="uk-icon-key"></i> UBAH KATA SANDI</a></li>
                                                    <li><a href="show_profile_updated.php"><i class="uk-icon-gear"></i> UBAH PROFIL</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                <!--AKHIR FASILITAS MENU PENGAJAR-->

                <?php
            //LEVEL AKSES LOKASI 
            }else if($_SESSION['level']=='LOKASI'){ 
                ?> 
                <!--FASILITAS MENU YANG DIBUKA UNTUK LOKASI-->
                    <li class="uk-parent" data-uk-dropdown>
                                        <a href=""><i class="uk-icon-inbox"></i> INPUT DATA <i class="uk-icon-caret-down"></i></a>
                                        <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="report_absensinf.php"><i class="uk-icon-coffee"></i> INPUT OFFICE PFT</a></li>
                                                    <li><a href="report_absensinf.php"><i class="uk-icon-coffee"></i> INPUT KONSULTASI</a></li>
                                                </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="uk-navbar-flip">
                                    <ul class="uk-navbar-nav uk-hidden-small">
                                        <li class="uk-parent" data-uk-dropdown>
                                            <a href=""><i class="uk-icon-user"></i> <?php echo $_SESSION['nama_pegawai']?> <i class="uk-icon-caret-down"></i></a>

                                            <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="logout.php"><i class="uk-icon-sign-out"></i> LOGOUT</a></li>
                                                    <li class="uk-nav-header">PENGATURAN</li>
                                                    <li><a href="pass_updated.php"><i class="uk-icon-key"></i> UBAH KATA SANDI</a></li>
                                                    <li><a href="show_profile_updated.php"><i class="uk-icon-gear"></i> UBAH PROFIL</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                <!--AKHIR FASILITAS MENU LOKASI-->

                <?php
            //LEVEL AKSES ASMEN
            }else if($_SESSION['level']=='ASMEN'){ 
                ?> 
                <!--FASILITAS MENU YANG DIBUKA UNTUK ASMEN-->
                    <li class="uk-parent" data-uk-dropdown>
                                        <a href=""><i class="uk-icon-inbox"></i> PROMO <i class="uk-icon-caret-down"></i></a>
                                        <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="report_absensinf.php"><i class="uk-icon-coffee"></i> DATA PROMO</a></li>
                                                    <li><a href="report_tonf.php"><i class="uk-icon-heart"></i> STATISTIK</a></li>
                                                     <li><a href="report_tonf.php"><i class="uk-icon-search"></i> ART ONLINE</a></li>
                                                </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="uk-navbar-flip">
                                    <ul class="uk-navbar-nav uk-hidden-small">
                                        <li class="uk-parent" data-uk-dropdown>
                                            <a href=""><i class="uk-icon-user"></i> <?php echo $_SESSION['nama_pegawai']?> <i class="uk-icon-caret-down"></i></a>

                                            <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="logout.php"><i class="uk-icon-sign-out"></i> LOGOUT</a></li>
                                                    <li class="uk-nav-header">PENGATURAN</li>
                                                    <li><a href="pass_updated.php"><i class="uk-icon-key"></i> UBAH KATA SANDI</a></li>
                                                    <li><a href="show_profile_updated.php"><i class="uk-icon-gear"></i> UBAH PROFIL</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                <!--AKHIR FASILITAS MENU ASMEN-->

                 <?php
            //LEVEL AKSES MANAJER
            }else if($_SESSION['level']=='MANAJER'){ 
                ?> 
                <!--FASILITAS MENU YANG DIBUKA UNTUK MANAJER-->
                    <li class="uk-parent" data-uk-dropdown>
                                        <a href=""><i class="uk-icon-inbox"></i> APROVAL <i class="uk-icon-caret-down"></i></a>
                                        <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="report_absensinf.php"><i class="uk-icon-coffee"></i> IZIN PENGAJAR</a></li>
                                                    <li><a href="report_tonf.php"><i class="uk-icon-heart"></i> LEMBURAN</a></li>
                                                     <li><a href="report_tonf.php"><i class="uk-icon-search"></i> ART ONLINE</a></li>
                                                </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="uk-navbar-flip">
                                    <ul class="uk-navbar-nav uk-hidden-small">
                                        <li class="uk-parent" data-uk-dropdown>
                                            <a href=""><i class="uk-icon-user"></i> <?php echo $_SESSION['nama_pegawai']?> <i class="uk-icon-caret-down"></i></a>

                                            <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="logout.php"><i class="uk-icon-sign-out"></i> LOGOUT</a></li>
                                                    <li class="uk-nav-header">PENGATURAN</li>
                                                    <li><a href="pass_updated.php"><i class="uk-icon-key"></i> UBAH KATA SANDI</a></li>
                                                    <li><a href="show_profile_updated.php"><i class="uk-icon-gear"></i> UBAH PROFIL</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                <!--AKHIR FASILITAS MENU MANAJER-->

                 <?php
            //LEVEL AKSES PENJADWALAN
            }else if($_SESSION['level']=='PENJADWALAN'){ 
                ?> 
                <!--FASILITAS MENU YANG DIBUKA UNTUK PENJADWALAN-->
                    <li class="uk-parent" data-uk-dropdown>
                                        <a href=""><i class="uk-icon-inbox"></i> REKAP <i class="uk-icon-caret-down"></i></a>
                                        <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="report_absensinf.php"><i class="uk-icon-coffee"></i> OFFICE PFT</a></li>
                                                    <li><a href="report_tonf.php"><i class="uk-icon-heart"></i> KONSULTASI</a></li>
                                                     <li><a href="report_tonf.php"><i class="uk-icon-music"></i> LEMBURAN</a></li>
                                                </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="uk-navbar-flip">
                                    <ul class="uk-navbar-nav uk-hidden-small">
                                        <li class="uk-parent" data-uk-dropdown>
                                            <a href=""><i class="uk-icon-user"></i> <?php echo $_SESSION['nama_pegawai']?> <i class="uk-icon-caret-down"></i></a>

                                            <div class="uk-dropdown uk-dropdown-navbar">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="logout.php"><i class="uk-icon-sign-out"></i> LOGOUT</a></li>
                                                    <li class="uk-nav-header">PENGATURAN</li>
                                                    <li><a href="pass_updated.php"><i class="uk-icon-key"></i> UBAH KATA SANDI</a></li>
                                                    <li><a href="show_profile_updated.php"><i class="uk-icon-gear"></i> UBAH PROFIL</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                <!--AKHIR FASILITAS MENU PENJADWALAN-->
                            <?php 
                            }?>
                        </nav><br>
<div class="uk-container uk-overflow-container uk-container-center">
<!--isi konten dinamis dibawah ini-->
