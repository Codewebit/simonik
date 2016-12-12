<?php 
include "header.php";
include "config/dbconfig.php";
if (isset($_POST['btnlogin'])) {
    try {
           $nopeg = $_POST['nopeg'];
           $password = md5($_POST['pass']);
           $stmt = $konek->prepare("SELECT * FROM pegawai WHERE nopeg=? and password=?");
           $stmt->bindParam(1, $nopeg);
           $stmt->bindParam(2, $password);
           $stmt->execute();
           $row = $stmt->fetch();
           $namapeg = $row['nama_pegawai'];
           $nopeg = $row['nopeg'];
           $level = $row['level'];
           if ($nopeg == $nopeg && $password == $password) 
           {
            session_start();
            $_SESSION['nama_pegawai'] = $namapeg;
            $_SESSION['nopeg']  = $nopeg;
            $_SESSION['level']  = $level;
            //hakakses multi user
            if ($level=='SUPERADMIN') { ?>
                <script>window.location.href='dashboard.php'</script>
            <?php
            }elseif ($level=='ADMIN') { ?>
                <script>window.location.href='dashboard.php'</script>
            <?php
            }elseif ($level=='STAFF') { ?>
                <script>window.location.href='dashboard.php'</script>
            <?php
            }elseif ($level=='PENGAJAR') { ?>
                <script>window.location.href='dashboard.php'</script>
            <?php
            }elseif ($level=='LOKASI') { ?>
                <script>window.location.href='ashboard.php'</script>
            <?php
            }elseif ($level=='ASMEN') { ?>
                <script>window.location.href='dashboard.php'</script>
            <?php
            }elseif ($level=='MANAJER') { ?>
                <script>window.location.href='dashboard.php'</script>
            <?php
            }elseif ($level=='PENJADWALAN') { ?>
                <script>window.location.href='dashboard.php'</script>
            <?php
            }
           }else{ ?>
                <div class='uk-alert uk-alert-warning'>
                    <a href='' class='uk-alert-close uk-close'></a>
                    <p>form masih kosong!!</p>
                </div>
        <?php
        } ?>
                <div class='uk-alert uk-alert-danger'>
                    <a href='' class='uk-alert-close uk-close'></a>
                    <strong>UPSS....</strong> NOPEG DAN KATA SANDI TIDAK COCOK!!..
                </div>    
        <?php
        } catch (PDOException $e) {
        $e->getMessage();
    }
}
?>
    <body class="uk-height-1-1">
        <div class="uk-vertical-align uk-text-center uk-height-1-1">
            <div class="uk-vertical-align-middle" style="width: 250px;">
                <a href="index.php"><img class="uk-margin-bottom" width="763" height="240" src="uikit/img/logo1.png" alt=""></a>
                <form class="uk-panel uk-panel-box uk-form" method="post" action="">
                    <div class="uk-form-row">
                    <div class="uk-form-icon">
                    <i class="uk-icon-user"></i>
                        <input name="nopeg" class="uk-width-1-1 uk-form-large" type="text" placeholder="NOPEG...">
                    </div>
                    </div>
                    <div class="uk-form-row">
                    <div class="uk-form-icon">
                    <i class="uk-icon-key"></i>
                        <input name="pass" class="uk-width-1-1 uk-form-large" type="password" placeholder="KATA SANDI...">
                    </div>
                    </div>
                    <div class="uk-form-row">
                        <button name="btnlogin" type="submit" class="uk-width-1-1 uk-button uk-button-primary uk-button-large"><i class="uk-icon-sign-in"></i> BISMILLAH</button>
                    </div>
                    <div class="uk-form-row uk-text-small">
                        <label class="uk-float-left"><input type="checkbox"> INGAT SAYA</label>
                        <a class="uk-float-right uk-link uk-link-muted" href="#">2017 NURUL FIKRI</a>
                    </div>
                </form>

            </div>
        </div>
    </body>
<?php include"footer.php";?>