
<?php
echo '
<table align=center>
<tr><th><t1>benvenuto</t1></th></tr>
<tr><th><form action= file2.php method=post></th></tr>
<tr><th>dimmi un path: <input type = text name=path></th></tr>
<tr><th><input type=submit value=submit> </th></tr>
</table>
</form>
';
if(!empty($_POST['path'])){
$content[] = scandir($_POST['path']);
echo "<table align=center>";
for($i=0; $i<count(scandir($_POST['path'])); $i++){
if(is_dir($_POST['path']."/".scandir($_POST['path'])[$i])){

    echo "<tr><th>DIR <a href=arrigoni.alessandro.tave.osdb.it/".$_POST['path']."/".scandir($_POST['path'])[$i].">".scandir($_POST['path'])[$i]."</a></th></tr>";

}else{
      
    echo "<tr><th><a href=".$_POST['path']."/".scandir($_POST['path'])[$i].">".scandir($_POST['path'])[$i]."</a></th></tr>";
}
}

closedir($hn);
}
?>