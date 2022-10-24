<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Current Date</title>
  </head>
  <body> 
    <?php
        function CurrentDate() {
            echo date("Y/m/d")." ". date("H:i:s");
        } ?>
<footer> &copy; <?php CurrentDate();?> </footer>
  </body>
</html>