<html>
<head>
	<title> BIJIKERS INDONESIA : Situs Penjualan Biji-biji Kopi Indonesia</title>
	<link rel="icon" href="logo.jpg">
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div id="main">
	<form method = "post" action="aksi_form.php">
	<table border="0" cellspacing="50">
		<tr>
		  <td>
			<div id="title">LOGIN</div>
			<hr size="1px" width="100px" color="black"/>
		  </td>
		</tr>
		<tr>
		  <td>
		    <input name="nama" type="text" placeholder="USERNAME" id="in"/>
		  </td>
		</tr>
		<tr>
		  <td>
			<input name="password" type="password" placeholder="PASSWORD" id="in"/>
		  </td>
		</tr>
		<tr>
		  <td align="center">
			<button id="signInBtn">
			LOGIN</button>
		  </td>
		</tr>
		<tr>
		  <td align="center">
		    <div id="noAccount"> DON'T HAVE AN ACCOUNT <a href="#formreg" id="flipToReg">REGISTER</a> </div>
		  </td>
		</tr>
    </table>
	</form>
	</div>
	
	<div id="formreg">
	<table border="0" cellspacing="10">
		<tr>
		  <td>
			<div id="title">REGISTER ACCOUNT</div>
			<hr size="1px" width="100px" color="black"/>
		  </td>
		</tr>
		<tr>
		  <td>
		    <input name="nama" type="text" placeholder="USERNAME"/>
		  </td>
		</tr>
		<tr>
		  <td>
		    <input type="text" placeholder="EMAIL"/>
		  </td>
		</tr>
		<tr>
		  <td>
			<input name="password" type="password" placeholder="NEW/UPDATE PASSWORD"/>
		  </td>
		</tr>
		<tr>
		  <td align="center">
			<button id="signUpBtn" onClick = "alert('Register Account Success!! Log in account for more information!')">
			Register</button>
		  </td>
		</tr>
		<tr>
		  <td align="center">
		    <div id="account"> HAVE AN ACCOUNT <a href="#main" id="flipToSign">LOG IN</a> </div>
		  </td>
		</tr>
    </table>
	</div>
</body>
</html>