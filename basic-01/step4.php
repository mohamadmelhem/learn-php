<?php

$name = "mohamad";
$position = "codi student";
$github_url = "https://github.com/mohamadmelhem";

// Using double quotes and the dot operator
echo "Hello, I'm $name, I'm a $position, please check my github link $github_url.";

// Using double quotes and without the dot operator
echo "Hello, I'm {$name}, I'm a {$position}, please check my github link {$github_url}.";

// Without using double quotes
echo 'Hello, I\'m '.$name.', I\'m a '.$position.', please check my github link '.$github_url.'';
