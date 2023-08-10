<?php
$submit = $_GET["submit"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assign11.css">
    <title>confirmation</title>
</head>
<body>
    <div id="submited">
        <?php
        if ($submit == ("submit")){
            print "Your order was submited<br> Thank you for shoping";
        }
        else{
            print "Your order was cancel<br> Thank you for visiting";
        }
        ?>
    </div>
</body>
</html>