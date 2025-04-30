<?php
function testscore($a,$b,$c){
  $add = $a + $b + $c;
  if($add >210){
    echo "合計点は". $add. "なので合格です";
  }else{
    echo "合計点は". $add."なので不合格です";
  }
}

echo testscore(10, 50, 60);