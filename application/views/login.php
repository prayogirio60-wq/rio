<!DOCTYPE html>
<html>
<head>
    <title>Login - Rental Mobil</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
    <script src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
</head>
<body>
    <div class="container" style="margin-top: 100px;">
        <div class="col-md-4 col-md-offset-4">
            
            <center>
                <h2>SISTEM RENTAL MOBIL</h2>
                <h3>Halaman Login</h3>
            </center>
            <br/>

            <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<div class='alert alert-danger'>Login gagal! Username dan password salah.</div>";
                } else if($_GET['pesan'] == "logout"){
                    echo "<div class='alert alert-info'>Anda telah berhasil logout.</div>";
                } else if($_GET['pesan'] == "belumlogin"){
                    echo "<div class='alert alert-warning'>Silahkan login terlebih dahulu untuk mengakses dashboard.</div>";
                }
            }
            ?>

            <form method="post" action="<?php echo base_url().'welcome/login' ?>">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Masukkan Username" class="form-control">
                    <?php echo form_error('username'); ?>
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan Password" class="form-control">
                    <?php echo form_error('password'); ?>
                </div>
                
                <div class="form-group">
                    <input type="submit" value="Login" class="btn btn-primary btn-block">
                </div>
            </form>

        </div>
    </div>
</body>
</html>