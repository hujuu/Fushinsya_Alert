<?php
// ファイルからJSONを読み込み
$json = file_get_contents("http://www.kimonolabs.com/api/be0pgd6k?apikey=545c9d85d1f29d0b30b63d281e761220");
 
// 文字化けするかもしれないのでUTF-8に変換
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
 
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj = json_decode($json, true);
 
// パースに失敗した時は処理終了
if ($obj === NULL) {
    return;
}

error_log(json_encode($obj['results']['collection1'][0]['property2']));
echo $obj['results']['collection1'][0]['property2'];
?>