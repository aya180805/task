<?php
//課題1 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください。
function y($x){
    $result=$x*2;
    return $result;
}
echo y(1);
echo "\n";

//課題2 $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a,$b){
    $result2=$a+$b;
    return $result2;
}
echo f(2,3);
echo "\n";

//課題3 $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
$arr=array(1,3,5,7,9);
function m($arr){
$result3=1;
foreach($arr as $a){
    $result3*=$a;
}
    return $result3;
}
echo m($arr);
echo "\n";

//課題4 【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
    $max_number=$arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number=$a;
        }
    }
    return $max_number;
}
echo max_array(array(67,23,86,54,56,38,57));
echo "\n";

?>

//課題5 次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
#strip_tags : 指定した文字列から HTML および PHP タグを取り除く。
#array_push : 一つ以上の要素を指定した配列の末尾に追加する。
#array_merge : 指定した複数の配列を1つに結合する。
#time, mktime : 現在の時刻を取得する、指定した日時からUnixタイムスタンプを取得する。
#date : 日付/時刻/曜日を表示する。
