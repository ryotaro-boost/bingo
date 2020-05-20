<?php

namespace Myapp;

class Bingo {

  /*
$nums[][]
B: $nums[0]  1-15
I: $nums[1] 16-30
N: $nums[2] 31-45
G: $nums[3] 46-60
O: $nums[4] 61-75

$nums[$i] $i * 15 + 1 ~ $i * 15 + 15
*/
  public function create() {
    $nums = [];

    for ($i = 0; $i < 5; $i++){
      $col = range($i * 15 + 1, $i * 15 + 15);
      shuffle($col);
      $nums[$i] = array_slice($col, 0, 5);
    }
    $nums[2][2] = "free";
    return $nums;
  }
}