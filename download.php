<?php
//obtaining youtube id from mp3.php page.
$id = $_GET['id'];
?>

<!--Using convert2mp3.cc javascript to generate download Link-->
<a class="c2m3" href="javascript:convert2mp3('<?php echo $id;?>')">Download</a>

<!--Including convert2mp3.cc Javascript-->
<script type="text/javascript" src="https://api.convert2mp3.cc/api.js"></script>