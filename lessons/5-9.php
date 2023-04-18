<?php include '../header.php'; ?>
<?php
// Lessons content
$level = '5.9';
$levellist = ['5.8', '5.9', '5.10'];
$headings = ['1. Top-rop Gradings', '2. Stamina', '3. Route Planning', '4. Helping Your Partner', 'Test Your Skills!'];
$contents = ['Climbing gym top-rope gradings generally go from 5.8 to 5.13, after a 5.9 the gradings begin to have pluses and minuses to indicate a more specific difficulty level. In this course, we are aiming to complete a 5.8 to 5.10-.
', 'As opposed to bouldering, top-rope walls are much higher, and although they often require less risky moves within the lower levels, they require a good amount of stamina. Always be looking for places to rest by keeping your arms straight, or telling your belayer to “take!” if you really need to rest. 
', 'It is often helpful to take a look at the wall before you climb to visualize how you will perform the route. Keep an eye out for any hold that might be hard to see when you are on the wall.
', 'As a belayer, you should be paying close attention to your climber and any pain points they might have. Ensure that you are always communicating with your climber and don’t be afraid to offer helpful advice since you have a different perspective of the wall. Your climber might even ask you to point out any holds that they are having trouble finding.
', 'Collect badges on your profile page and unlock a prize when you successfully complete all 3 top-roping tests.'];
$images = [['L5-8-gradings.png'], ['L5-9-stamina.png'], ['L5-9-root-planning.png'], ['L5-9-talking-to-your-climber.png'], []];
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
            <p>Welcome to top-roping module level 2! In this course you will learn:</p>

            <ol>
                <li>Top-rope Gradings</li>
                <li>Stamina</li>
                <li>Route Planning</li>
                <li>Helping Your Partner</li>
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