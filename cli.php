<?php

require_once('vendor/autoload.php');

$starter = new PhpTest\App();
$climate = new League\CLImate\CLImate;

$climate->lightGreen('Welcome to the Twitch.tv top games sorter');
$climate->br();

$input = $climate->input('How many of the top games do you want to fetch?');

$numberOfGames = $input->prompt();

while (!is_numeric($numberOfGames)) {
    $climate->red('Must be a number');
    $numberOfGames = $input->prompt();
}

$climate->br();

$input = $climate->input('What would you like to sort by?');
$input->accept(['channels', 'viewers'], true);
$sortBy = $input->prompt();

$climate->br();

$input = $climate->input('What order do you want it sorted?');
$input->accept(['desc', 'asc'], true);
$order = $input->prompt();

$climate->br();
$climate->lightGreen('Running program...');

$starter->run($numberOfGames, $sortBy, $order);

$climate->br();
$climate->lightGreen('Completed');
