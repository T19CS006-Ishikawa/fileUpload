<?php
echo "1";
if( $_FILES['file']['size'] > 0 ){
    do{
        $flg = false;
        //FTPサーバとアカウント情報
        $server = "192.168.11.6"; //送り先のFTPサーバー名もしくはIP
        $user = "taku"; //送り先のFTPユーザ
        $pass = "12345"; //送り先のFTPパスワード
        $remoteDir = './file/'; //送り先のディレクトリ
        $localDir = './ftpfile/'; //ローカル側の一時アップロードディレクトリ
        //FTPサーバに接続
        $ftp = ftp_connect($server);
        if( !$ftp ) break;
        //ログイン
        if( !ftp_login($ftp, $user, $pass) ) break;
        //FTPサーバ上でディレクトリ移動
        if( !ftp_chdir($ftp, $remoteDir) ) break;
        //ローカル側に一度アップロード
        if( !move_uploaded_file($_FILES['file']["tmp_name"], $localDir . $_FILES['file']['name']) ) break;
        //アップロード
        $local = $localDir . $_FILES['file']['name']; //アップロードするファイル
        $remote = $_FILES['file']['name']; //アップロード時の名前
        if( !ftp_put($ftp, $remote, $local, FTP_BINARY) ) break;
        //ローカル側のファイルを削除
        unlink( $localDir . $_FILES['file']['name'] );
        //接続を閉じる
        ftp_close($ftp);
        $flg = true;
    }while(0);
    if( $flg ){
        //アップロード成功時の処理
        echo "success";
    }else{
        //アップロード失敗時の処理
        echo "どんまい";
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br>
    <input type="submit" value="submit">
</form>
</body>
</html>