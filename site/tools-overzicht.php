<?php

require 'database.php';

//de sql query
$sql = "SELECT * FROM tools";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn,$sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_tools = mysqli_fetch_all($result, MYSQLI_ASSOC);



/**
 * Hier loop (iterate) je over alle waardes die gevonden zijn.
 * Je kunt zoals je zien paragraaf-tags gebruiken
 * maar je kunt ook andere HTML-**tags** gebruiken
 */
?>
<?php foreach($all_tools as $tool): ?>
  <p><?php echo $tool["tool_id"] ?></p>
  <p><?php echo $tool["tool_name"] ?></p>
  <p><?php echo $tool["tool_category"] ?></p>
  <p><?php echo $tool["tool_price"] ?></p>
  <p><?php echo $tool["tool_brand"] ?></p>
<?php endforeach; ?>