<!DOCTYPE html>
<html lang="en" >
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="73436_woody_icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link href="login_page.css" rel="stylesheet">

<div class="box-form">
	<div class="left">
		<div class="overlay">
		    <span class="welc_woody"><h1>Welcome to Woody.org</h1></span>
		    <p>Start to learn how to protect yourself now!</p>
		</div>
	</div>
	
	
	<div class="right">
        <form action="authenticate.php" method="post">
           <h5>Login</h5>
            <pre>                                                            </pre> 
            <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>
        
            <?php } ?>
            <div class="inputs">
                <input type="text" placeholder="Username" name="Username" required>
                <br>
                <input type="password" placeholder="Password" name="Password" required>
            </div>
                
            <br>

            <button class="learn-more">
                <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
                </span>
                <span class="button-text">Log In</span>
            </button>
                
            <br><br>
            <div class="remember-me--forget-password">
                <a href="Homepage.html"><p>Enter as Guest</p></a>
                <p>Don't have an account? <a href="registration.php">Create Your Account</a></p>
            </div>
                
        </form>

	</div>
	
</div>
  
</body>
</html>
