<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
include'../database/connection.php';

    $email = $_POST['email'];
    $membership = $_POST['membership'];
    $date = date('Y-m-d');

    $stmt = $conn ->prepare('SELECT MembershipID FROM Membership WHERE Name = ?');
    $stmt ->bind_param('s', $membership);
    $stmt -> execute();
    $result = $stmt->get_result();

    if($row = $result->fetch_assoc()){
        $membershipID = $row['MembershipID'];

        $stmt = $conn->prepare('UPDATE User SET MembershipID = ?, MembershipStartDate = ? WHERE Email = ?');
        $stmt ->bind_param('iss', $membershipID, $date , $email );

        if (mysqli_stmt_execute($stmt)) {
            header('Location: ./membership.php?success=Membership+Added+Successfully');
        } else {
            header('Location: ./pay.php?error=Membership+Adding+Failed');
        }
    }else{
        header('Location: ./pay.php?error=Membership+id+not+found');
    }
}else{
    header('Location: ./pay.php?error=Server+error');
}
?>