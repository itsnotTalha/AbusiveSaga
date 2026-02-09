<form action="" method="POST">
	<label for="">Number of people </label>
	<input type="number" name="numPeop" id=""> <br>
	<label for="">Seat cap </label>
	<input type="number" name="seat" id="">
	<br>
	<label for="">Ticket Price</label>
	<input type="number" name="price" id="">
	<br>
	<button>Submit</button>
</form>

<?php
	$n = $_POST['numPeop'];
	$s = $_POST['seat'];
	$p = $_POST['price'];

	$screenNeed = ceil($n/$s);

	$seatRem = ($screenNeed*$s - $n);
	$wasted = $seatRem*$p;

	echo "Total Screens " . $screenNeed . "<br>Empty Seat " . $seatRem . "<br> Wasted " . $wasted;
?>