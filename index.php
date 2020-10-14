<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include 'Person.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] = "POST") {
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];
    $postion = $_REQUEST['position'];

    $personalarr = [];
    $newperson = new Personal($firstname, $lastname, $dob, $address, $postion);
    echo $newperson->getFirstname();
    echo $newperson->getLastname();
    echo $newperson->getDob();
    echo $newperson->getAddress();
    echo $newperson->getPositon();
    array_push($personalarr, $newperson);
}
?>
<form method="post">
    <input type="text" name="firstname" placeholder="Fisrt name">
    <input type="text" name="lastname" placeholder="Last name">
    <input type="text" name="dob" placeholder="D.O.B">
    <input type="text" name="address" placeholder="Address">
    <input type="text" name="position" placeholder="Position">
    <input type="submit" value="Add">
</form>
<table style="text-align: center" width="800px" border="1px" cellspacing="0px">
    <caption><h2>Personel Manange</h2></caption>
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Date of Birth</td>
        <td>Address</td>
        <td>Position</td>
    </tr>
    <?php foreach ($personalarr as $value): ?>
        <tr>
            <td><?php echo $value->getFirstname() ?></td>
            <td><?php echo $value->getLastname() ?></td>
            <td><?php echo $value->getDob() ?></td>
            <td><?php echo $value->getAddress() ?></td>
<!--            <td>--><?php //echo $value->getPosition()?><!--</td>-->
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>