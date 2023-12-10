<?php 
$p_method = [
    1=>"Cash","Transfer","e-Wallet","Crypto Currency"
];
?>
<form action="p_radio.php" method="POST">
    Metode Pembayaran :
    <?php 
        foreach($p_method as $key => $val){
            echo '<input type="radio" name="payment" value = "'.$val.'">'.$key;
        }
    ?>
    <input type="submit" value="Submit" name="submit" />
</form>

