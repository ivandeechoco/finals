<?php
include_once 'db.inc';
$sth = $dbh->prepare('SELECT * FROM student');
$sth->execute();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>List of Applicants</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/header.css">
    </head>
    <body>
    <?php include_once 'layout/header.inc';?>
        <h1 style="text-align: center; margin-bottom: 20px; margin-top:10px; font-size:20px;">List of Applicants</h1>
        <table class="table table-striped table-hover" style="width: 80%; margin: auto;">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Student Id</th>
                <th>Email</th>
                <th>Latin Honor</th>
                <th>Application Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)):
                ?>
                <tr>
                    <td style="text-transform: capitalize;"><?= $row['fullname'] ?></td>
                    <td><?= $row['studid'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td style="text-transform: capitalize;"><?= $row['honor'] ?></td>
                    <td style="text-transform: capitalize;"><?= date('F d, Y h:i A', strtotime($row['created_date'])); ?></td>
                </tr>
            <?php
            endwhile;
            ?>
            </tbody>
        </table>

        <?php include_once 'layout/footer.inc' ?>
    </body>
</html>
