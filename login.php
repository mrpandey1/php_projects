<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    .name td,th
    {
      border:1px solid black;
      padding: 10px;
    }
    table

  </style>

	<!--start of header-->
  <div class="container-fluid" id="header">
       <span class="glyphicon glyphicon-align-justify" id="collapse_icon" onclick="openNav()" title="Menus"></span>
        <h1 class="clg_name3">IT</h1>
       <h2 class="clg_name2" title="GPM">INDUSTRIAL TRAINING</h2>
  </div>
  <!--end of header-->
   <div class="para">
  
     
     <iframe src="inde.html" style="height: 100vh;width: 100vw;margin-left: -110px;"></iframe>

   </div>
      <!--start of sidebar-->
          <div id="mySidenav" class="sidenav">
             <table> 
                 <div class="dropdown" id="dropdown_id">
                 <button class="dropbtn">ThingSpeak<span class="glyphicon glyphicon-menu-right" id="spans" ></span></button>
                 <div class="dropdown-content" style="z-index: 99 !important;">
                 <a href="basic3.html" style="color: white;">Site</a>
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
