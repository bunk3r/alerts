<?php
if(!isset($_GET['status'])) {
  header('Location: step-14.php?status=good');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>14 - Converts &lt; and &gt; to HTML entities
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">
  </head>
  <body>
    <div class="siimple-grid">
      <div class="siimple-grid-row">

        <div class="siimple-grid-col siimple-grid-col--12" style="font-size:7em;">

		<?php
	 if(isset($_GET['status'])) {
    $status =  $_GET['status'];

    $status = str_replace('<','&lt;', $status);
    $status = str_replace('>','&gt;', $status);

	echo $status;
}
?>
        </div>
        <div style="color:#ecf0f1;">
          We converts &lt; and &gt; to HTML entities
        </div>
      </div>
    </div>
  </body>
</html>
<!--
/*
https://securityonline.info/bypass-xss-filtering-using-hex-encoding/
%26%23x003C;script%26%23x003E;alert(1)%26%23x003C;/script%26%23x003E;
*/
-->
