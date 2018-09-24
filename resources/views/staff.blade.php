<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body >

@extends('layouts.basic')
@section('body')

<script>
	

	$(document).ready(function(){
   
       $('#form_click').click(function(){
    	
      $('#form').css({
        'display':'block'
      })  });

        $('#dash').click(function(){
    	
      $('#form').css({
        'display':'none'
      })  });



     });
	

</script>


    <a class="mobile">MENU</a>


    <div id="container">

        <div class="sidebar">
            <ul id="nav">
                <li id="dash">
                    
                    <a class="selected" href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Profile</a>
                </li>
                <li id="form_click">
                 
          <a   href="javascript:void(0);" >make Request</a>
                </li>
				<li>
                 
          <a href="#">Logout</a>
                </li>

            </ul>

        </div>

        <div class="content">
            
    </div>
    





<style type="text/css">
	


html,body {
  font-family: 'Open Sans';
  height: 100%; 
}

a {
  text-decoration: none;
}

div#header {
  width: 100%;
  height: 8%;
  background-color: #2c3e50; 
  margin: 0 auto;
}

.logo{
  float: left;
  margin-top: .2ex; 
  margin-left: 10px;
}

.logo a {
  font-size: 1.6em;
  color: #fff;
}

.logo a span {
  font-weight: 300;
}

div#container {
  height: 92%;
  width: 100%;
  margin: 0 auto;
}


.sidebar {
  width: 250px;
  background:#171717;
  float: left; 
}

ul#nav{

}

ul#nav li {
	list-style: none;
  height:10px;
	/*background-image: url("../images/success.png");*/
	
}
ul#nav li span{
  position:relative;
}
ul#nav li span img {
	float: left;
  display: block;
  margin-left: 1px;
  margin-top: 2px;
}
ul#nav li a {
	color: #ccc;
	display: block;
	padding: 10px;
	font-size: 0.8em;
	width: 85%;
	float: right;
	border-bottom: 1px solid #444;
	-webkit-transition: all 0.2s ease;	
	-moz-transition: all 0.2s ease;
	-ms-transition: all 0.2s ease;
	-o-transition: all 0.2s ease;
	transition: all 0.2s ease;
}

ul#nav li a:hover {
  background: #030303;
  color: #fff;
}

ul#nav li a.selected{
  background: #030303;
  color:#fff;
}


.content {
  width: auto;
  height: 100%;
  background: #95a5a6;
  margin-left: 250px;
  padding: 15px;
}

.content p {
  color: #424242;
  fonnt-size: 0.8em;
}

div#box {
  margin-top: 15px;
}

div#box .box-top {
  color: #fff;
  text-shadow: 0 1px #000;
  background: #2980b9;
  padding: 5px;
  padding-left: 15px;
  font-weight: 300;
} 

div#box .box-panel {
  padding: 15px;
  background: #fff;
  color: #333;
}



@media only screen and (max-width: 480px) {

  a.mobile {
    display: block;
    color: #fff;
    background: #000;
    text-align: center;
    padding: 7px; 
    cursor: pointer;
  }

  a.mobile:active{
    background: #474747;
  }


  .sidebar {
    width: 100%;
    display: none;
    height: auto;
  }

  .content {
    margin-left: 0;
  }


}



@media only screen and (min-width: 480px) {
  .sidebar {
    height: 92%;
    left: 0;
    display: block;
    position: absolute;
  }
  a.mobile {
    display: none;
  }
}

#staff{
 position: absolute;
 top: 13%;
 left: 20%;

}
</style>
<div class="row" id="staff">
staff <br>	
Name: {{  $data->first_name }} &nbsp
{{  $data->middle_name }} &nbsp
{{  $data->last_name }}

<div   id="form" style="display: none;">

     
<br>
<h2>Staff Login</h2>
<form>
<label>Asset Name:</label>
<input type="text"name="AssetName" placeholder=assetname>&nbsp &nbsp <br><br>

<label>Quantity:</label>
<input type="text"name= "qty">&nbsp &nbsp
<br><br>

<label> Department:</label> <select name="dept">
    <option value="CMPN">CMPN</option>
    <option value="IFTN">IFTN</option>
    <option value="EXTC">EXTC</option>
    <option value="ETRX">ETRX</option>
    <option value="INSTRU">INSTRU</option>
  </select><br><br>
 
  <label>Lab No.</label>
  <input type="text" name="labno"><br><br>
 
  <input type="submit" value="Submit"/> 
  
</form>
</div>


</div>

@stop
 
</body>
</html>