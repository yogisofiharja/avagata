<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Avagata EduSystem</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link media="screen" href="<?php echo base_url();?>/asset/web/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/asset/web/js/easySlider1.5.js"></script>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
$(document).ready(function(){	
	$("#slider").easySlider({
		controlsBefore:	'<p id="controls">',
		controlsAfter:	'</p>',
		auto: true, 
		continuous: true
	});	
});
// ]]>
</script>
<style type="text/css">
.gallery { float:right; width:350px; height:184px; margin:40px 45px 0 0 !important; margin:40px 25px 0 0; }
#slider { margin:0; padding:0; list-style:none; }
#slider ul,
#slider li { margin:0; padding:0; list-style:none; }
/* 
    define width and height of list item (slide)
    entire slider area will adjust according to the parameters provided here
*/
#slider li { width:350px; height:184px; overflow:hidden; }
p#controls { margin:0; position:relative; }
#prevBtn { display:block; margin:0; overflow:hidden; width:103px; height:25px; position:absolute; left: -532px !important; left:-578px; top:-10px; }
#nextBtn { display:block; margin:0; overflow:hidden; width:103px; height:25px; position:absolute; left: -410px !important; left: -460px; top:-10px; }
#prevBtn a { display:block; width:103px; height:25px; background:url(<?php echo base_url();?>/asset/web/images/l_arrow.gif) no-repeat 0 0; }
#nextBtn a { display:block; width:103px; height:25px; background:url(<?php echo base_url();?>/asset/web/images/r_arrow.gif) no-repeat 0 0; }
</style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="block_header">
      <div class="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>/asset/web/images/logo.gif" width="458" height="129" border="0" alt="logo" /></a></div>
      <div class="search">
        <form id="form1" name="form1" method="post" action="">
          <label>
            <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Search..." />
            <input name="b" type="image" src="<?php echo base_url();?>/asset/web/images/search.gif" class="button" />
          </label>
        </form>
      </div>
      <div class="clr"></div>
      <div class="menu">
        <ul>
         <li><a href="<?php echo base_url();?>" class="active"><span>Home</span></a></li>
          <li><a href="<?php echo base_url();?>download"><span>Download</span></a></li>
          <li><a href="<?php echo base_url();?>documentation"><span>Documentation</span></a></li>
          <li><a href="<?php echo base_url();?>blog"><span>Blog</span></a></li>
          <li><a href="<?php echo base_url();?>about"><span>About Avagata</span></a></li>
	  <li><a href="<?php echo base_url();?>participate"><span>Participate</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="header_text">
        <div class="div">
          <div class="left1">
            <h2><span>Creative Solutions</span> to improve your
              online business!</h2>
            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many.<br />
            </p>
          </div>
        </div>
        <div class="gallery">
          <div id="slider">
            <ul>
              <li><img src="<?php echo base_url();?>asset/web/images/simple_img_1.jpg" alt="screen 1" width="350" height="184" border="0"  /></li>
              <li><img src="<?php echo base_url();?>asset/web/images/simple_img_1.jpg" alt="screen 1" width="350" height="184" border="0"  /></li>
              <li><img src="<?php echo base_url();?>asset/web/images/simple_img_1.jpg" alt="screen 1" width="350" height="184" border="0"  /></li>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="top_header">
    <div class="bloga">
      <h2>What We Do</h2>
      <p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />
        Why do we use it?</p>
      <p><a href="#">more info</a></p>
    </div>
    <div class="bloga2">
      <h2>Services Overview</h2>
      <p class="backg">Lorem Ipsum is simply dummy text of the printing </p>
      <p class="backg">Lorem Ipsum has been the industry's </p>
      <p class="backg">It has survived not only five centuries</p>
    </div>
    <div class="bloga">
      <h2>About us</h2>
      <p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />
        Why do we use it?</p>
      <p><a href="#">more info</a></p>
    </div>
  </div>
<!--header-->