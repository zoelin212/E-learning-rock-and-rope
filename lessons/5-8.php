<?php include '../header.php'; ?>
<?php
// Lessons content
$level = '5.8';
$levellist = ['5.8', '5.9', '5.10'];
$headings = ['1. Tying the Rope', '2. How to Belay', "", "", "", '3. Safety Checks',  '4. Belay Test', 'Test Your Skills!'];
$contents = ['When top-roping the climber will have to tie a “figure 8 follow-through knot” after the rope is fed through both loops of the climber’s harness. The first step is to take an arm’s length of rope, and next tie a basic figure 8 knot. Then, pull the end of the rope through both harness loops, and finally follow the extra rope through the original figure 8 knot to create 10 parallel lines.', 'Belayers follow a system called PBUS which stands for, “pull, brake, under, slide”. It is detrimental when belaying that your brake hand (on the bottom rope) never leaves the rope.', 'To give your climber a break or a “take”, take in the extra slack and place both hands on the bottom rope.', 'When catching your climber, sit back into your harness and place both hands on the bottom rope to break. If the climber is a lot heavier than the belayer, there are usually weight bags that belayers can clip to their harnesses to avoid being shot upward after a climber falls.', 'To lower a climber, take in all of the slack, place both hands on the bottom rope and slowly feed the rope upwards as the climber comes down.', "Before starting a climb, it is necessary to complete a series of safety checks.
<br>
For the climber:
<li>The harness is worn and tightened correctly</li>
<li>The figure 8 knot is tight and has a series of 10   parallel lines</li>
<li>There are a minimum of two fists worth of rope above the figure 8 knot</li>
<li>The rope is fed through both harness loops</li>
<br>
For the Belayer:
<li>The harness is worn and tightened correctly</li>
<li>The rope is through the ATC and locking carabiner, or the locking carabiner is through the Gregorie device.</li>
<li>The carabiner is locked and attached to the harness belay loop.</li>
<li>The rope going upwards eventually attaches to the climber and the rope going downwards is the extra rope ending in a safety knot.</li>", "You will need to pass a belay test before being certified at a climbing gym. 
<br>
Climbing Lingo:
<br>
Climber: Climbing?    =  Can I climb?
<br>
Belayer: Climb on.     =  All the safety checks have been performed and I am paying attention.
<br>
Climber: Take!  = Take in all of the slack and hold me.
<br>
Belayer: Got!  = I have taken all of the slack in and you can sit back.
<br>
Climber: Lower? = I’m ready to come down.<br>
Belayer: Lowering! = I’m lowering you.
<br>
Climber: Up-rope! = Take in the slack, the rope is too loose
<br>
Climber: Slack! = Feed some rope up, the rope is too tight.
<br>
To pass this test you will need to:
Tie a figure 8 knot
Perform all safety checks out load
Use all of the correct climbing lingo with your partner
Belay, take, catch, lower, give and take slack.<br>To pass this test you will need to:<br>

<li>Tie a figure 8 knot</li>

<li>Perform all safety checks out load</li>

<li>Use all of the correct climbing lingo with yourpartner</li>

<li>Belay, take, catch, lower, give and take slack</li>", "Collect badges on your profile page and unlock a prize when you successfully complete all 3 top-roping tests."];
$images = [['L5-8-tying-the-knot-1.png', 'L5-8-tying-the-knot-2.png', 'L5-8-tying-the-knot-3.png'], ['L5-8-belaying-1.png', 'L5-8-belaying-2.png', 'L5-8-belaying-3.png', 'L5-8-belaying-4.png', 'L5-8-belaying-5.png'], ['L5-8-taking.png'], ['L5-8-before-fall.png', 'L5-8-after-fall.png'], [], ['L5-8-safety-check-1.png', 'L5-8-safety-check-2.png', 'L5-8-safety-check-3.png'], []];
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
            <p>Welcome to top-roping module level 1! In this course you will learn:</p>

            <ol>
                <li>Tying the Rope</li>
                <li>How to Belay</li>
                <li>Safety Checks</li>
                <li>Belay Test</li>
            </ol>

            <div class="warmup_imgBox relative">
                <img src="../images/bouldering_images/C1-warmup.png" alt="Warm up" width="1250" height="1250">
                <a href="../pre.php?name=warm-up" class="warmup_btn">

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