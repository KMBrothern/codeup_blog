<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h1>Your roll is, <?php echo $guess ?>!</h1>
    <h1>The random roll is, <?php echo $random ?>!</h1>
<?php if ($guess == $random) : ?>
    <h1><?php echo "You Win!!" ?></h1>
<?php else : ?>
    <h1><?php echo "You Lose x_x" ?></h1>
<?php endif; ?>
</body>
</html>