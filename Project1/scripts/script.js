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