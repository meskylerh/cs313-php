<?php include 'header.php'; 

echo '<form name="request" action="./submit_request.php" method="POST">
	<fieldset>
		<label>Band Name:</label>
		<input required type="text" name="band-name" placeholder="Band Name" />
	</fieldset>
	<fieldset>
		<label>Genre:</label>
		<select required id="genre">
			<option value="" selected>--Choose Genre--</option>
			<option value="Country">Country</option>
			<option value="Metal">Metal</option>
			<option value="Rock">Rock</option>
			<option value="Disco">Disco</option>
			<option value="Pop">Pop</option>
		</select>
	</fieldset>
	<fieldset>
		<label>Date/Time:</label>
		<input required type="date" id="show-date"/>
		<input required type="time" id="show-time"/>
	</fieldset>
	<button type="submit">Submit</button>
</form>';

 include 'footer.php'; 
?>