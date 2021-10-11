<?php
// using the heredoc!

$book = 'Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

$content = <<<HAND
My favorite book is $book, written by $author, and is presently a miniseries on HULU. Hulu's viewing audience is extremely excited about the miniseries and looks forward to the 5th season of the award-winning "$book!"

$actor's rendition as $character is right on! Once this content is corrected with "escapes" and nesting my variables inside '.    .'    it will display properly; my content is displayed in red (not orange), and my variables are displayed in black!!! It displays for me in IntelliJ.

Once I use "heredoc," all of my content is displayed in 'red.'
HAND;


echo $content;