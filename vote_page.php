<?php

include('inc/vote.db.php');
include('inc/vote.class.php');

$vote = new Vote();

echo $vote->Link('xtremetop100');

?>
