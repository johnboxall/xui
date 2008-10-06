<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>XUI Demos</title>
    <script type="text/javascript" src="xui.js"></script>
    <script type="text/javascript">
    
    
    x$(window).load(function() {
      x$('#anim1').click(function() {
        x$('.box').animate({left: { by: 100 }});
      });
      
      x$('#anim3').click(function() {
        x$('.box').animate({top: { from: 10, to: 200 },left: {from:200, to: 300 }});
      });
      
      x$('#anim4').click(function() {
        x$('.box').canimate({ backgroundColor: { to: '#ffdd00' }, color:{ to:'#fff'} });
      });
    });

    </script>
    <style type="text/css" media="screen">
      .container {
        position:relative;
        height:82px;
      }
      
      .box {
        position:absolute;
        left:20px;
        top:0px;
        width:80px; height:80px;
        border:1px solid #ccc;
        background-color:#efefef;
      }
    </style>
  
  </head>
  <body>
    <h1 id="xui_demos">XUI Demos</h1>
    <h2>Animation (must be absolutely positioned)</h2>
      <div class="container">
        <div class="box">1</div>
      </div>
      <br />
      <button id="anim1">Right by 100</button>
      <button id="anim2">To 200,300</button>
      <button id="anim3">From 10,200 to 200,300</button>
      <button id="anim4">Background Color</button>
      
  </body>
</html>