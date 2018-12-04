<!DOCTYPE html>
<html>
    <head>
        <title>HireMe Job Hub</title>
        <meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,700" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
		<script src="hireme.js" type="text/javascript"></script>
    </head>
    
    <body>
    <div id="all">
        <header id="header">
            <h1>HireMe</h1>
        </header>
        
        <div id="contain">
            <nav id="nav">
                <a class="home" href="dashboard.php"><img id="icon" class="home" src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Home_icon_black.png" alt="homepage icon"> Home</a>
                <a class="add" href="addnewuser.php"><img id="icon" class="add" src="https://img.icons8.com/metro/1600/add-user-male.png" alt="add user icon"> Add User</a>
                <a class="new" href="postjob.php"><img id="icon" class="new" src="https://sonaesierracms-v2.cdnpservers.net/wp-content/uploads/sites/16/2015/01/Safety_Tips.png" alt="new job icon"> New Job</a>
                <a class="exit" href="logout.php"><img id="icon" class="exit" src="https://png.pngtree.com/svg/20161129/a_logout_257817.png" alt="logout icon"> Logout</a>
            </nav>
            
            <main id="main">
                <?php include 'home.php'; ?>
            </main>
        </div>
        
    </div>
    </body>
</html>