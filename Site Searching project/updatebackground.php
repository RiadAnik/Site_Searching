<?php     

require_once 'connect.php';
require_once 'session.php';
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
$count=0;
  if(empty($_POST['s'])&&!isset($_POST['s']))
  {
      $s=$s_temp;
      $count++;
  }
else{
        $s=$_POST['s'];
}
    if(empty($_POST['g'])&&!isset($_POST['g']))
  {
      $g=$g_temp;
              $count++;
  }
else{
        $g=$_POST['g'];
}
    if(empty($_POST['t'])&&!isset($_POST['t']))
  {
      $t=$t_temp;
              $count++;
  }
else{
    $t=$_POST['t'];
}
    if(empty($_POST['n'])&&!isset($_POST['n']))
  {
      $n=$n_temp;
              $count++;
  }
else{
        $n=$_POST['n'];
}
    if(empty($_POST['h'])&&!isset($_POST['h']))
  {
      $h=$h_temp;
        $count++;
  }
else{
        $h=$_POST['h'];
}
   if($count==5)
   {
         $_SESSION['nochange']="nochange";
         header('Location: layout3.php');

   }
else{
$sql=" UPDATE `sitenames` SET `Sub_center`='$s',`3G`='$g',`Type`='$t',`NTTN`='$n',`HRS`='$h' WHERE `Site_name`='$name'";
   if( $query_run=mysql_query($sql))
          {
              $_SESSION['insert']="insert";
         header('Location: layout3.php');

          }
          else
          {
             $_SESSION['nodata']="nodata";
         header('Location: layout3.php');   
          }
}
?>