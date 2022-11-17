<html>

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reci-Mania</title>
    <meta name="keywords" content="footer, address, phone, icons" />
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="css/demo.css">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script  ' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kite One  ' rel="stylesheet">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Bellefair  ' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Fresca  ' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Salsa  ' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Acme  ' rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .bgimg img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 30%;
            z-index: -1;
            opacity: .2;
        }

        body {
           
            background-image: url('https://i0.wp.com/diplomartbrussels.com/wp-content/uploads/2020/09/food-background-images-94-images-in-co-381169-png-images-pngio-food-background-png-1440_619.png?fit=1440%2C619&ssl=1');
            background-repeat: no-repeat;
            background-size: cover;

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

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid whitesmoke;
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
    </style>

</head>

<body>
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



    <?php
    include('conn.php');
    if (isset($_REQUEST['submit'])) {
    ?>
        <style>
            .help {
                visibility: hidden;
            }
        </style>
        <?php
        $hug = $_REQUEST['recipe'];
        $puppy = "select * from restaurant where res_name='$hug'";
        $hurt = $conn->query($puppy);
        if ($hurt) {
            $fest = $hurt->fetch_object();
            $tr = $fest->res_id;
            $pup = "select * from receipe where res_id=$tr";
            $hur = $conn->query($pup);
            if ($hur) {
        ?><h2 align="center" style="color:red;font-size: 60px;font-family:Perpetua;">Recipes available for selected source</h2>
                <p align="center" style="color:black;font-size: 20px;font-family:Fresca;">Here is the list of recipes for selected source</p> <?php
                        while ($fe = $hur->fetch_object()) {
                        ?></h2>
                    <center><img src="<?php echo $fe->imagesrc; ?>" align="center" width="30%" height="30%" class="img-rounded"></center><br>
                    <div class="one" align="center">
                        <h3 style="color:red;font-weight:bold;font-family:Perpetua;"><?php
                            echo $fe->r_name;
                            echo "<br />";
                            echo "<br />";
                            ?></h4>
                            <h4 style="color:green;font-weight: bold;font-size: 20px;font-family:Perpetua;"><?php
                            echo "INGREDIENTS "; ?></h4>
                            <p style="color:black;font-size: 20px;font-family:Salsa;"><?php
                            $str =  $fe->ing;
                            echo wordwrap($str, 100, "<br>\n");
                            echo "<br />";
                            echo "<br />";
                            ?></p>
                            <h4 style="color:green;font-weight: bold;font-size: 20px;font-family:Perpetua;"><?php
                            $str = $fe->STEPS;
                            echo "INSTRUCTIONS TO PREPARE"; ?></h4>
                            <p style="color:black;font-size: 20px;font-family:Salsa;"><?php
                            echo wordwrap($str, 100, "<br>\n");
                            echo "<br />";
                            echo "<br />";
                            ?></p>
                            <h4 style="color:green;font-weight: bold;font-weight: bold;font-size: 20px;font-family:Perpetua;"><?php
                            $str = $fe->STEPS;
                            echo "SOURCE OF RECIPE"; ?></h4>
                            <p style="color:black;font-size: 20px;font-family:Salsa;"><?php
                            $wet = "select * from restaurant where res_id=$fe->res_id";
                            $team = $conn->query($wet);
                            if ($team) {
                                $tag = $team->fetch_object();
                                $rt = $tag->res_name;
                                echo wordwrap($rt, 100, "<br>\n");
                            }
                            ?></p>
                    </div>
                    <hr><?php
                        }
                    } else {
                        echo "2";
                    }
                      } else {
                    echo "1";
                }
            }
             ?>
    <?php
    include('conn.php');
    $w = "select * from restaurant";
    $res = $conn->query($w);
    if ($res) {
    ?><div class="help">
            <table class="table" style="width:35%; margin-left:32%;">
                <caption>
                    <h2 style="font-family: 'Rufina';
font-style: normal;
font-weight: 400;
font-size: 68px;
line-height: 84px;
color: #DE448D;" align="center">Sources Available</h2>
                    <p style="font-family: 'Verdana';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 32px;
text-align: center;
color: #000000;">Sources given below<br>Select source whose recipe you want to know</p>
                </caption>
                <form method="POST" action=""><?php
                         while ($fet = $res->fetch_object()) {
                         ?>
                        <tr  style="background-color:#cce6ff;">
                            <td width="20%" align="right">
                                <input type="radio" name="recipe" value="<?php echo $fet->res_name; ?>">
                            </td>
                            <td width="40%" style="color:#990099;font-size:22px;font-weight:bold;font-family:Verdana;"><?php echo $fet->res_name; ?></td>
                        </tr>
                    <?php
                     }
                    ?>
                    <tr>
                        <td align="center" colspan="2" style="color:red;font-size:20px;font-family:Verdan;">
                        <br>
                            <input id="ten" class="btn btn-success" type="submit" name="submit" value="Done">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        <br><br>
    <?php
   
        include('footer-test.html');
    }
    ?>


</body>

</html>