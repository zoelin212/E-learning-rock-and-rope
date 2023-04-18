<?php include '../header.php'; ?>
<?php
// Lessons content
$level = '5.10';
$levellist = ['5.8', '5.9', '5.10'];
$headings = ['1. Don’t Waste Energy', '2. Be Graceful ', '3. Look for Footholds', '4. Dynamic Movements', 'Test Your Skills!'];
$contents = ['Especially when it comes to taller walls you want to maximize the efficiency of your moves. Avoid unnecessary high-steps or dynamic movements when you have a lot of good holds at your disposal.
', 'Being graceful on the wall is not only going to make you look like you know what you are doing on the wall, but it is going to help you climb more efficiently. Be mindful of your balance and body placement on the wall at all times.', 'Beginner climbers will often over-rely on their arms and hand-holds to lift themselves up the wall leading to early exhaustion. Bringing your feet up to the next foot-hold before reaching for the up with your arms will often help with your efficiency.
', 'Once you understand where dynamic movements are appropriate, they will be necessary where static movements can not be performed. Generally, you should start in a low position that can easily be held before propelling yourself upwards using your whole body. If you feel like this is a risky movement, warn your belayer to be ready to catch you.
', 'Collect badges on your profile page and unlock a prize when you successfully complete all 3 top-roping tests.'];
$images = [['L5-10-overexertion.png', 'L5-10-sustainable-movement.png'], ['L5-10-graceful.png'], ['L5-10-footholds.png'], ['L5-10-dino-1.png', 'L5-10-dino-2.png']];
?>
<main>

    <div class="<?php if (substr($filename[0], 0, 1) == 'C' || substr($filename[0], 0, 1) == '5') {
                    echo $className;
                } else {
                    echo $filename[0];
                } ?>_titleBox">

        <h2>Top-roping</h2>
        <div class="flexbox row center goat lessonLevel">
            <div class="imgBox">
                <img src="../images/<?php echo $level; ?>.png" alt="top-roping <?php echo $level; ?> badge">
            </div>
        </div>
    </div>
    <div class="lessonBox">
        <section id="lessonsIntroduction">
            <h3>Welcome!</h3>
            <p>Welcome to top-roping module level 3! In this course you will learn:</p>

            <ol>
                <li>Don’t Waste Energy</li>
                <li>Be Graceful</li>
                <li>Look for Footholds</li>
                <li>Dynamic Movements</li>
            </ol>

            <div class="warmup_imgBox relative">
                <img src="../images/bouldering_images/C1-warmup.png" alt="Warm up" width="1250" height="1250">


                <a href="../pre.php" class="warmup_btn">
                    <p>Haven't warmed up?</p>
                    <p>Warm up ></p>
                </a>
            </div>
        </section>

        <section id="lessonsContainer">
            <?php


            for ($i = 0; $i < count($headings); $i++) {
                echo '<section>';
                if ($headings[$i] != "") {
                    echo '<h3>' . $headings[$i] . '</h3>';
                }
                echo '<p>' . $contents[$i] . '</p>';
                echo '<div class="grid">';
                if (!empty($images[$i])) {
                    foreach ($images[$i] as $val) {
                        echo '<div class="imgbox"><img src="../images/roping_images/' . $val . '" alt="' . str_replace("-", " ", explode(".", $val)[0]) . '" width="150" height="150"></div>';
                    }
                }
                echo '</div>';
                echo '</section>';
            }
            ?>
        </section>
    </div>

    <a href="../test/<?php echo str_replace(".", "-", $levellist[array_search($level, $levellist)]); ?>.php" class="btn_test">Take <?php echo $level; ?> Test</a>
</main>
<?php include '../footer.php'; ?>