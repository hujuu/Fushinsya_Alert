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
$posts[4] = $obj3['results']['collection1'][0]['property2'];

//4つ目（新宿）
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
$posts[5] = $obj4['results']['collection1'][0]['property2'];
$posts[6] = $obj4['results']['collection1'][1]['property2'];
$posts[7] = $obj4['results']['collection1'][2]['property2'];

//5つ目(文京)
// ファイルからJSONを読み込み
$json5 = file_get_contents("http://www.kimonolabs.com/api/ehxyfdig?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json5 = mb_convert_encoding($json5, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj5 = json_decode($json5, true);
// パースに失敗した時は処理終了
if ($obj5 === NULL) {
    return;
}
error_log(json_encode($obj5['results']['collection1'][0]['property2']));
$posts[5] = $obj5['results']['collection1'][0]['property2'];
$posts[6] = $obj5['results']['collection1'][1]['property2'];
$posts[7] = $obj5['results']['collection1'][2]['property2'];
$posts[8] = $obj5['results']['collection1'][3]['property2'];
$posts[9] = $obj5['results']['collection1'][4]['property2'];
$posts[10] = $obj5['results']['collection1'][5]['property2'];

//6つ目（品川）
// ファイルからJSONを読み込み
$json6 = file_get_contents("http://www.kimonolabs.com/api/6llpy3yg?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json6 = mb_convert_encoding($json6, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj6 = json_decode($json6, true);
// パースに失敗した時は処理終了
if ($obj6 === NULL) {
    return;
}
error_log(json_encode($obj6['results']['collection1'][0]['property2']));
echo $obj6['results']['collection1'][0]['property2'];
$posts[11] = $obj6['results']['collection1'][0]['property2'];
$posts[12] = $obj6['results']['collection1'][1]['property2'];
$posts[13] = $obj6['results']['collection1'][2]['property2'];
$posts[14] = $obj6['results']['collection1'][3]['property2'];
$posts[15] = $obj6['results']['collection1'][4]['property2'];

//7つ目（葛飾）
// ファイルからJSONを読み込み
$json7 = file_get_contents("http://www.kimonolabs.com/api/c1fcog4q?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json7 = mb_convert_encoding($json7, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj7 = json_decode($json7, true);
// パースに失敗した時は処理終了
if ($obj7 === NULL) {
    return;
}
error_log(json_encode($obj7['results']['collection1'][0]['property2']));
echo $obj7['results']['collection1'][0]['property2'];
$posts[16] = $obj7['results']['collection1'][0]['property2'];
$posts[17] = $obj7['results']['collection1'][1]['property2'];
$posts[18] = $obj7['results']['collection1'][2]['property2'];

//8つ目（墨田）
// ファイルからJSONを読み込み
$json8 = file_get_contents("http://www.kimonolabs.com/api/8m8p7cto?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json8 = mb_convert_encoding($json8, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj8 = json_decode($json8, true);
// パースに失敗した時は処理終了
if ($obj8 === NULL) {
    return;
}
error_log(json_encode($obj8['results']['collection1'][0]['property2']));
echo $obj8['results']['collection1'][0]['property2'];
$posts[19] = $obj8['results']['collection1'][0]['property2'];
$posts[20] = $obj8['results']['collection1'][1]['property2'];
$posts[21] = $obj8['results']['collection1'][2]['property2'];

//9つ目（江東）
// ファイルからJSONを読み込み
$json9 = file_get_contents("http://www.kimonolabs.com/api/a07kr1au?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json9 = mb_convert_encoding($json9, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj9 = json_decode($json9, true);
// パースに失敗した時は処理終了
if ($obj9 === NULL) {
    return;
}
error_log(json_encode($obj9['results']['collection1'][0]['property2']));
echo $obj9['results']['collection1'][0]['property2'];
$posts[22] = $obj9['results']['collection1'][0]['property2'];
$posts[23] = $obj9['results']['collection1'][1]['property2'];
$posts[24] = $obj9['results']['collection1'][2]['property2'];

//10つ目（中野）
// ファイルからJSONを読み込み
$json10 = file_get_contents("http://www.kimonolabs.com/api/der1vvs0?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json10 = mb_convert_encoding($json10, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj10 = json_decode($json10, true);
// パースに失敗した時は処理終了
if ($obj10 === NULL) {
    return;
}
error_log(json_encode($obj10['results']['collection1'][0]['property2']));
echo $obj10['results']['collection1'][0]['property2'];
$posts[25] = $obj10['results']['collection1'][0]['property2'];
$posts[26] = $obj10['results']['collection1'][1]['property2'];
$posts[27] = $obj10['results']['collection1'][2]['property2'];

//11つ目（豊島）
// ファイルからJSONを読み込み
$json11 = file_get_contents("http://www.kimonolabs.com/api/2j7s0lhg?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json11 = mb_convert_encoding($json11, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj11 = json_decode($json11, true);
// パースに失敗した時は処理終了
if ($obj11 === NULL) {
    return;
}
error_log(json_encode($obj11['results']['collection1'][0]['property2']));
echo $obj11['results']['collection1'][0]['property2'];
$posts[28] = $obj11['results']['collection1'][0]['property2'];
$posts[29] = $obj11['results']['collection1'][1]['property2'];

//12つ目（台東）
// ファイルからJSONを読み込み
$json12 = file_get_contents("http://www.kimonolabs.com/api/2j7s0lhg?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json12 = mb_convert_encoding($json12, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj12 = json_decode($json12, true);
// パースに失敗した時は処理終了
if ($obj12 === NULL) {
    return;
}
error_log(json_encode($obj12['results']['collection1'][0]['property2']));
echo $obj12['results']['collection1'][0]['property2'];
$posts[30] = $obj12['results']['collection1'][0]['property2'];
$posts[31] = $obj12['results']['collection1'][1]['property2'];
$posts[32] = $obj12['results']['collection1'][2]['property2'];
$posts[33] = $obj12['results']['collection1'][3]['property2'];

//13つ目（杉並）
// ファイルからJSONを読み込み
$json13 = file_get_contents("http://www.kimonolabs.com/api/bgw2o6ze?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json13 = mb_convert_encoding($json13, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj13 = json_decode($json13, true);
// パースに失敗した時は処理終了
if ($obj13 === NULL) {
    return;
}
error_log(json_encode($obj13['results']['collection1'][0]['property2']));
echo $obj13['results']['collection1'][0]['property2'];
$posts[34] = $obj13['results']['collection1'][0]['property2'];
$posts[35] = $obj13['results']['collection1'][1]['property2'];
$posts[36] = $obj13['results']['collection1'][2]['property2'];
$posts[37] = $obj13['results']['collection1'][3]['property2'];
$posts[38] = $obj13['results']['collection1'][4]['property2'];

//14つ目（板橋）
// ファイルからJSONを読み込み
$json14 = file_get_contents("http://www.kimonolabs.com/api/4g72zeio?apikey=545c9d85d1f29d0b30b63d281e761220");
// 文字化けするかもしれないのでUTF-8に変換
$json14 = mb_convert_encoding($json14, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// オブジェクト毎にパース
// trueを付けると連想配列として分解して格納してくれます。
$obj14 = json_decode($json14, true);
// パースに失敗した時は処理終了
if ($obj14 === NULL) {
    return;
}
for ($num = 0; ; $num++) {
	$posnum = 39 + $num;
	$posts[$posnum] = $obj14['results']['collection1'][$num]['property2'];
	echo $posts[$posnum];
	echo "<br />";
	if ($obj14['results']['collection1'][$num]['property2'] == NULL) {
		break;
	}
}

//乱数発生
$intmn = mt_rand(0,33);
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