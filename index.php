<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>rk11 Calculator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<script>
		function calcNumbers(result){
			form.displayResult.value = form.displayResult.value+result;
		}
		function clr(){
			form.displayResult.value = "";
		}
		function del(){
			form.displayResult.value = form.displayResult.value.substring(0,form.displayResult.value.length - 1);
		}
	</script>
	<div class="container">
		<form name="form">
			<div class = "output">
				<input type="text" name="displayResult" placeholder="Hello World">
			</div>
			<div class="buttons">
				<div class="row">
					<input type="button" name="btnCnl" value="del" onClick="del()">
					<input type="button" name="btnDiv" value="/" onClick = "calcNumbers(btnDiv.value)">
					<input type="button" name="btnMult" value="*" onClick = "calcNumbers(btnMult.value)">
					<input type="button" name="btnClr" value="C" onClick="clr()">
				</div>
				<div class="row">
					<input type="button" name="btn7" value="7" onClick="calcNumbers(btn7.value)">
					<input type="button" name="btn8" value="8" onClick = "calcNumbers(btn8.value)">
					<input type="button" name="btn9" value="9" onClick = "calcNumbers(btn9.value)">
					<input type="button" name="btnSub" value="-" onClick="calcNumbers(btnSub.value)">
				</div>
				<div class="row">
					<input type="button" name="btn4" value="4" onClick="calcNumbers(btn4.value)">
					<input type="button" name="btn5" value="5" onClick = "calcNumbers(btn5.value)">
					<input type="button" name="btn6" value="6" onClick = "calcNumbers(btn6.value)">
					<input type="button" name="btnAdd" value="+" onClick="calcNumbers(btnAdd.value)">
				</div>
				<div class="row">
					<input type="button" name="btn1" value="1" onClick="calcNumbers(btn1.value)">
					<input type="button" name="btn2" value="2" onClick = "calcNumbers(btn2.value)">
					<input type="button" name="btn3" value="3" onClick = "calcNumbers(btn3.value)">
					<input type="button" name="btnMod" value="%" onClick="calcNumbers(btnMod.value)">
				</div>
				<div class="row">
					<input type="button" name="btn0" value="0" onClick="calcNumbers(btn0.value)">
					<input type="button" name="btnComma" value="." onClick = "calcNumbers(btnComma.value)">
					<input type="button" class="green" value="="  onClick="displayResult.value = eval(displayResult.value)">
				</div>
			</div>
		</form>
	</div>
</body>
</html>