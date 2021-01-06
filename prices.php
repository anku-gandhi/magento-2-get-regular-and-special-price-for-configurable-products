<?php
$basePrice = $product->getPriceInfo()->getPrice('regular_price');
// Regular Price
$regularPrice = $basePrice->getMinRegularAmount()->getValue();
// Special Price
$specialPrice = $product->getFinalPrice();
?>
