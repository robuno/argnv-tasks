<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=Kullanici adini giriniz.");
        exit();
    } else if(empty($pass)) {
        header("Location: index.php?error=Sifreyi giriniz.");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
           
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] == $pass) {
                $SESSION['user_name'] = $row['user_name'];
                $SESSION['name'] = $row['name'];
                $SESSION['id'] = $row['id'];
                header("Location: index.php?error=Giris basarili!");
                exit();
            } else {
                header("Location: index.php?error=Hatali kullanici adi veya sifre!");
                exit();
            }

        } else {
            header("Location: index.php?error=Hatali kullanici adi veya sifre!");
            exit();
        }
    }

} else {
    header("Location: index.php");
    exit();
}

?>