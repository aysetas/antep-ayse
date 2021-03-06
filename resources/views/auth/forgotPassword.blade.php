<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FONTAWESOME STYLES-->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>

  <style>
      body {

 background-image:url('img/wallpaper3.jpg');
 background-attachment:fixed;
 -moz-background-size:100% 100%;  /*firefox  3.6*/
 -o-background-size:100% 100%;    /*opera  9.5*/
 -webkit-background-size:100% 100%;  /*safari  3.0, chome*/
 background-size:100% 100%;          /*w3c, firefox  4.0, ie9*/



}
  </style>
</head>
<body >
    <div style="width:90%; margin:auto;" class="container">
        <div class="row text-center " style="padding-top:100px;">

        </div>
        <div  class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                <div style="background-color:rgb(253, 228, 228); opacity:0.8;" class="panel-body">

                    @if(Session::has('success'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">*</button>
                        <h4 style="..."><i class="icon fa fa-ban"></i>{{ Session::get('success')}}</h4>

                    </div>
                    @endif

                    <form  class="login100-form validate-form" action="{{ route('auth.forgotPassword') }}" method="POST">
                        {{csrf_field()}}
                            <img src="img/logo.png" alt="">


                            <hr>
                            <center><h4><B style="color:#000;">ŞİFREMİ UNUTTUM</B></h4></center>

                            <br/>


                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                <div  class="wrap-input100 validate-input" data-validate = "Lütfen  Giriniz.">
                                <input  style="background-color:#fff; color:#555"  class="form-control" type="text" name="phone" placeholder="Cep Telefonunuz *">
                                </div>
                            </div>
                            <p style="color:#000">

                           </p>

                        <button style="width:100%" type="submit"  class="btn btn-primary" >SMS GÖNDER</button>
                        <hr>

                    </form>
                </div>

            </div>


        </div>
    </div>

</body>

</html>
