<?php
  $os = 'win'; // win or mac

  if ($os === 'win') {
    $cd = 'C:\\xampp\\mysql\\bin\\';
    $pass = '';
  } 
  
  if ($os === 'mac') {
    $cd = '/Applications/MAMP/Library/bin/';
    $pass = 'root';
  }

  // 保存先のディレクトリ
  $fileDir = dirname(__FILE__).'/';

  // 保存ファイル名
  $fileName = 'db_backup_latest.sql';

  $bpFile = $fileDir. $fileName;

    $cmd  = $cd;
    $cmd .= 'mysqldump';
    $cmd .= ' --skip-lock-tables';    //ロックしない
    $cmd .= ' -u root';
    $cmd .= ' -p' . $pass;
    $cmd .= ' mini_cms_app';
    $cmd .= ' > ' . $bpFile;

    //実行
    system($cmd);

    //ファイルが作成されていればOK
    if(file_exists($bpFile) && filesize($bpFile) > 0){

      date_default_timezone_set('Asia/Tokyo');
      $bpStockFile = str_replace('latest', date('Ymd_His') , $bpFile);

      if (copy($bpFile, $bpStockFile)) {
          echo 'バックアップを「'. htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8'). '」に取りました。';
        } else {
          echo 'コピーできません！';
        }


    }else{
        print "NG";
    }
?>
