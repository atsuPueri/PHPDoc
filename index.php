<?php

// phpDocインストール場所
// https://docs.phpdoc.org/3.0/guide/getting-started/installing.html

// php.exeまでのパス
$phpExePath = "C:/xampp/php/php.exe";

// phpDocumentor.pharまでのパス
$phpDocPath = __DIR__ . "/phpDocumentor.phar";

// ドキュメント化するプロジェクトまでのパス
$DocumentedProjectPath = "./function";

// ドキュメントの保存先
$DocumentSavePath = "./doc";



// コマンド組み立て
$command = "";

$command .= "{$phpExePath} ";
$command .= "{$phpDocPath} ";
$command .= "-d {$DocumentedProjectPath} ";
$command .= "-t {$DocumentSavePath} ";




// 実行
exec($command, $output);

echo "<pre>";
var_dump($output);
echo "</pre>";