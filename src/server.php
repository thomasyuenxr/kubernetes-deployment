<?php

session_start();
// $username = "";
// $password = "";
$error = array();

$servername = "mysql";
$username = "root";
$password = "root";

// Create connection
$db = mysqli_connect($servername, $username, $password);


// Enter your host name, database username, password, and database name.
// If you have not set database password on localhost then set empty.
// $db = mysqli_connect("root","root","infs3208");

    
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// REGISTER USER
if (isset($_POST['user_register'])) {
    // receive all input values from the register form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "INSERT INTO user (username, password) 
  			  VALUES('$username', '$password')";

    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    header('location: login.php');
}

// LOGIN USER
if (isset($_POST['user_login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	    $_SESSION['username'] = $username;
        $_SESSION["loggedIn"] = TRUE;
        // header('location: www.google.com');
        header('location: book.php');

    } else{
    header('location: login.php');
    }
}

// BOOKING
if (isset($_POST['submit_booking'])) {
    // $username = $_SESSION['username'];
    $guestname = mysqli_real_escape_string($db, $_POST['guestname']);
    $startdate = mysqli_real_escape_string($db, $_POST['startdate']);
    $enddate = mysqli_real_escape_string($db, $_POST['enddate']);
    $guestnumber = mysqli_real_escape_string($db, $_POST['guestnumber']);


    $query = "INSERT INTO booking ( guestname, startdate, enddate, guestnumber) 
  			  VALUES('$username', '$guestname', '$startdate', '$enddate', '$guestnumber')";

    mysqli_query($db, $query);
    
}

function display_data($data) {
    $output = "<table>";
    foreach($data as $key => $var) {
        //$output .= '<tr>';
        if($key===0) {
            $output .= '<tr>';
            foreach($var as $col => $val) {
                $output .= "<td>" . $col . '</td>';
            }
            $output .= '</tr>';
            foreach($var as $col => $val) {
                $output .= '<td>' . $val . '</td>';
            }
            $output .= '</tr>';
        }
        else {
            $output .= '<tr>';
            foreach($var as $col => $val) {
                $output .= '<td>' . $val . '</td>';
            }
            $output .= '</tr>';
        }
    }
    $output .= '</table>';
    echo $output;
}


?>