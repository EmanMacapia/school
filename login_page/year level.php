<?Php
    if(isset($_POST["submit1"])){
        header('location:dashboard/section.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College of Engineering</title>
    <link rel="stylesheet" href="year level.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <form action="" method="post">
                <h1>College of Engineering</h1>
                <div class="box1">
                    <button class="" name="submit1">1ST YEAR</button> 
                    <button class="">2ND YEAR</button>
                    <button class="">3RD YEAR</button>
                    <button class="">4TH YEAR</button>
                </div>
				<a href="logout.php" class="btn btn-warning" style=" margin-left: 220px; ,">
					Logout
				</a>
            </form>
            
        </div>
        
    </div>
    <div id="particles-js"></div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    

</body>
</html>