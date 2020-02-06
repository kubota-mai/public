<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">   
 <title>課題演習</title>
 <link rel="stylesheet"type="text/css"href="style.css">
</head>

<body>
	
	<?php
	
	mb_internal_encoding("utf8");
	$pdo = new PDO("mysql:dbname=4;host=localhost;","root","mysql");
	$stmt = $pdo->query("select*from 4each_keijiban");
	

	
	?>
	
	
	<header>
    	<div class="logo">
            <img src="4eachblog_logo.jpg">
        </div>
            
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合せ</li>
            <li>その他</li>
        </ul>
	</header>
    
    <main>
    	<div class="left">
       
				
				<div class="left_title">
				<h1>プログラミングに役立つ掲示板</h1>
        </div>    
        
				<div class="mainbox1">
            	
			  
						<form method="post" action="insert.php">
					
							<h1>入力フォーム</h1>
							
							<div>
      			  <label>ハンドルネーム</label>
      			  <br>
      		    <input type="text"class="text"size="35" name="handlename">
    					</div>
      
    			    <div>
      			  <label>タイトル</label>
      			  <br>
      			  <input type="text"class="text"size="35"name="title">
				      </div>
  
   			    	<div>
              <label>コメント</label>
      			  <br>
      			  <textarea cols="35"rows="7"name="comments"></textarea>
    		    	</div>

    			    <div>
      			  <input type="submit"class="submit" value="投稿する">
    			    </div>
  					
					  </form>
         </div>
            
        
				<?php
            
            echo"<div class='kiji'>";
							echo"<h3>タイトル</h3>";
							echo"<div class='contents'>";
								echo"記事の中身。<br>
								記事の中身。<br>
								記事の中身。<br>
								記事の中身。<br>";
								echo"<div class='handlename'>posted by 通りすがり</div>";
							
							echo"</div>";
                
							
            echo"</div>";
				
				?>
				
				<?php
				
				while($row=$stmt->fetch()){

				echo"<div class='kiji'>";
				echo"<h3>".$row['title']."</h3>";
				echo"<div class='contents'>";
				echo $row['comments'];
			  echo"<div class='handlename'>posted by".$row['handlename']."</div>";
				echo"</div>";
				echo"</div>";
					
				}
				
				?>
                
      </div>
            
            
        
        
        <div class="right">
            <h2>人気の記事</h2>
                <ul class="box1">
                    <li>PHP オススメ本</li> 
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
            
            <h2>オススメリンク</h2>
                <ul class="box1">
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
            <h2>カテゴリ</h2>
                <ul class="box1">
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
         
        </div>
        
     </main>
    
    
    <footer>
        copyright © internous| 4each blog is the one which provides A to Z about programming.
        
    </footer>
    
    
    


</body>
</html>