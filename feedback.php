<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Reci-Mania</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="footer, address, phone, icons" />
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="css/demo.css">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script  ' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Bellefair  ' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Fresca  ' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Salsa  ' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Acme  ' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kite One  ' rel="stylesheet">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


    <script>
        function validateForm() {
            var x = document.forms["feedback"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
        }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="addStyle.css">
    <style type="text/css">
        

        .bgimg {
            background-image: url('https://i0.wp.com/diplomartbrussels.com/wp-content/uploads/2020/09/food-background-images-94-images-in-co-381169-png-images-pngio-food-background-png-1440_619.png?fit=1440%2C619&ssl=1');
            background-repeat: no-repeat;
            background-size: cover;
        
        }

        .footer-distributed {
            background-color: #292c2f;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;

            padding: 35px 30px;
            margin-top: 10px;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: inline-block;
            vertical-align: top;
        }

        /* Footer left */

        .footer-distributed .footer-left {
            width: 30%;
        }

        /* The company logo */

        .footer-distributed h3 {
            color: #ffffff;
            font: normal 36px 'Cookie', cursive;
            margin: 0;
        }

        .footer-distributed h3 span {
            color: #5383d3;
        }

        /* Footer links */

        .footer-distributed .footer-links {
            color: #ffffff;
            margin: 20px 0 12px;
            padding: 0;
        }

        .footer-distributed .footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }

        .footer-distributed .footer-company-name {
            color: #8f9296;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        /* Footer Center */

        .footer-distributed .footer-center {
            width: 35%;
        }

        .footer-distributed .footer-center i {
            background-color: #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .footer-distributed .footer-center i.fa-envelope {
            font-size: 17px;
            line-height: 38px;
        }

        .footer-distributed .footer-center p {
            display: inline-block;
            color: #ffffff;
            vertical-align: middle;
            margin: 0;
        }

        .footer-distributed .footer-center p span {
            display: block;
            font-weight: normal;
            font-size: 20px;
            line-height: 2;
        }

        .footer-distributed .footer-center p a {
            color: #5383d3;
            text-decoration: none;
            ;
        }


        /* Footer Right */

        .footer-distributed .footer-right {
            width: 20%;
        }

        .footer-distributed .footer-company-about {
            line-height: 20px;
            color: #92999f;
            font-size: 25px;
            font-weight: normal;
            margin: 0;
        }

        .footer-distributed .footer-company-about span {
            display: block;
            color: #000000;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;

        }

        .footer-distributed .footer-icons {
            margin-top: 35px;
        }

        .footer-distributed .footer-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color: #33383b;
            border-radius: 2px;

            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;

            margin-right: 3px;
            margin-bottom: 5px;
        }

        /* If you don't want the footer to be responsive, remove these media queries */

        @media (max-width: 880px) {

            .footer-distributed {
                font: bold 14px sans-serif;
            }

            .footer-distributed .footer-left,
            .footer-distributed .footer-center,
            .footer-distributed .footer-right {
                display: block;
                width: 100%;
                margin-bottom: 10px;
                text-align: center;
            }

            .footer-distributed .footer-center i {
                margin-left: 0;
            }

        }

        .footer-distributed {
            background-color: lightgray;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 35px 30px;
            margin-top: 10px;
        }

        .footer-distributed .footer-links {
            color: black;
            margin: 20px 0 12px;
            padding: 0;
            position: relative;
            left: -101px;
            top: -114px;
            font-size: 25px;
            font-family: Dancing Script;
        }

        .i1 {
            background-color: #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .add {
            font-family: kite one;
            font-size: 35px;
            position: relative;
            top: -39px;
            left: 64px;
            font-size: large;
        }

        .l1 {
            position: relative;
            top: -43px;
            left: 169px;
            /* color: blue; */
        }

        a:-webkit-any-link {
            color: -webkit-link;
            cursor: auto;
        }

        .e1 {
            position: relative;
            top: -59px;
        }

        .dn {
            position: relative;
            top: -100px;
            left: 62px;
            font-size: 21px;
        }

        .p1 {
            color: black;
            font-family: Kite One;
            position: relative;
            top: 10px;
        }

        .r1 {
            position: relative;
            top: 1px;
        }

        .footer-distributed {
            background-color: lightgray;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 35px 30px;
            margin-top: 10px;
            height: 333px;
        }

        .f1 {
            font-family: Acme;
            font-size: 19px;
        }

        .navbar-brand {
            float: left;
            height: 50px;
            padding: 15px 15px;
            font-size: 20px;
            line-height: 20px;
        }

        .f2 {
            font-size: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        nav {
            display: flex;
            padding-top: 10px;
            height: 70px;
            width: 100%;
            background-color: #000000;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }



        nav ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
        }

        nav ul li {
            margin: 0 5px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        nav ul li a.active,
        nav ul li a:hover {
            color: #fff;

            background: #1aff8c;

        }

        nav .menu-btn i {
            color: #fff;
            font-size: 22px;
            cursor: pointer;
            display: none;
        }

        input[type="checkbox"] {
            display: none;
        }

        @media (max-width: 1000px) {
            nav {
                padding: 0 40px 0 50px;
            }
        }

        @media (max-width: 920px) {
            nav .menu-btn i {
                display: block;
            }

            #click:checked~.menu-btn i:before {
                content: "\f00d";
            }

            nav ul {
                position: fixed;
                top: 80px;
                left: -100%;
                background: #111;
                height: 100vh;
                width: 100%;
                text-align: center;
                display: block;
                transition: all 0.3s ease;
            }

            #click:checked~ul {
                left: 0;
            }

            nav ul li {
                width: 100%;
                margin: 40px 0;
            }

            nav ul li a {
                width: 100%;
                margin-left: -100%;
                display: block;
                font-size: 20px;
                transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                text-decoration: none;
            }

            #click:checked~ul li a {
                margin-left: 0px;
            }

            nav ul li a.active,
            nav ul li a:hover {
                background: none;
                color: cyan;
                text-decoration: solid;
            }
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: -1;
            width: 100%;
            padding: 0 30px;
            color: #1b1b1b;
        }

        .content div {
            font-size: 40px;
            font-weight: 700;
        }

        .topphoto {
            width: 100%;
            margin-top: 40px;
            margin-left: 5px;
            margin-bottom: 10px;
            background-repeat: no-repeat;

        }

        input[type="submit"] {
            box-sizing: border-box;

            color: #000000;
            font-size: 30px;
            font-family: 'Inter';

            width: 200px;
            height: 65px;
            font-weight: bold;
            text-align: center;


            background: #7ADD8B;

            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 15px;

        }

        textarea {
            background: url(images/benice.png) center center no-repeat;
            /* This ruins default border */
            border: 1px solid #888;
            border-radius: 10px;

        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            font: 1.25rem / 1.5 sans-serif;
            display: block;
            box-sizing: border-box;
            width: 75%;
            padding: 0.5rem 0.75rem;
        }

        
    </style>
</head>

<body>
    <div class="bgimg">

        <nav style="display:flex;">
            <ul>

                <li><a href="index.php" style="color: white;text-align: center;"> Home</a></li>
                <li><a href="recipe.php" style="color: white;text-align: center;">Show Recipe</a></li>
                <li><a href="add.php" style="color: white;text-align: center;">Add New Recipe</a></li>
            </ul>

            <ul>
                <li><a href="recipe.php" style="color: #ffffff;text-align: center;font-weight:bold;font-size:30px;">RECI-MANIA</a></li>
            </ul>

            <ul>

                <li><a href="feedback.php" style="color: white;text-align: center;">Feedback</a></li>
                <li><a href="recent.php" style="color: white;text-align: center;">Recently Added</a></li>
                <li><a href="restaurant.php" style="color: white;text-align: center;">Restaurants</a></li>
            </ul>
        </nav>


        <form action="" method="POST" name="feedback" onsubmit="return validateForm();">
            <center>
                <table class="table" style="width:40% ; ">
                    <caption>
                        <h2 style="font-family: 'Rufina';font-style: normal;font-weight: 400;font-size: 50px;line-height: 84px;color: #DE448D;text-align:center;">Feedback Form</h2>
                        <p style="color:black;font-size:20px;font-family:Verdana;text-align:center;">How do you find our site?<br>Let us know by filling the following feedback form.</p>
                    </caption>
                    <tr align="Left">
                        <td style="color:black;font-size:20px;font-family:Verdana;">Name</td>
                        <td style="color:black;">
                            <input id="name" type="text" />
                        </td>
                    </tr>

                    <tr>
                        <td style="color:black;font-size:20px;font-family:Verdana;">Email Id</td>
                        <td style="color:black;">
                            <input type="email" name="email" cols="40" rows="1" required>
                        </td>
                    </tr>

                    <tr>
                        <td style="color:black;font-size:20px;font-family:Verdana;">Feedback</td>
                        <td style="color:black;">
                            <textarea name="feedback" cols="150" rows="10" required></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center" style="vertical-align:top;font-family:Salsa;">
                            <input type="submit" class="btn btn-success" value="Submit" name="submit">
                        </td>
                    </tr>


                </table>
            </center>
        </form>
        <?php
        include('conn.php');
        if (isset($_REQUEST['submit'])) {
            $var = $_REQUEST['feedback'];
            $name = $_REQUEST['name'];
            $em = $_REQUEST['email'];

            $sq = "insert into feedback (feed, name,email) VALUES('$var','$name' , '$email')";
            $re = $conn->query($sq);
            if ($re) {
        ?>
                <script type="text/javascript">
                    alert("Form submitted");
                    window.location = "index.php";
                </script>
            <?php
            } else {
            ?>
                <script type="text/javascript">
                    alert("There was an error submitting form");
                    window.location = "feedback.php"
                </script>
        <?php
            }
        } ?>
        
    </div>
    <?php
    include('footer-test.html');
    ?>

</body>

</html>