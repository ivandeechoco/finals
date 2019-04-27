<?php
 
if(isset($_POST['submit'])):
    include_once 'db.inc';
    $stmt = $dbh->prepare("INSERT INTO student (fullname, studid,email,honor) VALUES (:fullname, :studid, :email, :honor)");
    $stmt->bindParam(':fullname', $_POST['fullname']);
    $stmt->bindParam(':studid', $_POST['studid']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':honor', $_POST['honor']);
    $stmt->execute();
    $base_url =$_SERVER['HTTP_HOST'];
    $view_url = $base_url .'/finals/';
try {

        $base_url =$_SERVER['HTTP_HOST'];

        $view_url = $base_url .'/finals/success.php';
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];

        $body = "This is to notify you that a new applciation has been submitted <br><br> <a href='$view_url'>CLICK HERE</a> ";

        $to = "ivandeechoco@hotmail.com"; // <– replace with your address here
        $subject = "New Application Submitted";
        $message = $body;
        $from = "submissions@apc.edu.ph";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:" . $from;
        if(mail($to,$subject,$message))
        {
            echo json_encode(array('error' => 'success'));
//            echo json_encode($data);
        }
        else
        {
            echo json_encode(array('error' => '1'));
        }

        $body1 = "Hi $fullname <br><br> &nbsp;&nbsp; Thank you for sending your application or the latin awards, this email is to confirm that we received it. <br><br><br>Thank you. <br><br>Asia Pacific College";

        $to1 = $email; // <– replace with your address here
        $subject1 = "Confirmation Email: Application for Latin Awards";
        $message1 = $body1;
        $from1 = "submissions@apc.edu.ph";
        $headers1 = "MIME-Version: 1.0" . "\r\n";
        $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers1 .= "From:" . $from1;
        if(mail($to1,$subject1,$message1))
        {
            echo json_encode(array('error' => 'success'));
//            echo json_encode($data);
        }
        else
        {
            echo json_encode(array('error' => '1'));
        }
    } catch (Exception $e) {
        echo $e->getMessage();die();
    }
    sleep(3);
//    header('Location: success.php');
endif;
?>
<html>
<head>
    <title> Application Form </title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="home">
        <a href="<?php $view_url?>"><img src="https://online.apc.edu.ph/flavio/inquiry/images/apclogo.png" class="home_logo"></a>
        <h2 class="title"> Application for Latin Awards</h2>
        <p class="subtitle"> Summa Cum Laude, Magna Cum Laude, Cum Laude</p>
        <hr/>

        <form method="post" action="index.php" onsubmit="$('.loading').show();">
            <input type='text' name='fullname' value='' id="fullname" placeholder=" Full Name" class="form_input" required>
            <input type='text' name='studid' value='' id="studid" placeholder=" Student Id" class="form_input" required>
            <input type='email' name='email' value='' id="email" placeholder=" Email" class="form_input" required>
            <select class="form_input" name="honor" required>
                <option value="" disabled selected>Latin Honor</option>
                <option value="summa cum laude">Summa Cum Laude</option>
                <option value="magna cum laude">Magna Cum Laude</option>
                <option value="cum laude">Cum Laude</option>
            </select>
            <button id="button-submit" type="submit" name="submit" class="btn-primary">Submit</button>
            <small>For School Year 2018-2019</small>
        </form>
    </div>

    <div class="loading">
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

