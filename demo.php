<?php 
$messages = [
  [
    'from' => 'John',
    'title' => 'Rendez-vous urgent !'
  ],
  [
    'from' => 'Sarah',
    'title' => 'Tu as vu le match d\'hier ?'
  ],
  [
    'from' => 'John',
    'title' => 'Le client est ravi =) !'
  ],
  [
    'from' => 'John',
    'title' => 'Prêt pour la mise en production ?'
  ],
  [
    'from' => 'Robert',
    'title' => 'Tu es le 1000000 visiteur, tu as gagné un smartphone !'
  ],
];

$messagesCount = count($messages);
for ($i = 0; $i < $messagesCount; $i++) {
  if ($messages[$i]['from'] === 'John') {
    echo '<li>'.$messages[$i]['title'].'</li>';
  };
}