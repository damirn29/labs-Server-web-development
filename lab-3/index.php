<!DOCTYPE html>
<html>
<head>
	<title>Решение уравнений</title>
</head>
<body>
	<h1>Решение уравнений</h1>
	<form method="post">
		<label>Введите уравнение:</label>
		<input type="text" name="equation">
		<button type="submit">Решить</button>
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$equation = $_POST['equation'];

		$pattern = '/([\d\w]+)\s*([\+\-\*\/])\s*([\d\w]+)\s*=\s*([\d\w]+)/';
		preg_match($pattern, $equation, $matches);

		// $matches содержит массив с найденными совпадениями
		$operand1 = $matches[1];
		$operator = $matches[2];
		$operand2 = $matches[3];
		$result = $matches[4];

		if (strpos($operand1, 'x') !== false) {
			if ($operator === '+') {
				$x = $result - $operand2;
			} elseif ($operator === '-') {
				$x = $result + $operand2;
			}
		} elseif (strpos($operand2, 'x') !== false) {
			if ($operator === '+') {
				$x = $result - $operand1;
			} elseif ($operator === '-') {
				$x = $operand1 - $result;
			}
		}elseif (strpos($result, 'x') !== false) {
			if ($operator === '+') {
				$x = $operand1 + $operand2;
			} elseif ($operator === '-') {
				$x = $operand1 - $result;
			}
		}
         else {
			echo "Неизвестная переменная не найдена в уравнении.";
			exit;
		}

		echo "x = $x";
	}
	?>
</body>
</html>
