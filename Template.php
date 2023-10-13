<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="ses.php">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="notice.php">Notice</a></li>
                    <li><a href="#">About</a></li>
                    
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>SES copyright © 2023 all rights reserved
                
                </p>
            </footer>
        </div>
    </body>
</html>
