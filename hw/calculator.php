<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CALCULATOR</title>
</head>
<body>
	
	<?php
		
		function calculator(){

				if(isset($_POST['submit'])){
				$num_one = $_POST['num1'];
				$num_two = $_POST['num2'];
				$result_one = $num_one+$num_two;
				$result_two = $num_one-$num_two;
				$result_three = $num_one*$num_two;
				$result_four = $num_one/$num_two;
				$num_operator = $_POST['operator'];


				switch($num_operator){
				case 'none':
				return "Please select any Operator.";
				break;

				case 'add':
				return "Result is:" . $num_one.'+'. $num_two.'='.$result_one;
				break;

				case 'substract':
				return "Result is:" . $num_one.'-'. $num_two.'='.$result_two;
				break;

				case 'multi':
				return "Result is:" . $num_one.'*'. $num_two.'='.$result_three;
				break;

				case 'divi':
				return "Result is:" . $num_one.'/'. $num_two.'='.$result_four;
				break;

				default:
				echo "Invalid";
				}
				}	
		}

		echo calculator();


	?>

	<form action="" method="post">
		<table>
			<tr>
				<td>number</td>
				<td><input type="text" name="num1" required></td>
			</tr>
			<tr>
				<td>number</td>
				<td><input type="text" name="num2" required></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<select name="operator" id="">
						<option value="none">none</option>
						<option value="add">add</option>
						<option value="substract">substract</option>
						<option value="multi">multi</option>
						<option value="divi">divi</option>
					</select>
			</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Equal"></td>
			</tr>
		</table>
	</form>
</body>
</html>