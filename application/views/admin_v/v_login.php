<html>
	<head>
		<title></title>
		<!--- fontawesome -->
		<link href="<?php echo base_url('template/login/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

		<!--- sb admin style -->
		<link href="<?php echo base_url('template/login/css/sb-admin.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('template/login/css/sb-admin-2.min.css') ?>" rel="stylesheet">
	</head>
	
	<body class="bg-login">
		<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image shadow-lg"></div>
                            <div class="col-lg-6">
                                <div class="p-5 mt-2 mb-2">
                                    <div class="text-center">
                                        <div style="display:block;">
                                            <div class="p-1 logo-kab mb-1"></div>
                                        </div>
                                        <h1 class="h4 text-gray-900 mb-4 "><span class="text-success">Selamat Datang!</span></h1>
                                    </div>
                                    <?php echo form_open('login/act'); ?>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input onkeyup="btnCheck()" type="text" class="form-control" aria-label="Username" name="username" placeholder="Username" required id="koluser" autocomplete="off" autofocus>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input onkeyup="btnCheck()" type="password" class="form-control" aria-label="Password" name="password" placeholder="Password" required id="kolpswd" autocomplete="off">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-user btn-block" id="btn" disabled>
                                        <i class="fas fa-sign-in-alt"></i> Masuk
                                    </button>
                                   
                                    </form>
                                <div style="width:100%; text-align:right;" class="mt-3">
                                <a href="<?php echo base_url(''); ?>" class="card-link text-success">Ke Beranda <i class="fas fa-home"></i></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
 <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('template/login/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('template/login/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('template/login/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('template/login/js/sb-admin-2.min.js') ?>"></script>
    
     <!-- error message -->
    
    
    
<script>

window.setTimeout(function() {
    $(".alert").fadeTo(10000, 0).slideUp(10000, function(){
        $(this).remove(); 
    });
}, 2000);
</script> 
    



    
    
    
    
   
    
  <!--- button disabled -->
<script>
function btnCheck() {
    var koluser = document.getElementById("koluser").value;
    var kolpswd = document.getElementById("kolpswd").value;
    
	 if(koluser.length<1||kolpswd.length<1) { 
            document.getElementById('btn').disabled = true; 
        } else { 
            document.getElementById('btn').disabled = false;
        }
    }
</script>
	</body>
</html>