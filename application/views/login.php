<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.ico'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

  <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  
<style>
  .div-login{
    margin-top: 20vh;
    margin-bottom: 20vh;
  }

  @media (max-width:450px){
    .div-login{
      margin-top: 20vh;
    margin-bottom: 20vh;
  }

  }


  .input-group{
    position: relative;
    margin: 20px 0px;   
    margin-bottom:7px; 
  }

  

  .input-group label{
    position: absolute;
    top: 50%;
    left:30px;
    transform: translateY(-50%);
    font-size:16px;
    color:black;
    padding: 0 5px;
    pointer-events:none; 
    transition: 0.3s;
  }

  .input-group input{
    width: 90%;
    padding-left: 12px;
    margin: auto;
    height: 50px;
    font-size: 16px;
    background: transparent;
    border: 1.2px solid #aeaeae;
    outline-width: thin;
    outline-color:rgb(99, 176, 254);
    
  }
  
  .input-group input:focus~label{
    font-size: 14px;
    top: 0;
    color: rgb(99, 176, 254);
    background: #fff;
  }


  .input-group input:valid~label {
    font-size: 14px;
    top: 0;
    color: rgb(99, 176, 254);
    background: #fff;
    
  }

  #blogin{
    width:90% ;
  }

  .logo-login{
    margin-top: 20px;
    display: flex;
    justify-content: center;
    align-content: center;
    font-family: 'Times New Roman';
    font-size: 20px;
    font-weight: 500;
    margin-bottom: -18px;
  }

  .text-logo{
    position: relative;
    flex-direction: column;
  }

  img{
    width: 60px;
    height: 60px;
  }


  .show-password{
    display: flex;
    justify-content: start;
    margin-left:1.3rem;
    margin-bottom: 2rem;
    
  }

  .show-password input{
    margin-right: 0.5rem;
  }

  /* .input-group img{
    position: absolute;
    width: 20px;
    height: 15px;
    left: 330px;
    top: 17px;
    cursor: pointer;
  } */


  @media (max-width:450px){
    .input-group img{
    position: absolute;
    width: 20px;
    height: 15px;
    left: 250px;
    top: 17px;
    cursor: pointer;
  }

  

  }


  #divlogin a:hover{
    text-decoration: underline;
  }

</style>


</head>

<body>

  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">

      <div class="card text-center div-login ">
        <div class="logo-login ">
          <div class="text-logo text-start mb-4" style="vertical-align: middle">
            <p style="margin-bottom: -6px">Login Sistem Keuangan TK</p>
          </div>
        </div>
            <div class="card-body">
                <form action="" class="text-center" method="POST">
                    <div class="input-group">
                      <input type="text" class="is-invalid" id="username" name="username" autocomplete="off" required>
                      <label for="username" class="">Username</label>
                    </div>
    
                    <div class="input-group">
                      <input type="password" id="password" name="password" required>
                      <label for="password" class="">Password</label> 
                    </div> 
                    
                    <div class="show-password">
                      <input type="checkbox" class="form-check-input" onclick="myFunction()" id="eye-icon">
                      <label  for="exampleCheck1">Lihat Password</label>
                    </div>

                                
                    <div class="" id="divlogin">
                      <button class="btn btn-primary py-2 mb-2" id="blogin">Login</button><br>
                    </div>
                  </form>
            </div>
    </div>

      </div>
    </div>
  </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="assets/dashboard/js/main.js"></script>

  <script>
    let password = document.getElementById("password"); 


    function myFunction() {
      if (password.type == "password") {
        password.type = "text";
  
      }else{
        password.type = "password";
        
      }
    }



  </script>

  <script>
    $(document).ready(function () {
      $('#blogin').click(function (e) { 
        e.preventDefault();
        let form = $(this).closest('form');
        $('#divlogin').html(` <button class="btn btn-primary py-2" id="blogin">Mohon Tunggu <span class="spinner-border spinner-border-sm" aria-hidden="true"></span></button>`);
        form.submit()
      });
    });
  </script>

</body>

</html>  