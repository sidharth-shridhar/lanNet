<?php 
   if(isset($_GET['s']) && isset($_GET['sea']))
   {
   
     $s=$_GET['s'];
     $sea=$_GET['sea'];
     $t="hoc.mp4";
     $z=$s."/".$sea."/".$t;
     
   }
   
   
   
    ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>TV Shows || JRadioLAN</title>
      <!-- Material Design Icons -->
      <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <!-- Font Awesome -->
         <link rel="stylesheet" href="css/font-awesome.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="css/mdb.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="css/style.css" rel="stylesheet">
      <style>
           @font-face {
         font-family: 'FontAwesome';
         src: url('css/fonts/fontawesome-webfont.eot?v=4.1.0') ;
         src: url('css/fonts/fontawesome-webfont.eot?#iefix&v=4.1.0') format('embedded-opentype');
         font-style: normal;
         font-weight: 400;
         }
         
         .demo-list-item {
         width: 300px;
         }
         table {
         border-collapse: collapse;
         border-spacing: 0;
         width: 100%;
         }
         th {
         border: none;
         text-align: center;
         padding: 8px;
         }
         td {
         border: none;
         text-align: left;
         padding: 14px;
         color:grey;
         font-size: 18px;
         background-color: #232323;
         }
         td:hover{
         background-color: #333333;
         color:white;
         cursor:pointer;
         }
         .abc:hover{
          background-color: #333333;
         color:white;
         cursor:pointer;
         }
         #list::-webkit-scrollbar {
         width: 8px;
         }
         /* Track */
         #list::-webkit-scrollbar-track {
         -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
         }
         /* Handle */
         #list::-webkit-scrollbar-thumb {
         background: rgba(140, 140, 140,0.4); 
         -webkit-box-shadow: inset 0 0 6px rgba(140, 140, 140,0.5); 
         }
         #list::-webkit-scrollbar-thumb:window-inactive {
         background: rgba(51, 51, 51,0.4); 
         }
         #list::-webkit-scrollbar-thumb:hover {
         background: rgba(255, 255, 255,0.4); 
         }
         #list::-webkit-scrollbar-thumb:window-active {
         background: rgba(255, 255, 255,0.4); 
         }
         #link1{
          color:white;
          background-color: #333333;
         }
         .video{
         width:98%;
         background:url('radio (1).gif');
         background-color:transparent;
         background-size:120px 120px;
         background-repeat: no-repeat;
         background-position: center;
         }
         #video-wrapper{
          position:relative;
         }
         #video-wrapper:before{
          content:" ";
          position:absolute;
          width:46px;
          height:44px;
          background:url('wm.png');
          background-size:46px 44px;
          right:40px;
          opacity: 0.6;
          top:20px;
          background-size:cover;

         }
       


      </style>
   </head>
   <body   style="background-color:#0d0d0d;">
      <header >
         <nav class="navbar black z-depth-1" role="navigation" id="nv" >
            <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand waves-effect waves-light" href="#"><img src="jr_logow.png" height="60" width="150"  class="img-responsive"style="float:left;top: -10px;margin-bottom:7px;position:relative;"/></a>
               </div>
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <form class="navbar-form navbar-right" role="search">
                     <div class="form-group waves-effect waves-light">
                        <input type="text" class="form-control" placeholder="Search">                   
                     </div>
                  </form>
               </div>
            </div>
         </nav>
         <!--/.Navigation-->
      </header>
      <main class="mdl-layout__content">
         <div  class="container" >
            <div class="row">
               <h5 style="color:white; display:inline;" id="sr"><?php echo  $s ;?></h5>
               <p style="color:white; display:inline;font-size:18px;" id="son"><b><?php echo  $sea ;?></b></p>
               <p style="color:#FD4815; display:inline;font-size:18px;font-weight:bold;text-transform:uppercase" id="epod"><b></b></p>
            </div>
            <br>
            <div class="row">
               <div class="col-md-9" style="padding-left: 0px;padding-right: 0px;padding-top: 0px;">
               <div id="video-wrapper" class="img-responsive">
                  <video   controls   oncontextmenu="return false;" id="video" class="video"  >
                     <source src="#" type="video/mp4" id="abc"/>
                     Your browser does not support the video tag. I suggest you upgrade your browser.
                  </video>
                  </div>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;padding-top: 0px;">
                  <div style="bottom:0;padding:4px;background-color:#1a1a1a;">
                     <h5 style="font-size:20px;color:white;">
                        <center><b>Episodes</b>
                     </h5>
                     </center>
                  </div>
                  <div style="height:436px;width:auto;overflow-y:auto;background-color:#1a1a1a;" id="list">
                     <table id="myTable">
                     </table>
                  </div>
               </div>

            </div>
            <div class="row">
               <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                        
              <span style="font-size:14px;color:#FF3300"> <i class="fa fa-play "></i> /&nbsp; <i class="fa fa-pause "></i></span> <SPAN STYLE="COLOR:WHITE;FONT-SIZE:14PX;">&nbsp;&nbsp;[SPACE BAR]</SPAN>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span style="font-size:14px;color:#FF3300"> <i class="fa fa-arrows-alt fa-lg"></i> </span> <SPAN STYLE="COLOR:WHITE;FONT-SIZE:14PX;">&nbsp;&nbsp;[DOUBLE CLICK]</SPAN>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span style="font-size:14px;color:#FF3300"> <i class="fa fa-volume-up fa-lg"></i> /&nbsp; <i class="fa fa-volume-down fa-lg"></i></span> <SPAN STYLE="COLOR:WHITE;FONT-SIZE:14PX;">&nbsp;&nbsp;[MOUSE SCROLL]</SPAN>
               </div>
         </div>
      </main>

      <!--script-->

      <script type="text/javascript" src="js/jquery.min.js"></script>

      <script>
        var popo = document.getElementById('video');

//popo.play();

//setTimeout(function(){
//    popo.pause();
//},3000);

var current = 0;
var doScroll = function (e) {
    // cross-browser wheel delta
    e = window.event || e;
    var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));

    // Do something with `delta`
    current = current + delta;
    
    
    if(delta== 1 && popo.volume <= 0.9){popo.volume+=0.1;}
    if(delta== -1 && popo.volume > 0.1){popo.volume-=0.1;}

    e.preventDefault();
};

if (popo.addEventListener) {
   popo.addEventListener("mousewheel", doScroll, false);
    popo.addEventListener("DOMMouseScroll", doScroll, false);
} else {
    popo.attachEvent("onmousewheel", doScroll);
}

          var video = document.getElementById('video');   

          document.onkeypress = function(e){
           if((e || window.event).keyCode === 32){
          video.paused ? video.play() : video.pause();
        }
          };
          document.ondblclick = function(){
                if(video.requestFullscreen){
                    video.requestFullscreen();
                }else if(video.mozRequestFullScreen){
                    video.mozRequestFullScreen();
                }else if(video.webkitRequestFullscreen){
                    video.webkitRequestFullscreen();
              }
            };

            

         $(document).ready(function(){
            
             var sg=$("#sr").text()+"/"+$("#son").text()+"/Episode 1.mp4";
             var c=$("#sr").text()+"/"+$("#son").text();
              $("#epod").text("EP01");
              $('#video').get(0).pause();
             // sg="E: \\ Season 5 \\ Breaking Bad S05E14-Ozymandias.mp4";
              $('#abc').attr('src',sg );
              $('#video').get(0).load();
              $('#video').get(0).play();                     
              $.get(c+'/count.txt', function(data) {
            
                 for(var i=1;i<=data;i++){
                    $('#myTable').append('<tr ><td class="abc" id="link'+i+'">Episode '+i+'<i class="fa fa-play right "></i></td></tr>');
                              }
               
               for(var j=1;j<=data;j++){
                   var id="#link"+j;
                   
                    $(id).click(function(){
                     
                          
                      var cdo=$(this).text();
                                     
                        if(cdo.length==9){
                         var pp=cdo[0]+cdo[1]+"0"+cdo[8];
                           $("#epod").text(pp);
                        }

                        else{
                          var pp=cdo[0]+cdo[1]+cdo[8]+cdo[9];
                           $("#epod").text(pp);
                        }

                        var sg=$("#sr").text()+"/"+$("#son").text()+"/"+$(this).text()+".mp4";
                        $('#video').get(0).pause();
                        $('#abc').attr('src',sg);
                        $('#video').get(0).load();
                        $('#video').get(0).play();                     
         
                  });
                }
               
                
                  $(".abc").click(function(){
                    var a=$("#epod").text();
                        if(a[2]=="0"){
                     var b="Episode "+a[3];
                        }
                        else{
                          var b="Episode "+a[2]+a[3];
                        }


                     for(k=1;k<=data;k++){
                      if(($("#link"+k).text())!=b){
                        $("#link"+k).css("color","grey");
                        $("#link"+k).css("background-color"," #232323");
                      }
                      else{
                         $("#link"+k).css("color","white");
                         $("#link"+k).css("background-color","#333333");
                      }
                     }
         
                });
                 });
                  
         
         
         
             //  $('#video').get(0).play();
         });
      </script>
      <script type="text/javascript" src="js/mdb.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
   </body>
</html>
<!--/.Navigation-->