<?php
 $matakuliah = [
    " " => "",
    "MK02"=>"Desain Web",
    "MK03"=>"PHP Programming",
    "MK04"=>"Database"
 ];
?>

<form action="dropdown.php" method="POST">
    Pilihan Matakuliah :
    <select name="mk">
        <?php
          foreach($matakuliah as $key => $val){
            echo '<option value="'.$val.'">'.$key.'</option>';
          }
        ?>
    </select>
    <input type="submit" value="Submit" name="submit" />
</form>
<?php
  $matakuliah  = $_POST['mk'];

  echo $matakuliah;
?>