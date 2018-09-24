<!DOCTYPE html>
<html>
<head>
	<title>AMS</title>
</head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
<body style="overflow: hidden;">
	<nav class="navbar navbar-inverse"  style="opacity: 0.8" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">AMS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     
      <ul class="nav navbar-nav navbar-right">
        <li id="About"><a href="javascript:void(0);">About</a></li>
        <!-- <li id="SignUp"><a href="javascript:void(0);"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
        </li> -->
        <li id="Login"><a href="javascript:void(0);"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="row" style="margin: 0px">
<img src="lara.jpg">
<div id="about_content" style="display: none;">

         <div class="container">
  
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
  <div class="panel panel-default">
  <div class="panel-body">
    <label>Contact:</label> &nbsp 9702866597 <br>
  <label>Email:</label> &nbsp guptapradyumn284@gmail.com
     </div>
</div>
</div>
</div>
</div>
</div>



 <div id="div-forms" style="display: none;">
              
         <div class="container">
  
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div id="close">[X]</div><br>
              <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
              <!-- <form role="form"> -->
                {!! Form::open(['method'=>'POST','url'=> '/home']) !!}
                  <div class="form-group">
                  <!-- <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username"> -->
                  {{ Form::text('username','',['class'=> 'form-control input-sm','placeholder'=> 'Username']) }}
                </div>

                
                    <div class="form-group">
                     <!--  <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password"> -->

                     {{ Form::text('password','',['class'=> 'form-control input-sm','placeholder'=> 'Password']) }}
                    </div>        
                                
                <!-- <input type="button" value="Login" onclick="location.href = '/home';" class="btn btn-info btn-block"> -->

                {!! Form::submit('Login',['class'=> 'btn btn-info btn-block']) !!}
              
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>

</div>



<!-- registration -->
<div id="regis">
<div class="container">
  
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div id="close_regis">[X]</div><br>
              <h3 class="panel-title">Please sign up <small>It's free!</small></h3>
            </div>
            <div class="panel-body">
              <form role="form">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                </div>

                 <div class="form-group">
                  <input type="number" name="contact" id="contact" class="form-control input-sm" placeholder="contact">
                </div>

                 <div class="form-group">
                  <input type="textarea" name="address" id="address" class="form-control input-sm" placeholder="Address">
                </div>



                <div class="form-group">
                  <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username">
                </div>

                 <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="department" id="department" class="form-control input-sm" placeholder="department">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="role" id="role" class="form-control input-sm" placeholder="role">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                    </div>
                  </div>
                </div>
                
                <input type="submit" value="Register" class="btn btn-info btn-block">
              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<style type="text/css">
  img{
    
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    width: 100%;
    z-index: -1;
  }

  #close_regis,#close{
    text-align: right;
  }
  #regis{
    display: none;
  }
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $('#About').click(function(){
    	$('#regis').hide();
    	$('#div-forms').hide();
      $('#about_content').css({
        'display':'block'
      }).delay(5000).slideUp('slow')  });
  

    $('#Login').click(function(){
    	$('#regis').hide();
    	$('#about_content').hide();
      $('#div-forms').css({
        'display':'block'
      })  });

    $('#close_regis').click(function(){
      $('#regis').hide('slow')  });

    $('#close').click(function(){
      $('#div-forms').hide('slow')  });


    $('#SignUp').click(function(){
    	$('#about_content').hide();
    	$('#div-forms').hide();
      $('#regis').css({
        'display':'block'
      })  });
  });
</script>
 

</body>
</html>