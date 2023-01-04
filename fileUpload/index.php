<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content = "text/html;charset=UTF-8">
	</head>
	<body>
		<form	enctype = "multipart/form-data" action = "./index.php"	method="POST">
			<input type = "file" name = "upfile"><br>
			<input type = "submit" value ="送信">
		</form>
		<form action = "./getFileName.php"	method="POST">
			<input type = "submit" value ="一覧">
		</form>
		<form action = "./listCheck.php"	method="POST">
			<input type = "submit" value ="確認">
		</form>
		<form action = "./ftp.php"	method="POST">
			<input type = "submit" value ="FTP">
		</form>


	</body>
</html>
<?php
//送信ボタンからの遷移か確認
if(isset($_FILES['upfile'])){
    //ファイルデータがあるかの確認
    if(!empty($_FILES['upfile']['tmp_name'])){
        //アップロード位置と名前を設定
        $upName= "./upfile/".$_FILES['upfile']['name'];
        
        //アップロード処理
        if(move_uploaded_file($_FILES['upfile']['tmp_name'],$upName)){
            echo $upName."のアップロードに成功しました。";
        }else{
            echo "アップロードに失敗しました。";
        }
        /*________________________*/
        //$result = glob('./upfile/*.csv');
        
        $handle = fopen("./upfile/list.txt","a");
            fputs($handle,$_FILES['upfile']['name']."|");
            
        fclose($handle);
        
        
 
        /*_________________________*/
        
    }else{
            echo "ファイルを選択して送信してください。";
        }
    }

?>