<?php
require_once('./db_connect.php');
require_once('./functions.php');
global $column, $post, $get_data;
$data = getTableData('posts');
$wh = $data['header'];
$t3 = trim(substr($wh, -3, 3));
$p = $data['post'];
global $get_data;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bald (for the) win . com</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <!-- <span class="mainBody"> <!-- Div 1-->
    <a class="anchor" id="top"></a>
        <div class="nav">
            <h1 id="title">Sean Baldwin</h1>
            <h3 id="slogan">Playing for Productivity</h3>
            <ul id="navBar">
                <li class="navItem"><a href="#top">Home</a></li>
                <li class="navItem"><a href="#middle">Contact</a></li>
                <li class="navItem"><a href="#bottom">About</a></li>
            </ul>
        </div>
        <!-- no longer nav -->
        <section class="boxes">
        <section class="box box1" id="box1">
            <div class="inBoxes">
            <div class="inBox l1">
                <ul class="noStyle listContainer">
                    <li class="">
                        <a href="#<?php
                        echo $t3;
                        ?>">
                            <?php
                            // foreach($get_data as $value){
                            //     print_r($row['header']);
                            // };
                            echo $data['header'];
                            ?>

                        </a>
                    </li>
                    &nbsp;
                    <li class="">

                    </li>
                </ul>
            </div>
            <div class="inBox c1">
                <ul class="noStyle listContainer">
                <a href="
                <?php
                echo $t3;
                ?>
                "><a class="anchor" id="<?php
                echo $t3;
                 ?>"></a>
                 Test 123
                </ul>
            </div>
            <div class="inBox r1 listContainer">
                <!-- <span id="image"> -->
                    <img id="me" src="images/me.jpg">
                <!-- </span> -->
                Sean Baldwin, 2015
            </div>
            </div>
            <a class="lgsymb darrow" href="#middle">
                <svg version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="arrow" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="20" x2="12" y2="4"/>
                    <polyline points="18 14, 12 20, 6 14"/>
                    <!-- <polyline points="6 10 12 4 18 10"/> -->
                </svg>
            </a>
        </section>
        <section class="box box2" id="box2">
            <a class="anchor" id="middle"></a>
            <h2 class="inBox termite">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam ea facere quidem tempore libero quaerat illo voluptas iusto consequatur perferendis. Animi iusto, repellat corporis voluptatum dolores nihil, obcaecati ducimus. Earum.
            </h2>

            <a class="lgsymb darrow" href="#bottom">
                <svg version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="arrow" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="20" x2="12" y2="4"/>
                    <polyline points="18 14, 12 20, 6 14"/>
                </svg>
            </a>
        </section>
        <section class="box box3" id="box3">
            <a class="anchor" id="bottom"></a>
            <h3 class="inBox termite">
                Sean Baldwin is a web developer and systems administrator based in New York City. He has over 5 years of experience working for managed service providers providing his customers with world class customer service, computer repair, network maintenance / administration and more.
            </h3>
            <a class="toptxt" href="#top">
                <svg version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="arrow" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="20" x2="12" y2="4"/>
                    <polyline points="6 10 12 4 18 10"/>
                </svg>
            </a>
        </section>
        </section>
        <section class="footer">
            &copy; 2017 Sean Baldwin
        </section>
    </div></span>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type=text/javascript src="script/main.js"></script>
</body>
</html>
