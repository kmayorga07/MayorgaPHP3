<!DOCTYPE html>
<html>
<head>
    <title>Pizza</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Mayorga Pizza Shoppe</h1>
	<form action="display_results.php" method="GET">
            <fieldset>
		<legend>Customer Information</legend>
					
                    <label>Phone Number:</label>
                    <input type="text" name="phone" value="" class="textbox">
                    <br>
                    <label>Address 1:</label>
                    <input type="text" name="address1" value="" class="textbox">
                    <br>

                    <label>Address 2:</label>
                    <input type="text" name="address2" value="" class="textbox">
                <br>					
            </fieldset>
			
            <br>
            <fieldset>
                <legend>Your Order</legend>
						
                    <p>Select Size</p>
                    <input type="radio" name="size" value="medium">
                    Medium $7.00<br>
                    <input type="radio" name="size" value="large">
                    Large $9.00<br>
                    <input type="radio" name="size" value="family">
                    Family $12.00<br>
				
                <br>
                    <p>Toppings ($1.25 ea.)</p>
                    <br>
                    <input type="checkbox" name="toppings[]" value="Pepperoni">
                    <label>Pepperoni</label>
                    <br>
                    <input type="checkbox" name="toppings[]" value="Sausage">
                    <label>Sausage</label>
                    <br>
                    <input type="checkbox" name="toppings[]" value="Mushrooms">
                    <label>Mushrooms</label>
                    <br>
                    <input type="checkbox" name="toppings[]" value="Olives">
                    <label>Olives</label>
                    <br>
                    <input type="checkbox" name="toppings[]" value="Peppers">
                    <label>Peppers</label>
                    <br>
                    <input type="checkbox" name="toppings[]" value="Anchovies">
                    <label>Anchovies</label>
                <br>
					
                <br>
                    <p>Other items ($1.50 ea.)</p> <br>
                    <select name="others[]" multiple = "multiple" size = "3">
                        <option value="Dip"> Dip </option>
                        <option value="Cheese sticks"> Cheese sticks </option>
                        <option value="Soda"> Soda </option>
                    </select>
					
                <br><br>
                    <label> Special Requests </label> <br>
                    <textarea name="special" rows="4" cols="50"></textarea>
						
            </fieldset>
            <br>
            <input type="submit" name="button">
        </form>
    </main>
</body>
</html>
