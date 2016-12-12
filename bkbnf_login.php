<?php include "header.php";?>
<?php  
	session_start();
	require_once 'config/dbconfig.php';
	if (isset($_POST['btnlogin'])) 
	{
		$nopeg 	  = trim($_POST['nopeg']);
		$password = trim($_POST['password']);

		$passwordmd5 = md5($password);
		try {
			$stmt  = $konek->prepare("SELECT * FROM pegawai WHERE nopeg=:nopeg");
			$stmt->execute(array(":nopeg"=>$nopeg));
			$row   = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
			if ($row['password']==$password){
				echo "
				<div class='uk-alert uk-alert-warning'>
					<a href='' class='uk-alert-close uk-close'></a>
					<p>Form masih kosong gan!!</p>
				</div>";
				$_SESSION['use_session'] = $row['id'];
			}else{
				echo "
				<div class='uk-alert uk-alert-danger'>
					<a href='' class='uk-alert-close uk-close'></a>
					<p>Cek lagi nopeg dan kata sandi kamu!!</p>
				</div>";
			}				
			} catch (PDOException $e) {
				echo $e->getMessage();
		}	
	}
?>
<h2>LOGIN SIMONIK </h2>
<form class="uk-form uk-form-horizontal" method="post">
<div class="uk-form-row">
	<div class="uk-form-icon">
		<i class="uk-icon-user"></i>
		<input type="text" placeholder="NOPEG KAMU..." class="uk-form-width-medium" name="nopeg"></input>
	</div>
</div>
<form class="uk-form uk-form-horizontal">
<div class="uk-form-row">
	<div class="uk-form-icon">
		<i class="uk-icon-key"></i>
		<input type="password" placeholder="KATA SANDI..." class="uk-form-width-medium" name="password"></input>
	</div>
</div><br>
	<button class="uk-button uk-button-danger" type="submit" name="btnlogin"><i class="uk-icon-sign-in"></i> BISMILLAH</button>
</form>
		</form>
<?php include "footer.php";?>