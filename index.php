<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
      echo tax_calc(750, 0.223); 

      function tax_calc($amount,$tax){
        $calculate_tax = $amount*$tax;
        $amount = round($amount+$calculate_tax,2);
        return $amount;
      }
    ?>
  </body>
</html>