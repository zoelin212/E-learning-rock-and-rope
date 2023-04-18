<?php
// $index = 'https://www.lihoworld.com/rock-and-rope/';
// $index = '../';
$index = 'https://www.zoelindev.com/rockandrope/';
$cur_dir = explode('\\', getcwd());

if (!isset($_COOKIE['roping'])) {
    setcookie("roping", "false,false,false", time() + (86400 * 360), "/");
}
if (!isset($_COOKIE['bouldering'])) {
    setcookie("bouldering", "false,false,false", time() + (86400 * 360), "/");
}

$filename = explode(".", basename($_SERVER['PHP_SELF']));
if ($filename[0] == 'index') {
    $titlename = 'HOME';
} else if ($filename[0] == 'profile') {
    $titlename = 'Profile';
} else if ($filename[0] == 'bouldering' || $filename[0] == 'roping' || $filename[0] == 'location') {
    $titlename = strtoupper($filename[0]);
} else if (substr($filename[0], 0, 1) == 'C' || substr($filename[0], 0, 1) == '5') {
    $titlename = "Level " . $filename[0];
    $className = "test";
} else {
    $titlename = 'Learn Rock Climbing With Rock & Rope';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock & Rope | <?php echo $titlename; ?></title>
    <link rel="stylesheet" href="<?php echo $index; ?>css/style.css">
    <script src="https://kit.fontawesome.com/e2110d24a9.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>


<body class="<?php if ($cur_dir[count($cur_dir) - 1] == 'lessons') {
                    echo 'lessons';
                } elseif (substr($filename[0], 0, 1) == 'C' || substr($filename[0], 0, 1) == '5') {
                    echo $className;
                } else {
                    echo $filename[0];
                } ?>">
    <header>
        <div id="banner">
            <p>Finish the courses and win a <span class="green">free climbing gift !</span></p>
        </div>
        <div id="headerWrap" class="flexbox row between relative">
            <a href="<?php echo $index; ?>"><img src="<?php echo $index; ?>images/primary-logo.svg" alt="Rock & Rope" id="logo"></a>
            
            <div id="menuToggle">
                <input type="checkbox" name="toggle" id="toggle" />
                <label for="toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <nav id="navigation" role="navigation">
                    <ul id="menu">
                        <li><a href="<?php echo $index; ?>profile.php">Profile</a></li>
                        <li><a href="<?php echo $index; ?>start.php">Start</a></li>
                        <li><a href="<?php echo $index; ?>location.php">Locations</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>