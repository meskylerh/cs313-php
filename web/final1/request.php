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
			<option value="Country">Country</option>
			<option value="Metal">Metal</option>
			<option value="Rock">Rock</option>
			<option value="Disco">Disco</option>
			<option value="Pop">Pop</option>
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