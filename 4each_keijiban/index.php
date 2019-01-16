<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>PHP　演習課題2(掲示板)</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
		
	</head>
	<body>
<!--headerタグ---------------------------------------------------------->
		<header>
			<div class="headerImage">
				<img src="./4eachblog_logo.jpg">
			</div>
			<nav>
				<ul>
					<li>トップ</li>
					<li>プロフィール</li>
					<li>4eachについて</li>
					<li>登録フォーム</li>
					<li>問い合わせ</li>
					<li>その他</li>
				</ul>
			</nav>
		</header>
<!--mainタグ----------------------------------------------------------->	
		<main>
<!--div classセパレート(左側)------------------------------------------->
			<div class="left">
				<h1>プログラミングに役立つ掲示板</h1>
				<section>
					<h2>入力フォーム</h2>
					<form method="post" action="insert.php">
						<div>
							<label>ハンドルネーム</label>
							<br>
							<input class="text" type="text" size="30" name="name">
						</div>
						<div>
							<label>タイトル</label>
							<br>
							<input class="text" type="text" size="30" name="title">
						</div>
						<div>
							<label>コメント</label>
							<br>
							<textarea class="comments" rows="15" cols="50"  name="comments"></textarea>
						</div>
						<div>
							<br>
							<input class="submit" type="submit" name="submit" value="投稿する">
						</div>
					</form>
				</section>
				<?php
					mb_internal_encoding("utf8");
					$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
					$stmt=$pdo->query("select * from 4each_keijiban;");
				
					while($row=$stmt->fetch()){
						echo "<div class='kiji'>";
						echo "<h3>[ ".$row['title']." ]</h3>";
						echo "<div class='contents'>";
						echo $row['comments'];
						echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
						echo "</div></div>";
					}
				?>			
						
			</div>
<!--div classセパレート(右側)------------------------------------------->		
				<div class="right">
				<ul>
					<li><p>人気の記事</p>
						<ul>
							<li>PHPオススメ本</li>
							<li>PHP MyAdminの使い方</li>
							<li>今人気のエディタ Top5</li>
							<li>HTMLの基礎</li>
						</ul>
					</li>
					<li><p>オススメリンク</p>
						<ul>
							<li>インターノウス株式会社</li>
							<li>XAMPPのダウンロード</li>
							<li>Eclopseのダウンロード</li>
							<li>Bracketsのダウンロード</li>
						</ul>
					</li>
					<li><p>カテゴリ</p>
						<ul>
							<li>HTML</li>
							<li>PHP</li>
							<li>MySQL</li>
							<li>JavaScript</li>
						</ul>
					</li>
				</ul>
			</div>		
		</main>
<!--footerタグ------------------------------------------------------->
		<footer>
			<p>cpyright(c)internous | 4each blog is the one which provides A toZ about programming</p>
		</footer>
		
		
		
	</body>
</html>