<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reci-Mania</title>
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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        .one {
            border: 5px solid white;
            width: 70%;
            margin-left: 15%;
            margin-bottom: 3%;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

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

            background: green;

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

        
    </style>
</head>

<body style="background-image: url('img/23385.jpg'); background-repeat:no-repeat;background-size:cover;">
    <nav>
        <ul>

            <li><a href="index.php" style="color: white;text-align: center;">Home</a></li>
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
    <div>
        <?php
        include('conn.php');
        $r = "select * from receipe order by r_id DESC";
        $res = $conn->query($r);
        if ($res) {

            for ($x = 0; $x < 4; $x = $x + 1) {
                if ($fe = $res->fetch_object()) {
                    if ($x == 0) { ?><h2 style="font-family: 'Rufina';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 68px;
                    line-height: 84px;
                    color: #DE448D;" align="center">Recently Added Recipes </h2>
                        <p style="font-family: 'Verdana';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 20px;
                    line-height: 32px;
                    text-align: center;
                    color: #000000;">Check out the latest recipes here</p>
                        <?php } ?><center>


                    </center><br>
                    <div class="one" align="center" style="background-color:#00001a; color:white;font-size:15px">
                        <?php
                        echo '<img style="width: 400px;height: 250px; border:3px solid white; margin-top:30px" src="data:image/jpeg;base64,' . base64_encode($fe->image) . '"/>';
                        ?>
                        <h3 style="color:#e6e6ff;font-size:30px;font-family:Verdana, Geneva, Tahoma, sans-serif;"><?php
                                                                                                                    echo $fe->r_name;
                                                                                                                    echo "<br />";

                                                                                                                    ?></h4>
                            <h4 style="color:#ffb3ff;font-size:25px;font-family:Verdana, Geneva, Tahoma, sans-serif;"><?php
                                                                                                                        echo "INGREDIENTS "; ?></h4>
                            <p style="color:white;font-size: 15px;font-family:Verdana;"><?php

                                                                                        $str =  $fe->ing;
                                                                                        echo wordwrap($str, 100, "<br>\n");
                                                                                        echo "<br />";
                                                                                        echo "<br />";
                                                                                        ?></p>
                            <h4 style="color:#ffb3ff;font-size:25px;font-family:Verdana, Geneva, Tahoma, sans-serif;"><?php
                                                                                                                        $str = $fe->STEPS;
                                                                                                                        echo "INSTRUCTIONS TO PREPARE"; ?></h4>
                            <p style="color:white;font-size: 15px;font-family:Verdana;"><?php

                                                                                        echo wordwrap($str, 100, "<br>\n");
                                                                                        echo "<br />";
                                                                                        echo "<br />";

                                                                                        ?></p>
                            <h4 style="color:#ffb3ff;font-size:25px;font-family:Verdana, Geneva, Tahoma, sans-serif;"><?php
                                                                                                                        $str = $fe->STEPS;
                                                                                                                        echo "SOURCE OF RECIPE"; ?></h4>
                            <p style="color:white;font-size: 15px;font-family:Verdana;"><?php

                                                                                        $wet = "select * from restaurant where res_id=$fe->res_id";
                                                                                        $team = $conn->query($wet);
                                                                                        if ($team) {
                                                                                            $tag = $team->fetch_object();
                                                                                            $rt = $tag->res_name;


                                                                                            echo wordwrap($rt, 100, "<br>\n");
                                                                                        }
                                                                                        ?></p>



                    </div>
                  




        <?php
                } else {
                    break;
                }
            }
        }
        ?>
    </div>
    <?php
    include('footer-test.html');
    ?>
</body>

</html>