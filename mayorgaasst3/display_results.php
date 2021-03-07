<!DOCTYPE html>
<html>
<head>
    <title>Pizza</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
	
    <?php 
    $sizeCost= 0;
    if(isset($_GET["size"])) {
        $size = $_GET["size"];
        if($size == "medium")       $sizeCost = 7.00;
        elseif($size == "large")    $sizeCost = 9.00;
        elseif($size == "family")   $sizeCost = 12.00;
        echo "You selected size ". $size . " @ $".number_format($sizeCost, 2, '.', ',') . "<br><br>";
	}
		
        $toppingsCost = 0;
        if(isset($_GET["toppings"])) {
            $toppings = $_GET["toppings"];
            echo "You chose these ".count($toppings). " toppings @ $1.25 ea. <br>";
            foreach ($toppings as $topping)
                echo $topping . "  $1.25 <br>";
            $toppingsCost = 1.25 * count($toppings);
            echo "<br>";
            }

            $othersCost = 0;
            if(isset($_GET["others"])) {
                $others = $_GET["others"];
                echo "You also chose these items @ $1.50 ea. <br>";
                foreach($others as $item) 
                    echo $item . "  $1.50 <br>";
                $othersCost = 1.50 * count($others);
                echo "<br>";
                
            }
            if(isset($_GET["special"])) {
                $special = $_GET["special"];
                echo "You made this request: <br>";
                echo $special . "." . "<br>";
                echo "We will try to honor it.";
                echo "<br><br>";
                
            }
            $total = $sizeCost + $toppingsCost + $othersCost;
            echo "Your total amount due on delivery is ". $total ."<br>";
            echo "Your pizza will be delivered to: <br>";
            if(isset($_GET["address1"])) {
                echo $_GET["address1"] . "<br>";
                
            }
            if(isset($_GET["address2"])) {
                echo $_GET["address2"] . "<br>";
                
            }
            if(isset($_GET["phone"])) {
                echo "<br>" . "We will call " . $_GET["phone"] . " when its on the way" . "<br>";
                
            }
            echo "Thank you for ordering from me, Mayorga!";
            ?>
	
</body>
</html>