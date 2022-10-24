<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNDERSEA CLUB ONLINE BOOKING</title>


    <!-- Stylesheets-->
    <!-- NORMALIZE FIRST-->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- THEN CUSTOM STYLES SECOND-->
    <link rel="stylesheet" href="css/style.css">
    <!-- date picker js plugin stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/pikaday.css">
    

    <!-- Fonts-->
    <link href="http://fonts.cdnfonts.com/css/a-love-of-thunder" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/furore" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/banksia" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/x-heighting" rel="stylesheet">
           

</head>

<body>
    <nav class="nav">
        <a href="index.html" id="nav_logo">
            <img src="images/logo.png" alt="logo" id="logo">
        </a>
        <a href="about.html" class="nav_item">ABOUT</a>
        <a href="activities.html" class="nav_item">ACTIVITIES</a>
        <a href="book.html" class="nav_item" id="current_item">BOOKING ONLINE</a>
        <a href="membership.html" class="nav_item">MEMBERSHIP</a>
        <a href="souvenir.html" class="nav_item">SOUVENIR</a>
        <a href="comments.html" class="nav_item">COMMENT</a>
        <a href="contact.html" class="nav_item">CONTACT</a>
        <a href="index.html" class="nav_item">LOGOUT</a>
        
    </nav>

    



    <section class="booking-all">
        

        <div class="booking-info">

            <div id="booking-header">
                <h1>WE ARE ALL LOOKING FOR YOUR VISITING!</h1>
                <h1>BOOK NOW!</h1>
            </div>

            <form class="booking-form" action="book.php" method="post">
                <span>
                    <label>Name</label>
                    <input type="text" name="guestname" class="booking-text" id="name-input" placeholder="Please enter your name">
                </span>
                
                <span>
                    <label>From</label>
                    <input type="text" name="startdate" id="datepicker1" placeholder="Check-in date">
                </span>
                
                <span>
                    <label>To</label>
                    <input type="text" name="enddate" id="datepicker2" placeholder="Check-out date">
                </span>
                
                <span>
                    <label>Guest No.</label>
                    <select id="guest-num" name="guestnumber">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </span>
                

                <button type="submit" name="submit_booking" id="booking-btn">BOOK NOW</button>
                
            </form>

            <?php 
            $query = "SELECT * FROM booking";

            $result = mysqli_query($db, $query);

            display_data($result);

            // echo $result;
            ?>
        </div>

    </section>

    <footer>
        <p>links to our sections</p>
        <a href="index.html" class="nav_item">HOMEPAGE</a>
        <a href="about.html" class="nav_item">ABOUT</a>
        <a href="activities.html" class="nav_item">ACTIVITIES</a>
        <a href="book.html" class="nav_item">BOOK</a>
        <a href="membership.html" class="nav_item">MEMBERSHIP</a>
        <a href="souvenir.html" class="nav_item">SOUVENIR</a>

        <a href="comments.html" class="nav_item">COMMENT</a>

        <a href="contact.html" class="nav_item">CONTACT</a>

        <p>xiwei.ruan@uqconnect.edu.au</p>
        
    </footer>

    <script src="js/script.js"></script>

    <!-- pick date JavaScript Plugin -->
    <!-- download from  https://github.com/Pikaday/Pikaday -->
    <script src="js/pikaday.js"></script>
    <script>
        var picker = new Pikaday({ field: document.getElementById('datepicker1') });
        var picker = new Pikaday({ field: document.getElementById('datepicker2') });
    </script>
</body>






