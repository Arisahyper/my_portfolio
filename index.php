<?php

$name = "";
$email = "";
$commnet = "";

if (isset($_POST["send"]) === true) {
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $commnet = $_POST["comment"];

    $fp = fopen("board.txt", "a"); //書き込み専用
    // fwrite($fp, $name . "\t" . $email . "\t" . $body . "\n");
    fwrite($fp, "お名前：" . $name . "\n");
    fwrite($fp, "e-mail：" . $email . "\n");
    fwrite($fp, "コメント：" . $commnet . "\n");
    fwrite($fp, "----------------------------------\n");
    fclose($fp);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>自己紹介サイト</title>
    <!-- faviconの設定 -->
    <link rel="icon" href="img/favicon.ico">
    <!-- アイコンが出なかった時のやつ -->
    <meta name="description" content="田原のサイト">
    <!-- レスポンシブwebデザインのためのもの -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <!-- IEのための物？ -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- フォント読み込み -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>

    <!-- 通常CSS読み込み -->
    <link rel="stylesheet" href="style.css">
    <!-- hover.css読み込み -->
    <link href="css-hover/hover.css" rel="stylesheet" media="all">
</head>

<body>
    <!-- header -->
    <div class="header-fix">
        <h1>about</h1>
        <!-- 外部サイトへのリンクと画像 -->
        <ul>
            <li id="no1">
                <a href="https://twitter.com/coder_mell" target="_blank">
                    <img src="img/icon/twitter1.png" width="40" height="40" alt="Twitterへのリンク画像" title="Twitter">
                </a>
            </li>
            <li id="no2">
                <a href="https://github.com/Arisahyper" target="_blank">
                    <img src="img/icon/github1.png" width="40" height="40" alt="githubのリンク画像" title="github">
                </a>
            </li>
        </ul>
    </div>
    </div>

    <header>
        <!-- プロフィール欄設定 -->
        <div class="info">
            <p>Yoshitsugu Tahara </p>
        </div>
    </header>

    <!-- メニュー一覧 -->
    <ul class="menu">

        <li id="no1">
            <a href="#profile" class="hvr-grow">profile</a>
        </li>
        <li id="no2">
            <a href="#works" class="hvr-grow">works</a>
        </li>
        <li id="no3">
            <a href="#skill" class="hvr-grow">skill</a>
        </li>
        <li id="no4">
            <a href="#contact" class="hvr-grow">contact</a>
        </li>

    </ul>

    <!-- 本文 -->
    <!-- profile -->
    <div id="profile">
        <h1>profile</h1>

        <div class="box">
            <img src="img/icon.png" width="125" height="125" alt="紹介１">
            <p>2000年10月25日生まれ。20歳<br>
                東京デザインテクノロジーセンター専門学校 プログラマー専攻 3年生<br>
                ゲームに携わる仕事がしたいと思い、1年目はC++やゲームエンジン、プランニングなどゲームプログラマーとしての勉強をしていました。<br>
                2年目にPythonに出会い、その面白さに惹かれ進路変更を決意。<br>
                現在はエンジニアを目指してHTML、PHP、JavaScriptなどの主要言語を勉強しつつ、
                授業の他にもサークルの仲間と学内のサーバーを使用し勉強しています。
            </p>
        </div>
    </div>

    <!-- works -->
    <div id="works">
        <h1>works</h1>


        <a href="https://github.com/Arisahyper/my_portfolio" class="hvr-shrink" target="_blank">
            <div class="w_no1-box">
                <section id="w_no1">
                    <img src="img/my_portfolio.png" width="600" height="390" alt="紹介１">
                    <div id="w_no1_text">
                        <h2>ポートフォリオサイト</h2>
                        <p class="lang">
                            使用言語：HTML.CSS / PHP / JavaScript<br>
                        </p>
                        <p class="des">こちらのポートフォリオサイトになります<br>
                        </p>
                    </div>
                </section>
            </div>
        </a>


        <a href="https://github.com/Arisahyper/twitter_auto_follow" class="hvr-shrink" target="_blank">
            <div class="w_no2-box">
                <section id="w_no2">
                    <img src="img/selenium_twitter.png" width="600" height="390" alt="紹介２">
                    <div id="w_no2_text">
                        <h2>Twitter 自動フォロー</h2>
                        <p class="lang">
                            使用言語：Python(selenium)<br>
                        </p>
                        <p class="des">作品の説明文が入ります<br>
                        </p>
                    </div>
                </section>
            </div>
        </a>

        <a href="https://4.bp.blogspot.com/-lus0ib4Eq-g/VwIjQlewxXI/AAAAAAAA5hQ/8Bl0uBfBIlQkgncpQWDABNbnBJgRdXalg/w1200-h630-p-k-no-nu/text_sakuhinten.png" class="hvr-shrink" target="_blank">
            <div class="w_no3-box">
                <section id="w_no3">
                    <img src="img/3.jpg" width="600" height="390" alt="紹介３">
                    <div id="w_no3_text">
                        <h2>Sample</h2>
                        <p class="lang">
                            使用言語：XXXX / XXX / XXXX<br>
                        </p>
                        <p class="des">作品の説明文が入ります<br>
                        </p>
                    </div>
                </section>
            </div>
        </a>

        <a href="https://4.bp.blogspot.com/-lus0ib4Eq-g/VwIjQlewxXI/AAAAAAAA5hQ/8Bl0uBfBIlQkgncpQWDABNbnBJgRdXalg/w1200-h630-p-k-no-nu/text_sakuhinten.png" class="hvr-shrink" target="_blank">
            <div class="w_no3-box">
                <section id="w_no3">
                    <img src="img/3.jpg" width="600" height="390" alt="紹介３">
                    <div id="w_no3_text">
                        <h2>Sample</h2>
                        <p class="lang">
                            使用言語：XXXX / XXX / XXXX<br>
                        </p>
                        <p class="des">作品の説明文が入ります<br>
                        </p>
                    </div>
                </section>
            </div>
        </a>
    </div>

    <!-- skill -->
    <section id="skill">
        <h1>skill</h1>
        <div id="skill-box" class="hvr-shrink">
            <img src="./img/skill/skill.jpg" width="64%" height="36%" alt="紹介１">
        </div>

        <!-- width="888.88888" height="500" -->

    </section>

    <!-- contact -->
    <div id="contact">
        <h1>contact</h1>
        <div id="form">
            <form action="" method="post" id="contact_form">
                <p id="name-form">
                    <label for="name">name</label>
                </p>
                <input id="name" type="text" name="name" size="40">

                <p id="mail-form">
                    <label for="mail">e-mail</label>
                </p>
                <input id="mail" type="email" name="mail">

                <p id="comment-form">
                    <label for="comment">comment</label>
                </p>
                <textarea id="comment" name="comment"></textarea>
                <div id="submit-button">
                    <div class="hvr-bob">
                        <input type="submit" name="send" value="send">
                    </div>
                </div>
            </form>
        </div>




        <!-- <form id="searchform" role="search" action="/" method="get">
            <input class="s" name="s" type="text" placeholder="..." />
        </form> -->

    </div>

    <!-- footer -->
    <footer>
        <p>Copyright(c) 2021 Yoshitsugu Tahara</p>
    </footer>
</body>

</html>