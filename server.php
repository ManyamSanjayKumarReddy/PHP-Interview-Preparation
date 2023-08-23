<!DOCTYPE html>
<html>
<head>
    <title>Server Info</title>
</head>
<body>
    <h1>Server Information</h1>
    <p>PHP Self: <?php echo $_SERVER['PHP_SELF']; ?></p>
    <p>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></p>
    <p>Request Method: <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
    <p>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></p>
    <p>User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
    <p>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
    <p>Referrer: <?php echo $_SERVER['HTTP_REFERER']; ?></p>
</body>
</html>


<!-- When you access this script in your browser, it will display various pieces of information about the server and the current request.

Keep in mind that information in the `$_SERVER` array can vary depending on the server configuration and the environment in which your PHP code is running. It's a valuable tool for obtaining context about the current script execution and request details. -->