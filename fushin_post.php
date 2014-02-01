<?php
//1つ目
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

$posts[0] = $obj['results']['collection1'][0]['property2'];

//2つ目
// ファイルからJSONを読み込み
$json2 = file_get_contents("http://www.kimonolabs.com/api/8e73roqq?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json2 = mb_convert_encoding($json2, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
 
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj2 = json_decode($json2, true);
 
// パースに失敗した時は処理終了
if ($obj2 === NULL) {
    return;
}

error_log(json_encode($obj2['results']['collection1'][0]['property2']));
//echo $obj2['results']['collection1'][0]['property2'];

$posts[1] = $obj2['results']['collection1'][0]['property2'];
$posts[2] = $obj2['results']['collection1'][1]['property2'];
$posts[3] = $obj2['results']['collection1'][2]['property2'];

//3つ目
// ファイルからJSONを読み込み
$json3 = file_get_contents("http://www.kimonolabs.com/api/8k2xsjim?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json3 = mb_convert_encoding($json3, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj3 = json_decode($json3, true);
// パースに失敗した時は処理終了
if ($obj3 === NULL) {
    return;
}

error_log(json_encode($obj3['results']['collection1'][0]['property2']));
echo $obj3['results']['collection1'][0]['property2'];

$posts[4] = $obj3['results']['collection1'][0]['property2'];

//4つ目
// ファイルからJSONを読み込み
$json4 = file_get_contents("http://www.kimonolabs.com/api/cypcroq0?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json4 = mb_convert_encoding($json4, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj4 = json_decode($json4, true);
// パースに失敗した時は処理終了
if ($obj4 === NULL) {
    return;
}
error_log(json_encode($obj4['results']['collection1'][0]['property2']));
echo $obj4['results']['collection1'][0]['property2'];

$posts[5] = $obj4['results']['collection1'][0]['property2'];
$posts[6] = $obj4['results']['collection1'][1]['property2'];
$posts[7] = $obj4['results']['collection1'][2]['property2'];

//乱数発生
$intmn = mt_rand(0,3);
echo "$intmn";

// twitteroauth.phpを読み込む。パスはあなたが置いた適切な場所に変更してください
require_once("twitteroauth.php");

// Consumer keyの値
$consumer_key = "u2d4BLWwjHCSykxOiNrXQ";
// Consumer secretの値
$consumer_secret = "lc7QDrHmyyz1rDrsmvKZmhiOdUjRjA81XTrveJLH7M";
// Access Tokenの値
$access_token = "2315537460-gMVVkGPuMPiw9Xq0IutPOZLbeCVknSvA5koeOi4";
// Access Token Secretの値
$access_token_secret = "1XODIfEJeN9fWUUdVe74tXvKMwdixUlHkc9qWlGYpIlGW";

// OAuthオブジェクト生成
$to = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

// TwitterへPOSTする。パラメーターは配列に格納する
// in_reply_to_status_idを指定するのならば array("status"=>"@hogehoge reply","in_reply_to_status_id"=>"0000000000"); とする。
$req = $to->OAuthRequest(
	"https://api.twitter.com/1.1/statuses/update.json",
	"POST",
	array("status"=> $posts[$intmn]));
// TwitterへPOSTするときのパラメーターなど詳しい情報はTwitterのAPI仕様書を参照してください

// Twitterから返されたJSONをデコードする
$result = json_decode($req);
// JSONの配列（結果）を表示する
echo "<pre>";
var_dump($result);
?>