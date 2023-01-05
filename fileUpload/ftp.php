<?php

// FTP接続
$ftp_server = "192.168.11.6";     // FTPホスト名
$ftp_user_name = "taku";  // FTPユーザー名
$ftp_pass_pw = "12345";    // FTPパスワード
$ftp_dir_path = "/ftpfile";  // アップロードしたいフォルダの指定。サーバーパスでなくFTP接続した時点からのパス。



// FTP接続確立
$conn_id = ftp_connect($ftp_server);


// ユーザ名とパスワードでログイン
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_pass_pw);


$FileData = $_FILES['ftpfile']['name'];
//同じ階層にある複数のファイルをアップロードすることをイメージ。ファイル名を配列に入れる。


// 接続確認
if ((!$conn_id) || (!$login_result)){
    echo "FTP接続失敗！";
    
} else {
    
    // パッシブモードON
    ftp_pasv($conn_id, true);
    
    
        $local_file = $FileData;
        
        $server_file = $ftp_dir_path.$local_file;	//アップロード先パス
        
        // ファイルをアップロードする
        if (ftp_put($conn_id, $server_file, $local_file, FTP_ASCII)) {
            echo   "アップロード完了";
        } else {
            echo "ファイルをアップロードできません。";
        }
    
    
    ftp_close($conn_id);
}



?>