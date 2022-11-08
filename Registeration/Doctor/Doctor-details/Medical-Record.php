<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Medical Record</title>
		<link rel="stylesheet" href="medical-record.css">
    </head>

<body style=background-image:url(../../patient/patient-log/imgs/files.jpg)>
		<form name="Form " action="../Dashboard Doctor Screen.html" method="GET ">
<fieldset>
				<legend>Medical Record</legend>
				<h4>Last and New information about patient </h4>
				<label>Create New medical Record</label>
			    <input type="checkbox">
                <br>
                <label>Load Patient History</label>
			    <input type="checkbox">
                <br>
		        <br>
            <label>Upload Patient results</label>
			<input type="file">
			<br>
			<br>
			<input type="Reset" value="Restore Default">
				<hr>
				<label class="df">Doctor's Feedback</label><br>
			<textarea rows="5" cols="40">Write Patient progress</textarea>
			<br>
			<br>
			<input type="submit" value="Save Information" >
			</fieldset>	
    </form>
    </body>
</html>