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
        
        //list.txt がないなら新規作成+書き込み,あれば追記
        $dir = './upfile/list.txt';
        if(file_exists($dir)){
            $handle = fopen("./upfile/list.txt","a");
            fputs($handle,$_FILES['upfile']['name'].",");
            echo "found";
        }else{
            $handle = fopen("./upfile/list.txt","w");
            fputs($handle,$_FILES['upfile']['name'].",");
            echo "not found";
        }
            
        fclose($handle);
        
        
 
        /*_________________________*/
        
    }else{
            echo "ファイルを選択して送信してください。";
        }
    }

?>