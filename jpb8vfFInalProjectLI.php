<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/jpb8vfFInalProjectLI.css">
    <title>DA BEARS</title>
    
    <style>
       
    
<!--

	<link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
-->
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>

</style>
</head>
<body>
    <div id="loginWidget" class="ui-widget">
        
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
        
        
        
        <h1 class="ui-widget-header">Members Only</h1>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
        <form action="login.php" method="POST">
           <div class="container"> 
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <input class="b" type="submit" value="Submit">
            </div>
            </div>
        </form>
    </div>
</body>
</html>