<?php

require 'conn.php';

$data = query("SELECT * FROM about");
$datas = query("SELECT * FROM education");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/960.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/text.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Charmonman' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Chilanka' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $logo = "Nadhif";
    $name = "Muhammad Atay Nadhif";
    $card1 = "Paham betul dengan fungsi-fungsi serta property yang ada dalam HTML5";
    $card2 = "Menguasai banyak property dan fungsi-sungsi yang ada dalam CSS3";
    $card3 = "Memiliki banyak pengalaman mendesain web menggunakan JavaScript";
    $skill1 = "HTML";
    $skill2 = "CSS";
    $skill3 = "JavaScript";
    ?>

    <div class="background">
        <div class="container_12">
            <div class="header">
                <div class="grid_7"><?php echo $logo ?></div>
                <div class="grid_5">
                    <div class="nav">
                        <button onclick="window.scrollTo(0, 0)">Home</button>
                        <button onclick="window.scrollTo(0, 780)">About</button>
                        <button onclick="window.scrollTo(0, 1340)">Education</button>
                        <button onclick="window.scrollTo(0, 1940)">Work</button>
                        <button onclick="window.scrollTo(0, 2100)">Contact</button>
                    </div>
                </div>
                <div class="grid_12">
                    <p>Hello Guys, Iam</p>
                    <p><?php echo $name ?></p>
                    <p>Junior Web Developer</p>
                </div>
            </div>
            <?php foreach ($data as $row) : ?>
                <div class="about">
                    <div class="grid_6">
                        <img src="img/profile.png">
                    </div>
                    <div class="grid_6">
                        <h1>About Me</h1>
                        <p><?php echo $row["me"]; ?></p>
                        <p>Tanggal Lahir : <?php echo date('d-F-Y', strtotime($row["tgl_lahir"])); ?></p>
                        <p>Tempat Lahir : <?php echo $row["tmp_lahir"]; ?></p>
                        <p>Status : <?php echo $row["status"]; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- ================== EDUCATION ================== -->
            <?php foreach ($datas as $row) : ?>
                <div class="grid_12 education">
                    <h1>My Education</h1>
                </div>
                <div class="grid_1">
                    <div class="item"></div>
                </div>
                <div class="grid_11 school">
                    <p>Sekolah Dasar</p>
                    <p><?php echo $row["sd"]; ?></p>
                </div>
                <div class="grid_1">
                    <div class="item2"></div>
                </div>
                <div class="grid_11 school">
                    <p>Sekolah Menengah Pertama</p>
                    <p><?php echo $row["smp"]; ?></p>
                </div>
                <div class="grid_1">
                    <div class="item3"></div>
                </div>
                <div class="grid_11 school">
                    <p>Sekolah Menengah Atas</p>
                    <p><?php echo $row["sma"]; ?></p>
                </div>
                <div class="grid_1">
                    <div class="item4"></div>
                </div>
                <div class="grid_11 school">
                    <p>Univesitas</p>
                    <p><?php echo $row["universitas"]; ?></p>
                </div>
            <?php endforeach; ?>
            <!-- ================== PORTOFOLIO ================== -->
            <div class="grid_12 portofolio">
                <h1>My Portofolio</h1>
            </div>
            <div class="grid_4">
                <div class="card">
                    <img src="img/html.png">
                    <p><?php echo $card1 ?></p>
                </div>
            </div>
            <div class="grid_4">
                <div class="card">
                    <img src="img/css3.jpg">
                    <p><?php echo $card2 ?></p>
                </div>
            </div>
            <div class="grid_4">
                <div class="card">
                    <img src="img/js.png">
                    <p><?php echo $card3 ?></p>
                </div>
            </div>
            <!-- ================== FOOTER ================== -->
            <div class="footer grid_7">
                <h1>SKILL</h1>
            </div>
            <div class="footer grid_5">
                <h1>My Contact</h1>
            </div>
            <div class="grid_7 skill">
                <div class="bar">
                    <div class="box1_1">
                        <p><?php echo $skill1 ?></p>
                    </div>
                    <div class="box1_2">
                        <div class="box1_3"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="box2_1">
                        <p><?php echo $skill2 ?></p>
                    </div>
                    <div class="box2_2">
                        <div class="box2_3"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="box3_1">
                        <p><?php echo $skill3 ?></p>
                    </div>
                    <div class="box3_2">
                        <div class="box3_3"></div>
                    </div>
                </div>
            </div>
            <div class="grid_5 contact">
                <ul>
                    <li><a href="www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="www.maps.com"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                    <li><a href="www.whatsapp.com"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>