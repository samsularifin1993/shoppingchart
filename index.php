<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN</title>
</head>

<body>
<b>LOGIN</b>
<br />
<br />
<form action="do_login.php" method="post">
<table>
	<tr>
    	<td>Username</td>
        <td>:</td>
        <td><input type="text" name="user_text" autocompleter="off" /></td>
    </tr>
    <tr>
    	<td>Password</td>
        <td>:</td>
        <td><input type="password" name="password_text" /></td>
    </tr>
    <tr>
        <td colspan="3"><input type="submit" name="submit" value="LOGIN" /></td>
    </tr>
</table>
</body>
</html>
