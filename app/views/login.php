<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="<?=baseURL?>/login/authenticate" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>