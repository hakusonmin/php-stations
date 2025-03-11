<?php

namespace Src\Station11;

class Question
{
  public function main(array $sweets): array
  {
    $budget = 300;

    //まずそもそものフィルター
    $filteredSweets = $this->getSweetsLessThanBudget($sweets, $budget);

    do {
      $randomKeys = $this->getRandomKeys($filteredSweets, $budget);

      $selectedSweets = $this->makeCombination($filteredSweets, $randomKeys);

      $totalPrice = array_sum(array_column($selectedSweets, 'price'));
    } while ($totalPrice > $budget);

    return $selectedSweets;
  }

  private function getSweetsLessThanBudget(array $sweets, int $budget)
  {
    return array_filter($sweets, fn($sweet) => $sweet['price'] <= $budget);
  }

  private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
  {
    $keys = array_keys($lessThanBudgetSweets);

    do {
      $randomKeys = (array) array_rand($lessThanBudgetSweets, 3);//キャストしてあげる
      $selectedSweets = $this->makeCombination($lessThanBudgetSweets, $randomKeys);
      $totalPrice = array_sum(array_column($selectedSweets, 'price'));
    } while ($totalPrice > $budget); // 

    return $randomKeys;
  }

  private function makeCombination(array $sweets, array $keys)
  {
    //ここは多次元配列として解釈する
    return array_map(fn($key) => $sweets[$key], $keys);
  }
}
