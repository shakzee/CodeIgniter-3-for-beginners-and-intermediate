<?php
/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/20/2017
 * Time: 4:47 PM
 */
//var_dump($myProducts);
foreach ($myProducts as $product){
    echo 'ID=>'.$product['id'].'<br>';
    echo 'Qua=>'.$product['qty'].'<br>';
    echo 'Price=>'.$product['price'].'<br>';
    echo 'Name=>'.$product['name'].'<br>';
    var_dump( $product['options']).'<br>';
    echo 'RowId=>'.$product['rowid'].'<br>';
}
$price = 250;
$rowId = "72ff4230a1b1c88803ecc8ab638e4278";
?>
<a href="<?php echo site_url('shoppingCart/updateProduct/'.$price.'/'.$rowId)?>">UpdateProduct</a>
