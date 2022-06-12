
<!DOCTYPE HTML>
<html>  

<head>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container" id="container" >	

<div class="form-container sign-in-container">
	
<form action="{{route('login')}}" method="post">
	@csrf
<h1 style="align:center;"> Connectez-vous </h1> <br>
	<tr>
		<td>
login       :
</td>
<td>
<input type="text" name="login" value=<?php $login ?>><br>
</td>
</tr>
<tr>
	<td>
Mot de passe: </td>
<td><input type="password" name="password" value=<?php $passwd ?>><br></td>
<br>
</tr>

<tr>
	<td>
		
<button type="submit" name="signin" value="sign in" >Sign in </button>

</td>









</tr>
</div>
</form>
</table>

<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button  id="signIn">Sign In</button>
				
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button  id="signUp"><a href="formsignup.php">Sign Up</button></a>
			</div>
		</div>
	</div>


</div>
</body>
</html>

