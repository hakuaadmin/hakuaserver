<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GHSマルチペディア</title>
    <link rel="stylesheet" href="../../css/Multipedia/multipedia.css">
  </head>

  <body>
    <!--ヘッダー部分-->
    <header>
      <!--<div class="Br">
        <form id="form2" action="" method="get">
          <input type="text" name="s" id="s" placeholder="SEARCH"><input type="submit" name="submit" value="検索">
        </form>
      </div> -->

      <div class="top_left">
        <a id="page" href="main_Multipedia.php">ページ</a>
        <a id="note" href="main_Multipedia_note.php">ノート</a>
        <a id="source" href="main_Multipedia_source.php">ソース表示</a>
        <a id="history" href="main_Multipedia_history.php">履歴表示</a>
      </div>
    </header>
    <article>
      <!--レフトサイドメニューの項目-->
      <div class="side">
        <a href="../../php/main/index.php"><img id="logo" src="../../img/server-icon.png" width="100" height="100"></a>
        <ul>
          <li><a id="main_page" href="main_Multipedia.php">メインページ</a></li>
          <li><a id="RecentUp" href="RecentUpdate.php">最近の更新</a></li>
        </ul>

        <h4 id="help_cat">ヘルプ</h4>
        <ul>
          <li><a id="Help" href="help.php">ヘルプ</a></li>
          <li><a id="Notification" href="notification.php">お知らせ</a></li>
          <li><a id="report" href="report.php">各種報告</a></li>
        </ul>

        <!--<h4 id="Language_cat">他言語版</h4>
          <a id="Language_De" href="../html_DE/main_Multipedia">Deutsche</a>
          <a id="Language_En" href="../html_EN/main_Multipedia">English</a>
          <a id="Language_Kr" href="../html_KR/main_Multipedia">한국어</a>
          <a id="Language_Cn" href="../html_CN/main_Multipedia">中文</a>
        -->
      </div>

      <!--メインコンテンツの項目-->
      <div class="content">
        <div class="info">
          <a id="helloS" href="main_Multipedia.php">マルチペディアへ</a><a id="hello">ようこそ</a>
        </div>
        <div class="notification">
          <h4 id="no">お知らせ</h4>
          <a>[2021 / 10 / 08]</a><a style="color:#ff0000;margin-right:20px;margin-left:15px">重要</a><a style="text-decoration:none" href="No_1.php">検索フォームについて</a>
        </div>
        <div class="cat">
          <a id="category"></a>
        </div>
      </div>
    </article>

    <footer>
      <div class="under_information">
        <a id="p_p" href="privacy_policy.php">プライバシー・ポリシー</a>
        <a id="MP_info" href="mp_info.php">マルチペディアについて</a>
        <a id="Disclaimer" href="disclaimer.php">免責事項</a>
        <a id="mobile_view" href="mobile.php">モバイルビュー</a>
        <a id="cookie_an" href="cookie_an.php">クッキーに関する声明</a>
      </div>
    </footer>
  </body>
</html>