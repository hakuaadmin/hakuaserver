<!--Contact Success PHP-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ぐれーとはくあ(仮)</title>
        <link rel="stylesheet" href="../../css/Main/stylesheet.css">
    </head>
    <body>
        <header>
            <?php include('global_header.php'); ?>
        </header>
        <div class="sent-spacer"> </div>
        <div class="sent-main">
            <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
            <div class="display-contact">
                <div class="form-title">入力内容</div>
                <div class="form-item">■ 名前</div>
                <?php echo $_POST['name']; ?>

                <div class="form-item">■ メールアドレス</div>
                <?php echo $_POST['mail']; ?>

                <div class="form-item">■ お問い合わせの種類</div>
                <?php echo $_POST['category']; ?>

                <div class="form-item">■ 内容</div>
                <?php echo $_POST['body']; ?>

                <?php
                    date_default_timezone_set("Asia/Tokyo");
                    $time = date("Y-m-d H:i:s");

                    $data = "\r\n";
                    $data = $data."時間：".$time."\r\n";
                    $data = $data."名前：".$_POST['name']."\r\n";
                    $data = $data."アドレス：".$_POST['mail']."\r\n";
                    $data = $data."種類：".$_POST['category']."\r\n";
                    $data = $data."内容：".$_POST['body']."\r\n"."\r\n";

                    $qfile = '../../sentQuestion/question.txt';
                    $fp = fopen($qfile, 'ab');
                    fwrite($fp, $data);
                    fclose($fp);
                ?>
            </div>
        </div>
        <a href="index.php" class="return btn">トップページに戻る</a>
        <footer>
            <?php include('global_footer.php'); ?>
        </footer>
    </body>
</html>