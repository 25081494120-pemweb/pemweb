<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rokok Ilegal</title>
</head>
<body>
<h1>Rokok Ilegal</h1>
<?php
echo "Welcome to Rokok Ilegal Information";
?>

<?php
// PHP code is written here
?>

<h2>Owner Information</h2>

<?php
echo "Owner Name: Nathanael";
echo "<br>Business Name: Rokok Ilegal";
?>

<?php
$menuname = "Produk Rokok";
$price = "12000";
?>

<h2>Rokok Ilegal Information</h2>

<p>Menuname: <?php echo $menuname; ?></p>
<p>Price: <?php echo $price; ?></p>

<?php
?>

<?php
$price = "12000";
$quantity = 3;
$total = $price * $quantity;

echo "Price: Rp " . $price;
echo "<br>Quantity: " . $quantity;
echo "<br>Total Price: Rp " . $total;
?>

<?php
$customerMoney = 15000;
$menuPrice = 12000;
$menuName = "Produk Rokok";

if ($customerMoney >= $menuPrice) {
    echo "Data harga mencukupi untuk simulasi.";
} else {
    echo "Data harga tidak mencukupi.";
}
?>

<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Information number: " . $i . "<br>";
}
?>

<?php
$menus = array(
    "Informasi Rokok Ilegal",
    "Ciri-ciri Rokok Ilegal",
    "Pita Cukai",
    "Dampak Rokok Ilegal",
    "Informasi Peraturan"
);

echo "<ul>";

foreach ($menus as $item) {
    echo "<li>" . $item . "</li>";
}

echo "</ul>";
?>

<h2>8. Random Values</h2>

<?php
$randomNumber = rand(1, 100);

echo "Random Number: " . $randomNumber;
?>

<h2>Random Information</h2>

<?php
$randomMenu = $menus[array_rand($menus)];

echo "Today's Random Information: " . $randomMenu;
?>

<h2>9. Rokok Ilegal Customer Gacha</h2>

<?php
$menuName = "Produk Rokok";
$menuPrice = 12000;

echo "Product: " . $menuName;
echo "<br>Price: Rp " . $menuPrice;

$gacha = rand(1, 100);

echo "<br>Gacha Number: " . $gacha;

if ($gacha <= 10) {
    echo "<br>Information: Mendapatkan informasi tambahan tentang cukai.";
} elseif ($gacha <= 30) {
    echo "<br>Information: Mendapatkan informasi tentang ciri-ciri rokok ilegal.";
} elseif ($gacha <= 60) {
    echo "<br>Information: Mendapatkan informasi tentang dampak rokok ilegal.";
} else {
    echo "<br>Thank you for visiting.";
}
?>

</body>
</html>