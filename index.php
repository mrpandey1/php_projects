<?php
  $st='images/bulbon.png';
if(isset($_GET['light'])){
$light = $_GET['light'];
if($light == "on") {
  $file = fopen("light.json", "w") or die("can't open file");
  fwrite($file, '{"light": "on"}');
  fclose($file);
} 
else if ($light == "off") {
  $file = fopen("light.json", "w") or die("can't open file");
  fwrite($file, '{"light": "off"}');
  $st='images/bulbof.jpg';

  fclose($file);
}
}
else{
$light=""; 
} 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="check2.css">
</head>
<body>
  <style type="text/css">
    
  </style>

  <script type="text/javascript">


    window.onclick = function(event) {
    if (event.target.id != "mySidenav"&&event.target.id!="collapse_icon") {
      closeNav();
        
    }
}
    function openNav() {
        var x = document.getElementById("mySidenav");
        var i=document.getElementById("spans");
        var k=document.getElementById("dropdown_id");
        var l=document.getElementById("dropdown_id_1");
        var m=document.getElementById("dropdown_id_2");
        var y=window.innerWidth;
        if(x.style.width=="15%"||x.style.width=="60%"||x.style.width=="30%")
        {
           x.style.width="0%";
           x.style.padding="0";
           k.style.display="none";
           l.style.display="none";
           m.style.display="none";
           
     
        }
        else if(y<="980"&&y>="501")
        {
          x.style.display="block";
           x.style.width = "30%";
           x.style.position="fixed";
           x.style.padding="10px";
           k.style.display="block";
           l.style.display="block";
           m.style.display="block";
          
        }
         else if(y<="500")
        {
          x.style.display="block";
           x.style.width = "60%";
           x.style.position="fixed";
           x.style.padding="10px";
           k.style.display="block";
           l.style.display="block";

           m.style.display="block";
        }
        else
        { 
          x.style.display="block";
           x.style.width = "15%";
           x.style.padding="10px";
           x.style.position="fixed";
           k.style.display="block";
           l.style.display="block";

           m.style.display="block";
         
        }
     
}

function closeNav() {
     var x = document.getElementById("mySidenav");
        var i=document.getElementById("spans");
        var k=document.getElementById("dropdown_id");
       var l=document.getElementById("dropdown_id_1");
       var m=document.getElementById("dropdown_id_2");
       
           x.style.width="0%";
           x.style.padding="0";
           k.style.display="none";
           l.style.display="none";

           m.style.display="none";
          
}
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    document.getElementById("header").style.transition = "all 0.2s";
    document.getElementById("header").style.boxShadow = "0.3px 0.3px 10px black";
  } else {
    document.getElementById("header").style.boxShadow = "0 0 0 black";
  }
}
  </script>
  <style type="text/css">
    .btn
    {
      width: 30%;
      background-color: black;
      color: white;
      margin-left: 35%;
    }
    .led
    {
      background-color: black;
    }
    .btn:hover
    {
      background-color: #f1f1f1;
      color: black;

    }
  </style>
<script type="text/javascript">
  function gu()
  {
    img=document.getElementById('bulbof');
    img.src = 'images/bulbon.png';
  }
</script>
	<!--start of header-->
  <div class="container-fluid" id="header">
    <p style="position: absolute;right: 2%;color: white;margin-top: 25px;margin-right: 20px">login</p>
       <span class="glyphicon glyphicon-align-justify" id="collapse_icon" onclick="openNav()" title="Menus"></span>
        <h1 class="clg_name3">IT</h1>
       <h2 class="clg_name2" title="GPM">INDUSTRIAL TRAINING</h2>
       <a href="load.html"><svg  style="height: 40px;color: white;position: absolute;right: 5%;margin: 15px;"  aria-hidden="true" data-prefix="fas" data-icon="sign-in-alt" class="svg-inline--fa fa-sign-in-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path></svg></a>
  </div>
  <!--end of header-->
   <div class="para">
    <div class="bulb" style="height: 10%;width: 5%;margin-left: 45%;"> 
      <img src="<?PHP echo $st;?>" id="bulbof">
      
    </div>
     <form>
     <div class="row" style="margin-top: 20px;">
      <div class="col-md-8 col-md-offset-2">
        <a href="?light=on" class="btn  btn-block btn-sm">Press to turn the led On</a>
        <br />
        <a href="?light=off" class="led btn btn-block btn-sm" >Press to turn the led off</a>
        <br />
        
      </div>
    </div>
  </form>

     
   </div>
      <!--start of sidebar-->
          <div id="mySidenav" class="sidenav">
             <table> 
                 <div class="dropdown" id="dropdown_id">
                 <button class="dropbtn">ThingSpeak<span class="glyphicon glyphicon-menu-right" id="spans" ></span></button>
                 <div class="dropdown-content" style="z-index: 99 !important;">
                 <a href="basic3.html" style="color:white" >Site</a>
                 </div>
                 </div>
                 <div class="dropdown" id="dropdown_id_1">
                 <button class="dropbtn"><a id="hiii" href="basic2.html" >About us</a></button>
                 </div>
                 <div class="dropdown" id="dropdown_id_2">
                 <button class="dropbtn"><a id="hiii" href="index.php" >Home</a></button>
                 </div>

              </table>
          </div>
      <!--end of sidebar-->
      <!--start of footer-->

      <div class="footer">
        <p>GOVERNMENT POLYTECHNIC MUMBAI</p>
      </div>

</body>
</html>
