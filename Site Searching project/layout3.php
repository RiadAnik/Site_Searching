<?php
require_once 'connect.php';
require_once 'session.php';
?>
<!DOCTYPE html>
<!-- Template by html.am -->
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>GP OSS</title>
		<style type="text/css">
              option { 
     background-color: #006fb2;
   
                  color:white;
}
            select{
                 background-color:#416093;
                   
                       color:white;
            }
			html, #page { padding:0; margin:0;}
			body { margin:0; padding:0; width:100%; color:#959595; font:normal 12px/2.0em Sans-Serif;} 
			h1, h2, h3, h4, h5, h6 {color:darkblue;}
			#page { background:#eee;}
			#header, #footer, #top-nav, #content, #content #contentbar, #content #sidebar { margin:0; padding:0;}
						
			/* Logo */
			#logo { padding:10px; width:auto; float:left;}
			#logo h1 a, h1 a:hover { color:darkblue; text-decoration:none;}
			#logo h1 span { color:#d3d3f9;}

			/* Header */
			#header { background:#eee; }
			#header-inner { margin:0 auto; padding:10px; width:970px;background:#fff;}
			
			/* Feature */
			.feature { background:#eee;padding:0;}
			.feature-inner { margin:auto;padding:10px;width:970px;background:#006fb2; text-align:center; }
			.feature-inner h1 {color:#fff;font-size:32px;}
			
			/* Menu */
			#top-nav { margin:0 auto; padding:0px 0 0; height:37px; float:right;}
			#top-nav ul { list-style:none; padding:0; height:37px; float:left;}
			#top-nav ul li { margin:0; padding:0 0 0 8px; float:left;}
			#top-nav ul li a { display:block; margin:0; padding:8px 20px; color:blue; text-decoration:none;}
			#top-nav ul li.active a, #top-nav ul li a:hover { color:#d3d3f9;}
			
			/* Content */
			#content-inner { margin:0 auto; padding:10px; width:970px;background:#fff;}
			#content #contentbar { margin:0; padding:0; float:center; width:760px;}
			#content #contentbar .article { margin:0 0 0px; padding:0 0px 0 0px; }
			#content #sidebar { padding:0; float:left; width:200px;}
			#content #sidebar .widget { margin:0 0 12px; padding:8px 8px 8px 13px;line-height:1.4em;}
			#content #sidebar .widget h3 a { text-decoration:none;}
			#content #sidebar .widget ul { margin:0; padding:0; list-style:none; color:#959595;}
			#content #sidebar .widget ul li { margin:0;}
			#content #sidebar .widget ul li { padding:4px 0; width:185px;}
			#content #sidebar .widget ul li a { color:blue; text-decoration:none; margin-left:-16px; padding:4px 8px 4px 16px;}
			#content #sidebar .widget ul li a:hover { color:#d3d3f9; font-weight:bold; text-decoration:none;}
			
			/* Footerblurb */
			#footerblurb { background:#eee;color:blue;}
			#footerblurb-inner { margin:0 auto; width:970px; padding:10px;background:#d3d3f9;border-bottom-right-radius:15px;border-bottom-left-radius:15px;}
			#footerblurb .column { margin:0; text-align:justify; float:left;width:270px;padding:0 24px;}
			
			/* Footer */
			#footer { background:#eee;}
			#footer-inner { margin:auto; text-align:center; padding:12px; width:970px;}
			#footer a {color:blue;text-decoration:none;}
			
			/* Clear both sides to assist with div alignment  */
			.clr { clear:both; padding:0; margin:0; width:100%; font-size:0px; line-height:0px;}
            
		</style>
	</head>
       <?php
$name = $_SESSION['name'];
$sql=" SELECT `Sub_center`,`3G`,`Type`,`NTTN`,`HRS` FROM gp_oss.`sitenames` WHERE `Site_name`='$name'";
$q=mysql_query($sql);
while($row=mysql_fetch_array($q,MYSQL_NUM)){
$s_temp=$row[0];
$g_temp=$row[1];
$t_temp=$row[2];
$n_temp=$row[3];
$h_temp=$row[4];
}
?>
	<body>
		<div id="page">
			<header id="header">
				<div id="header-inner">	
					<div id="logo">
						<h1><a href="#"><img src=logo.png></img></a></h1>
					</div>
					<div id="top-nav">
						<ul>
						<li><a href="layout.php">About</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Help</a></li>
						</ul>
					</div>
					<div class="clr"></div>
				</div>
			</header>
			<div class="feature">
				<div class="feature-inner">
				<h1>Update The Tuple of <?php $name = $_SESSION['name']; echo $name; ?></h1>
				</div>
			</div>
		
	
			<div id="content">
				<div id="content-inner">
				
					<main id="contentbar">
						<div class="article">
							  <form action="updatebackground.php" method="POST"><br>

Sub Center: <select name="s">
<option disabled selected style='display: none;'><?php echo $s_temp; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
<option value="yyy">yyy</option>
<option value="nnn">nnn</option>
<option value="bbb">bbb</option>
</select><br><br>
3G &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; : <select name="g">
     <option disabled selected style='display: none;'><?php echo $g_temp; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
<option value="YES">YES</option>
<option value="NO">NO</option>
</select><br><br>
Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; : <select name="t">
    <option disabled selected style='display: none;'><?php echo $t_temp; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<option value="a">aaa</option>
<option value="z">zzz</option>
<option value="v">vvv</option>
</select><br><br>
NTTN &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;    : <select name="n">
    <option disabled selected style='display: none;'><?php echo $n_temp; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<option value="mmm">mmm</option>
<option value="nnn">nnn</option>
<option value="ooo">ooo</option>
</select><br><br>
HRS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;   : <select name="h">
    <option disabled selected style='display: none;'><?php echo $h_temp; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<option value="YES">YES</option>
<option value="NO">NO</option>
</select>
<br><br>
 <div class="sub"><input type="submit" style="font-face: 'Comic Sans MS'; font-size: medium;cursor:pointer; color: white; background-color: #416093; border: 1pt ridge lightgrey" value="&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"></div>
</form> 
        </div>

<?php
if(isset($_SESSION['nodata'])&&!empty($_SESSION['nodata'])){
      echo "<p style='color:red;text-align:left;font-size:21px;
                                        padding-top:10px'>
                               <strong>No data updated.</strong></p>";
    unset($_SESSION['nodata']);
}
if(isset($_SESSION['insert'])&&!empty($_SESSION['insert'])){
      echo "<p style='color:green;text-align:left;font-size:21px;
                                        padding-top:10px'>
                               <strong>Data updated successfully. </strong></p>";
    unset($_SESSION['insert']);
}
if(isset($_SESSION['nochange'])&&!empty($_SESSION['nochange'])){
      echo "<p style='color:red;text-align:left;font-size:21px;
                                        padding-top:10px'>
                               <strong>The tuple is unchanged. </strong></p>";
    unset($_SESSION['nochange']);
}

?>
						</div>
					</main>
					
					
					<div class="clr"></div>
				</div>
			</div>
		
			<div id="footerblurb">
				<div id="footerblurb-inner">
				
					<div class="column">
						<h2><span>About Grameenphone</span></h2>
						<p>"Grameenphone, widely abbreviated as GP, is the leading telecommunications service provider in Bangladesh. With more than 56 million subscribers, Grameenphone is the largest mobile phone operator in the country".</p>
					</div>	
					<div class="column">
						<h2><span>Useful Links</span></h2>
						<p>"The smaller your reality, the more convinced you are that you know everything.", "If the facts don't fit the theory, change the facts.", "The past has no power over the present moment.", "This, too, will pass.", "</p><p>You will not be punished for your anger, you will be punished by your anger.", "Peace comes from within. Do not seek it without.", </p>
					</div>
					<div class="column">
						<h2><span>Customer Service</span></h2>
						<p>01700-100121</p>
					</div>	
					
					<div class="clr"></div>
				</div>
			</div>
			<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
					<div class="clr"></div>
				</div>
			</footer>
		</div>
	</body>
</html>