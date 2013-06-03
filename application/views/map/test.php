<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<base href="<?php echo base_url();?>" />

    <title>Jquery and php</title>
     <script type="text/javascript" src="js/jquery.js"></script>
    
</head>

<body>
	<p>Hello World!</p>
	<p class="foo">Another paragraph, but this one has a class.</p>
	<p>
		<span>This is a span inside a paragraph.</span>
	</p>
	<p id="bar">
		Paragraph with an id.<span class="foo">And this sentence is in a span.</span><span id="next">nothing</span>
	</p>
	<form action="#" method="post">
		<fieldset>
		<legend>Sign Up Form</legend> 
		<label for="name">Name</label><br />
		<input name="name" id="name" type="text" /><br />
		
		<label for="password">Password</label><br />
		<input name="password" id="password" type="password" /><br />
		<br />
		<label> 
			<input type="radio" name="loc" /> I'm on my computer 
		</label><br />
		<label> 
			<input type="radio" name="loc" checked="checked" /> 
			I'm on a shared computer 
		</label><br />
		<br />
		<input type="submit" value="Log In" /><br />
		<label> 
			<input type="checkbox" name="notify" disabled="true" /> 
			Keep me signed in on this computer 
		</label><br />
		</fieldset>
	</form>
</body>
</html>