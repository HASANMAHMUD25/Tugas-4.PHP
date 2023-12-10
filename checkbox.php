<?php 
    $hobi = [
        "Baca Buku","Travelling","Olahraga",
        "Nonton","Naik Gunung","Mancing"
    ];
?>
<form method="POST" action="p_check.php">
    <?php 
        foreach($hobi as $key => $val){
            echo '<input type="checkbox" name="hobi[]" value="'.$val.'">'.$val.'<br/>';
        }
    ?>
    <br>
    <input type="submit" value="Kirim"/>
</form>