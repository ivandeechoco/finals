<?php
$base_url =$_SERVER['HTTP_HOST'];
$view_url = $base_url .'/index.php';
?>

<html>
    <head>
        <title> Application Form </title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="home">
          <a href="/index.php"><img src="https://online.apc.edu.ph/flavio/inquiry/images/apclogo.png" class="home_logo"></a>
            <h2 class="title">Thank you for submitting your application</h2>
            <p class="subtitle success-subtitle"> For more information, Please visit the APC Registrar</p>
            <hr class="hr-success"/>
            <div class="success">
                <div class="success-checkmark">
                    <div class="check-icon">
                        <span class="icon-line line-tip"></span>
                        <span class="icon-line line-long"></span>
                        <div class="icon-circle"></div>
                        <div class="icon-fix"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
