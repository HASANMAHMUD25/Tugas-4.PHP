<?php 
    $hobi = $_POST['hobi'];
    if(!empty($hobi)){
        // print_r($hobi);
        foreach($hobi as $hbi) {
            echo $hbi."<br/><br/>";
        }
    }
?>
<form>
    <br>
    <button><a href="checkbox.php">Kembali</a></button>
</form>