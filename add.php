<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" href="logo.jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="addStyle.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="footer, address, phone, icons" />
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

    <style>
        input[type="submit"] {
            font-size: "10%";
            background-color: #fff;
            color: #000;
            border-radius: 5px;
            padding: 5px 15px;
        }

        .borderless td,
        .borderless th {
            border: none;
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

        @media (max-width: 1000px) {
            nav {
                padding: 0 40px 0 50px;
            }
        }

        @media (max-width: 920px) {
            nav .menu-btn i {
                display: block;
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

            nav ul li a.active,
            nav ul li a:hover {
                background: none;
                color: cyan;
                text-decoration: solid;
            }

        }

        body{
            background-color: lightcyan;

        }
      

        select {
            appearance: none;
            background-color: antiquewhite;
            padding: 0 1em 0 0;
            margin: 0;
            width: 30%;
            height: 30px;
            font-family: inherit;
            font-size: inherit;
            cursor: inherit;
            line-height: inherit;
            border-color: #000;
            border-radius: 3px;
            text-align: center;
        }

        input[type="submit"] {
            box-sizing: border-box;

            color: #000000;
            font-family: 'Inter';
            font-size: 11px;

            width: 100px;
            height: 40px;
            font-weight: bold;
            text-align: center;


            background: #7ADD8B;

            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 15px;

        }
    </style>
</head>

<body>
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


    <?php
    include('conn.php');
    if (isset($_REQUEST['add'])) {
    ?>
        <style>
            .appBanner {
                visibility: hidden;
            }
        </style>
        <form action="" method="POST">
            <table cellpadding="30px" cellspacing="30px" width="40%" align=left class="table borderless">
                <caption>
                    <h2 style="color:blue;font-size:60px;font-family:Perpetua;" align="center">Add your ingredient</h2>
                    <p align="center" style="font-family:Verdana;">Fill the form below to add the ingredient if you don't find it here</p><br>
                </caption>
                <tr>
                    <td align="right" style="vertical-align:top;font-family:Salsa;">Ingredient Name</td>
                    <td><textarea name="ingi" cols="100" rows="5" required style="color:black;"></textarea></td>
                <tr>
                    <td colspan="2" align="center" style="vertical-align:top;font-family:Salsa;">Once you are done with filling the ingredient click here <input type="submit" name="done" value="DONE" class="btn btn-success"></td>
                </tr>
        </form>
        </table>
    <?php
    }
    ?>

    <?php
    include('conn.php');
    if (isset($_REQUEST['source'])) {
    ?>
        <style>
            .appBanner {
                visibility: hidden;
            }
        </style>
        <form action="" method="POST">
            <table cellpadding="30px" cellspacing="30px" width="40%" align=left class="table borderless">
                <caption>
                    <h2 style="color:blue;font-size:60px;" align="center">Add your source</h2>
                    <p align="center">Fill the form below to add the source if you don't find it on the site</p><br>
                </caption>
                <tr>
                    <td align="right" style="vertical-align:top;">Source Name</td>
                    <td><textarea name="resti" cols="100" rows="1" required style="color:black;"></textarea></td>
                <tr>
                    <td colspan="2" align="center" style="vertical-align:top;">Once you are done with filling the source name click here <input type="submit" name="resta" value="DONE" class="btn btn-default"></td>
                </tr>
        </form>
        </table>
    <?php
    }
    ?>

    <br>
    <div class="appBanner">

        <table style="width: 60%;margin-left:20%;color:black;border-radius:10px" align=center class="table">

            <h2 style="color: #DE448D;font-size:60px;font-family:Perpetua;" align="center">Add your own recipe</h2>
            <p align="center" style="font-family:Verdana;color:#000000">Fill the form below to add your own recipe if you don't find it here</p>

            <form action="" method="post" name="feedback">
                <tr>
                    <td align="right" style="vertical-align:top;font-family:Perpetua;font-size:18px;font-weight:bold;">Recipe Name</td>
                    <td><input type="text" id="username" name="r_name" style="width: 50%;border-radius:10px;height:40px;background-color:antiquewhite;"></td>
                </tr>
                <tr>
                    <td align="right" style="vertical-align:top;font-family:Perpetua;font-size:18px;font-weight:bold;">Steps</td>
                    <td><textarea rows="6" cols="100" name="STEPS" style="border-radius: 10px;background-color:antiquewhite;" required></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" style="font-family:Perpetua;font-size:18px;font-weight:bold;">Upload your image on internet and paste the url in the field below. To go to the link to upload and generate the url - <a href="https://ctrlq.org/images/" target="_blank" style="font-family:Salsa;"> Click here</a></td>
                </tr>
                <tr>
                    <td align="right" style="vertical-align:top;font-family:Perpetua;font-size:18px;font-weight:bold;">Image Link</td>
                    <td><input type="url" name="image" style="width: 50%;border-radius:10px;height:40px;background-color:antiquewhite;" required></td>
                </tr>

                <tr>
                    <td align="right" style="vertical-align:top;font-family:Perpetua;font-size:18px;font-weight:bold;"> Select Ingredients Required </td>
                    <td> <?php
                            include('conn.php');
                            $sql = "select * from ingredient";
                            $re = $conn->query($sql);
                            if ($re) {
                            ?><table class="table" class="checking" style="background-image:url('https://wallpaperaccess.com/full/1526003.png');"><?php

                                                                                                                                                    while ($fes = $re->fetch_object()) {

                                                                                                                                                    ?>
                                    <tr>
                                        <td style="color:white;font-family:Perpetua;"><input type="checkbox" name="ch[]" value="<?php echo $fes->i_id; ?> ">
                                            <?php
                                                                                                                                                        echo $fes->i_name;

                                            ?></td>
                                        <?php if ($fes = $re->fetch_object()) { ?>
                                            <td style="color:white;font-family:Perpetua;"><input type="checkbox" name="ch[]" value="<?php echo $fes->i_id; ?> ">
                                            <?php
                                                                                                                                                            echo $fes->i_name;
                                                                                                                                                        } else {
                                                                                                                                                            break;
                                                                                                                                                        } ?></td>

                                            <?php if ($fes = $re->fetch_object()) { ?>
                                                <td style="color:white;font-family:Perpetua;"><input type="checkbox" name="ch[]" value="<?php echo $fes->i_id; ?> ">
                                        <?php
                                                                                                                                                            echo $fes->i_name;
                                                                                                                                                        } else {
                                                                                                                                                            break;
                                                                                                                                                        }
                                                                                                                                                    }
                                                                                                                                                } ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center" style="font-family:Perpetua;color:#ffffff;font-size:18px">Dont find your ingredient above add here</td>
                                        <td>
                                            <input type="submit" name="add" value="Add Ingredient " class="btn btn-primary">
                                        </td>
                                    </tr>
                            </table>
                    </td>
                </tr>

                <tr>
                    <td align="right" style="vertical-align:top;font-family:Perpetua;font-size:21px;font-weight:bold;">Select the source</td>
                    <td>
                        <table class="table" style="background-color:transparent;" >
                            <tr>
                                <td align="left">
                                    <select name="ab">
                                        <?php
                                        $sq = "select * from restaurant";
                                        $r = $conn->query($sq);
                                        if ($r) {
                                            while ($t = $r->fetch_object()) {
                                        ?>
                                                <option value="<?php echo $t->res_id; ?>"><?php echo $t->res_name; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>

                                    </select>
                                </td>
                            </tr>


                            <tr>
                                <td align="left" style="font-family:Perpetua;font-size:18px;font-weight:bold;">Dont find your source . Add here
                                    <input type="submit" name="source" value="Add Source" class="btn btn-primary">
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center" style="vertical-align:top;font-family:Perpetua;font-size:18px;font-weight:bold;">Once you are done with writing about your recipe click here
                        <input type="submit" name="submit" class="btn btn-success" value="Completed" id="one">
                    </td>

                </tr>
        </table>
        </form>
    </div>

</body>

<?php
include('conn.php');
if (isset($_REQUEST['submit'])) {
    $hob = $_REQUEST['ch'];
    if (sizeof($hob) == 0) {
    } else {
?>

        <script type="text/javascript">
            alert("You have selected <?php echo sizeof($hob) ?> items");
        </script>

        <?php
        include('conn.php');
        $j = "";
        for ($x = 0; $x < sizeof($hob); $x++) {
            $w = "select * from ingredient where i_id=$hob[$x]";
            $res = $conn->query($w);
            if ($res) {
                $fe = $res->fetch_object();
                $j .= $fe->i_name;
            }
            if ($x != sizeof($hob) - 1) {
                $j .= ",";
            }
        }
        $r_name = $_REQUEST['r_name'];
        $STEPS = $_REQUEST['STEPS'];
        $img = $_REQUEST['image'];
        $ab = $_REQUEST['ab'];
        $sq = "insert into receipe(r_name,ing,STEPS,imagesrc,res_id) values ('$r_name','$j','$STEPS','$img','$ab')";
        $re = $conn->query($sq);
        if ($re) {
        ?>
            <script type="text/javascript">
                alert("inserted");
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("not inserted");
            </script>
            <?php
        }
        include('conn.php');
        $r = "select * from receipe where r_name='$r_name'";
        $wel = $conn->query($r);
        if ($wel) {
            $fest = $wel->fetch_object();
            $abc = $fest->r_id;
            $tea = 0;
            for ($x = 0; $x < sizeof($hob); $x++) {
                $test = $hob[$x];
                $pearl = "insert into connection (r_id,i_id) values ($abc,$test)";
                $da = $conn->query($pearl);
                if ($da) {
                    $tea = $tea + 1;
                }
            }
            if ($tea == sizeof($hob)) {
            ?>
                <script type="text/javascript">
                    window.location = "index.php";
                </script>
<?php
            }
        }
    }
}
?>



<?php
include('conn.php');
if (isset($_REQUEST['done'])) {
    $has = $_REQUEST['ingi'];
    $sqli = "insert into ingredient(i_name) values ('$has')";
    $req = $conn->query($sqli);
    if ($req) {
?>
        <script type="text/javascript">
            alert("Added the ingredient");
            window.location = "add.php";
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Sorry there occured an error");
        </script>
<?php
    }
}
?>


<?php
include('conn.php');
if (isset($_REQUEST['resta'])) {
    $has = $_REQUEST['resti'];
    $sqli = "insert into restaurant(res_name) values ('$has')";
    $req = $conn->query($sqli);
    if ($req) {
?>
        <script type="text/javascript">
            alert("Added the source");
            window.location = "add.php";
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Sorry there occured an error");
        </script>
<?php
    }
}
?>