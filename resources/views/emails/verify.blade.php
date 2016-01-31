<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Email Verification</h2>

<div>
    You have a new Registration Request. Click here to complete registration :
    <a href="localhost/profile/{!! $token !!}/verify" class="button"><button>Verify</button></a> 
</div>
<div>
	Or open this url :
	<br>
	<a href="localhost/profile/{!! $token !!}/verify">localhost/profile/{!! $token !!}/verify</a>
</div> 
    
</body>
</html>