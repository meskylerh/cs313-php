<?php include 'header.php';?> 

<form name="request" action="./submit_request.php" method="POST">
	<fieldset>
		<label>Band Name:</label>
		<input required type="text" name="band-name" placeholder="Band Name" />
	</fieldset>
	<fieldset>
		<label>Genre:</label>
		<select required name="genre">
			<option value="" selected>--Choose Genre--</option>
			<option value="country">Country</option>
			<option value="metal">Metal</option>
			<option value="rock">Rock</option>
			<option value="disco">Disco</option>
			<option value="pop">Pop</option>
		</select>
	</fieldset>
	<fieldset>
		<label>Date/Time:</label>
		<input required type="date" name="show-date"/>
		<input required type="time" name="show-time"/>
	</fieldset>
	<button type="submit">Submit</button>
</form>

<?php include 'footer.php'; ?>