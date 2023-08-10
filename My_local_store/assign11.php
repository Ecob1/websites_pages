<?php
$cardss = $_GET['card'];
$firstname = $_GET['first_name'];
$lastname = $_GET['last_name'];
$address = $_GET['address'];
$phone = $_GET['phone'];
$cards = $_GET['credit_card'];
$total_cost = $_GET['total'];
$exp_cards = $_GET['exp_date'];



$items = $_GET["item"];
$total = 0;

foreach($items as $item){
    $total += $item;                 

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assign11.css">
    <title>Shoping recipt</title>
</head>
<body>
    <div id="receipt">
        <header id="heading"><h2>Checkout confirmation</h2></header>
        <p>Receipt:<br><br></p>
    
        <?php
            print "$firstname  $lastname<br>";
            print "$address<br>";
            print "$phone<br><br>";
            print "Items:<br>";          

            foreach($items as $item){
                if ($item == ("25.55")){
                    print ("25lb. Sugar $25.55<br>");
                }  
                if($item == ("5.99")){
                    print ("40 pcs. Tortillas $5.99<br>");
                } 
                if($item == ("6.45")){
                    print ("Canola oil $6.45<br>");
                } 
                if($item == ("4.55")){
                    print ("Nutella $4.55<br>");
                }               
            
            }
            print "Total: $". "$total_cost<br>";
            print "$cardss" . " " . "$exp_cards <br>";
            

        ?>
        <form action="assign11_a.php" method="GET">

            <input type="submit" value="submit" name="submit">
            <input type="submit" value="cancel" name="submit">
        </form>
    </div>


    
</body>
</html>