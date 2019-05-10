<?php

/* Player Block Template. */

$photo = get_field('player_photo') ?: 'http://localhost:8888/ieatwebsites-v2/wp-content/uploads/2019/05/placeholder.png';
$name = get_field('player_name') ?: 'Player name here...';
$number = get_field('player_number') ?: 'Player number here...';

?>

<div class="player">
    <img class="player-photo" src="<?php echo $photo; ?>"/>
    <p class="player-name"><?php echo $name; ?></p>
    <p class="player-number">#<?php echo $number; ?></p>
</div>