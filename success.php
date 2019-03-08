<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/jpb8vfFinalProjectSuccess.css">
    
    <title>DA BEARS</title>
<style>
    

</style>
</head>
<body>

<?php
    
////public function __construct(){
//    session_start();
//    
//}
//	if($SESSION['logStatus'] === 'false'){
//        header("Location : jpb8vfFInalProjectLI.php");
//        exit;
//    }
//        
    
    


	// Every time we want to access $_SESSION, we have to call session_start()
//	if(!session_start()) {
//		header("Location: error.php");
//		exit;
//	}
//	
//	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
//	if (!$loggedIn) {
//		header("Location: jpb8vfFInalProjectLI.php");
//		exit;
//	}

    
    
$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

if(!$username) {
    header("Location : jpb8vfFInalProjectLI.php");
    exit;
}

?>
<!DOCTYPE html>
<!-- Created by Professor Wergeles for CS2830 at the University of Missouri -->
<html>
<head>
	<title>Page 1</title>
    <link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
</head>
<body>
    <div class="ui-widget pageWidget">

        
<nav>
<ul>
<table class="navbar">
<tr>
<td class="home"><li><a href="index.html">HOME</a></li></td>   
<td class="roster"><li><a href="jpb8vfFinalProjectRoster.html">ROSTER</a></li></td>
<td class="ppg"><li><a href="jpb8vfFinalProjectppg.html">PLAYER PER POSITION GENERATOR</a></li></td>
<td class="history"><li><a href="jpb8vfFinalProjecthistory.html">HISTORY</a></li></td> 
<td class="fs"><li><a href="jpb8vfFinalProjectFS.html">FIGHT SONG</a></li></td>
<td class="li"><li><a href="jpb8vfFInalProjectLI.php">MEMBERS ONLY</a></li></td>        
</tr>
</table>
</ul>        
</nav> 
        
        
        
        <h2 class="ui-widget-header">CONTACT THE AUTHOR OF THE WEBAPP</h2>
        <div class="ui-widget-content">
<!--
            <p>This is a page containing protected content.</p>
            <p>You must be logged in to view this page.</p>
           
-->
            
            <h2>Send e-mail to jpb8vf@mail.missouri.edu:</h2>

<form action="mailto:someone@example.com" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name"><br>
E-mail:<br>
<input type="text" name="mail"><br>
Comment:<br>
<input type="text" name="comment" size="50"><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>

            
            
            
            <p><a href='logout.php'>Logout</a></p>
        </div>
    </div>
 
        
        
        
        

</body>
</html> 