<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>SEAMOLEC - Meeting Presence</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">

        <link href="{{asset('/assets/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('/assets/css/bootstrap-material-design.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css">


    </head>


    <body>

         <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="display-table">
                <div class="display-table-cell">
                    <diV class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('images/logoseamolec.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="text-center pt-3">
                                            <a href="index.html">
                                                <img src="{{ asset('assets/images/logo-h-lg.png') }}" alt="logo" height="22" />
                                            </a>
                                        </div>
                                        <div class="px-3 pb-3">
                                            <form class="form-horizontal m-t-20 mb-0" action="{{ route('login') }}" method="POST">
	                      			@csrf 
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" name="email" type="text" required="" placeholder="Username">
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" name="password" type="password" required="" placeholder="Password">
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="form-group text-right row m-t-20">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary btn-raised btn-block waves-effect waves-light" type="submit">Log In</button>
                                                    </div>
                                                </div>
                        
                                                <div class="form-group m-t-10 mb-0 row">
                                                    <div class="col-sm-7 m-t-20">
                                                        <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password ?</a>
                                                    </div>
                                                    <div class="col-sm-5 m-t-20">
                                                        <a href="pages-register.html" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account ?</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                        
                                    </div>
                                </div>
            
                            </div>
                        
                        </div>
                    </diV>
                </div>
            </div>
        </div>




        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-material-design.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        
    </body>
</html>
<!--<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>SEAMOLECs online presence</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">

    <form method="POST" class="modal-content animate" action="{{ route('login') }}">
        @csrf
  
  
   
    

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text"  id="email" placeholder="Enter Username" name="email"  required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
