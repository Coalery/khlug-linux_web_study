<!DOCTYPE html>

<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
			<?php
				if(isset($_POST['submit']))
				{
					if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
					{
						if($_POST['operation'] == 'plus')
						{
							$total = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == 'minus')
						{
							$total = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == 'multiply')
						{
							$total = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == 'divided by')
						{
							$total = $_POST['number1'] / $_POST['number2'];	
						}
						if($_POST['operation'] == 'squared by') {
							$total = $_POST['number1'] ** $_POST['number2'];
						}
						
						echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
					
					} else if(is_numeric($_POST['number3'])) {
						if($_POST['operation2'] == 'square root') {
							$total2 = sqrt($_POST['number3']);
						}
						if($_POST['operation2'] == 'inverse') {
							$total2 = 1 / $_POST['number3'];
						}
						echo "<h1>{$_POST['number3']} {$_POST['operation2']} equals {$total2}</h1>";
					} else {
						echo 'Numeric values are required';
					}
				}
			?>

		    <form method="post" action="calculator.php">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
		            <option value="multiply">Multiply</option>
		            <option value="divided by">Devide</option>
		            <option value="squared by">Square</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>

		    <form method="post" action="calculator.php">
		        <input name="number3" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation2">
		            <option value="square root">SquareRoot</option>
		        </select>
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>