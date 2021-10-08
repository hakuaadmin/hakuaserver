<!--Main Index PHP-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>[1.16.5]ぐれーとはくあ|トップページ</title>
        <link rel="stylesheet" href="../../css/Main/stylesheet.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
        <?php include('global_header.php'); ?>
        </header>
        <div class="top-wrapper">
            <div class="container">
                <h1>ぐれーとはくあ</h1>
                <h1>クリエイティブ建築サーバー</h1>
                <p>ぐれーとはくあサーバーはクリエ建築を中心としたコンテンツを提供しています。</p>
                <p>どなたでも自由な建築をしていただけます。</p>
                <div class="btn-wrapper">
                    <a href="https://discord.gg/Dnp7wggJQu" class="btn discord">Discordサーバー</a>
                    <p>Official Account</p>
                    <a href="https://twitter.com/HakuaServer" class="btn twitter"><span class="fa fa-twitter"></span>公式Twitter</a>
                    <a href="https://minecraft.jp/servers/60e6ea96d0215b4d19000002#" class="btn jms">JMSページ</a>
                </div>
            </div>
        </div>
        <div class="intr-wrapper">
            <div class="container">
                <div class="heading">
                    <h2>ここならできる、幅広い建築。</h2>
                </div>
                <div class="intrs">
                    <div class="intr">
                        <div class="intr-icon">
                            <img src="../../img/grass.png">
                        </div>
                        <p class="txt-contents">クリエイティブモードだからこそ出来る。無限に広がる世界で自分たちだけの街を作りませんか？一つの世界をみんなで共有して整合性のとれた地域へと発展させてゆく事を目標にしています。</p>
                    </div>
                    <div class="intr">
                        <div class="intr-icon">
                            <img src="../../img/paper.png">
                        </div>
                        <p class="txt-contents">様々なプラグインを導入。建築の幅を大きく広げる"WorldEdit"などをはじめとした便利なプラグインを導入しています。使い方が分からなくても大丈夫、建築の先輩方が教えてくれますよ。</p>
                    </div>
                    <div class="intr">
                        <div class="intr-icon">
                            <img src="../../img/minecart.png">
                        </div>
                        <p class="txt-contents">作った街を鉄道観光。このぐれーとはくあ市では鉄道網が発達しています。トロッコに乗り車窓を楽しむことが出来るのもこのサーバーの魅力の一つです。まずは観光だけでもしていってくださいね。</p>
                    </div>
                    <div class="intr">
                        <div class="intr-icon">
                            <img src="../../img/netherstar.png">
                        </div>
                        <p class="txt-contents">他にも色々。建築だけではなく、PVPやミニゲームなども楽しめちゃいます。建築の息抜きに砂場ワールドで回路や戦艦を作る人も。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="message-wrapper">
            <div class="container">
               <div class="heading">
                    <h2>ほら、あなたも私たちと一緒にマインクラフトをしませんか？</h2>
                    <h3>Let's play Minecraft with us, build our own city!</h3>
                </div>
                <span class="btn message"><a href="#">サーバーに参加する</a></span>
            </div>
        </div>
        <div class="main">
            <div class="contact-form">
                <div class="form-title">お問い合わせ</div>
                <form method="post" action="sent.php">
                    <div class="form-item">名前</div>
                    <input type="text" name="name">
                    <div class="form-item">メールアドレス</div>
                    <input type="text" name="mail">
                    <div class="form-item">お問い合わせの種類</div>
                    <?php 
                        $types = array('サーバーに関するお問い合わせ','サーバーに対するご意見','サーバー運営に関するお問い合わせ','サーバー運営に対するご意見','その他');
                    ?>
                        <select name="category">
                            <option value="未選択">選択してください</option>
                            <?php
                                foreach($types as $type){
                                    echo "<option value={$type}>{$type}</option>";
                                }
                            ?>
                        </select>
                    <textarea name="body"></textarea>
                    <input type="submit" value="送信">
                </form>
            </div>
        </div>
        <footer>
            <?php include('global_footer.php'); ?>
        </footer>
    </body>
</html>