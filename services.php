<?php

    // $host='localhost';
    // $username='root';
    // $password='';
    // $dbname = "enquiry";
    // $conn=mysqli_connect($host,$username,$password,"$dbname");

    // if(!$conn)
    //     {
    //       die('Could not Connect MySql Server:' .mysql_error());
    //     }
    //     else{

    
    //     $pass = isset($_POST['password']) ? $_POST['password'];
    //     $memo = mysqli_real_escape_string($conn, $_REQUEST['memo']);
    //     $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
    //     $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    //     $number = mysqli_real_escape_string($conn, $_REQUEST['number']);

    //     }

    //     // Attempt insert query execution
    //     $sql = "INSERT INTO persons (name, memo, email, number) VALUES ('$memo','$number', '$name', '$email')";
    //     if(mysqli_query($conn, $sql)){
    //         echo "Records added successfully.";
    //     } else{
    //         echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    //     }

    //     // Close connection
    //     mysqli_close($conn);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Trust Websites and Development| Services</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">DRIP</span> Web Design</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="current"><a href="services.php">Services</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="newsletter">
        <div class="container">
            <h1>Subscribe To Our Newsletter</h1>
            <form>
                <input type="email" placeholder="Enter Email...">
                <button type="submit" class="button_1">Subscribe</button>
            </form>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Services</h1>
                <ul id="services">
                    <li>
                        <h3>Website Design</h3>
                        <p><strong>Amount</strong></p>
                        <p>Pricing: $1,000 - $3,000</p>
                    </li>
                    <li>
                        <h3>Website Maintenance</h3>
                        <p><strong>Amount</strong></p>
                        <p>Pricing: $250 per month</p>
                    </li>
                    <li>
                        <h3>Website Hosting</h3>
                        <p><strong>Amount</strong></p>
                        <p>Pricing: $25 per month</p>
                    </li>
                </ul>
            </article>

            <aside id="sidebar">
                <div class="dark">
                    <h3>Enquiries</h3>
                    <div class="container">
                        <form name="enquiry" method="POST" action="" id="here" onsubmit="return false">
                            <label for="name">Name</label><br>
                            <input type="text" id="name" name="name" title="Your name"><br>
                            <label for="number">Number</label><br>
                            <input type="text" name="number" title="Your phone number"><br>
                            <label for="email">Email</label><br>
                            <input type="email" name="email" id="email" title="Your email"><br>
                            <label for="memo">Enquiry</label><br>
                            <textarea name="memo" type="text" id="memo" cols="30"  rows="8" title="Your enquiry"></textarea><br>
                            <input type="submit" value="Submit" title="Submit Enquiry">
                    </div>
                    <script src="validation.js"></script>
                    </form>
                </div>
            </aside>
        </div>
    </section>

    <footer>
        <p>Trust Websites and Development , Copyright &copy; 2020</p>
    </footer>
</body>

</html>