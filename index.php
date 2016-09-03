<?php




?>


<html>
	<head>
		<link href="assets/CSS/style.css" rel="stylesheet"/>
		<script src="assets/JS/functions.js"></script>

	</head>
	<body>

		<div class="container">
			<div class="title">
				RESTFull Web Services
			</div>
			<div class="main">
<h2 class="center">Equation Formula : ax<sup>2</sup> + bx + c</h2>
				<h3>Send Data Using GET</h3>

				<!-- <form action="index.php" method="get"> -->
					<table>

						<tr>
							<td>Enter a Value : </td><td>
								<input id="aVal" placeholder="Type a value" type="text"/>
							</td>
						</tr>
						<tr>
							<td>Enter b Value : </td><td>
								<input id="bVal" placeholder="Type b value" type="text"/>
							</td>
						</tr><tr>
							<td>Enter c Value : </td><td>
								<input id="cVal" placeholder="Type c value" type="text"/>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" id="submitGET" onclick="getFunction1();"/>
							</td>
						</tr>
						<tr>
							<td>
								Result :
							</td>
							<td>
								<p id="result1"></p>
							</td>
						</tr>
					</table>
				<!-- </form> -->

<hr>

<h3>Send Data Using POST</h3>

	<table>

		<tr>
			<td>Enter a Value : </td><td>
				<input id="aVal_" placeholder="Type a value" type="text"/>
			</td>
		</tr>
		<tr>
			<td>Enter b Value : </td><td>
				<input id="bVal_" placeholder="Type b value" type="text"/>
			</td>
		</tr><tr>
			<td>Enter c Value : </td><td>
				<input id="cVal_" placeholder="Type c value" type="text"/>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" id="submitGET" onclick="getFunction2();"/>
			</td>
		</tr>
		<tr>
			<td>
				Result :
			</td>
			<td>
				<p id="result2"></p>
			</td>
		</tr>
	</table>


</div>


		</div>









	</body>


</html>
