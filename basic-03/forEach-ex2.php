<?php

$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);

foreach ($transactions as $transactions) {
    echo "ID: " . $transactions['id'] ;
    echo "Name: " . $transactions['name'];
    echo "Email: " . $transactions['email'] . "/n";
}
