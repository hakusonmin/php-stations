<?php

namespace Src\Station09;

class Question
{
  public function main(): array
  {
    $users = [
      [
        'id' => 1,
        'last_name' => '山田',
        'first_name' => '太郎',
        'age' => 20,
        'password' => 'yamada',
      ],
      [
        'id' => 2,
        'last_name' => '鈴木',
        'first_name' => '次郎',
        'password' => 'suzuki',
      ],
      [
        'id' => 3,
        'last_name' => '佐藤',
        'first_name' => '花子',
        'password' => 'sato',
      ],
    ];

    $result = [];
    foreach ($users as $user) {
        $user['full_name'] = $user['last_name'] . $user['first_name'];
        if (!isset($user['age'])) {
            $user['age'] = null;
        }
        unset($user['password']);
        $result[] = $user;
    }
    return $result;
  }
}
