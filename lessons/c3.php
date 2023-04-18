<?php include '../header.php'; ?>
<main>
    <div class="<?php if (substr($filename[0], 0, 1) == 'C' || substr($filename[0], 0, 1) == '5') {
                    echo $className;
                } else {
                    echo $filename[0];
                } ?>_titleBox">
        <h2>Bouldering</h2>
        <div class="flexbox row center goat lessonLevel">
            <div class="imgBox">
                <img src="../images/c3.png" alt="C3 level" width="234" height="227">
            </div>
        </div>
    </div>
    <div class="lessonBox">
        <section>
            <h3>Welcome!</h3>
            <p>Welcome to bouldering module level 3! In this course you will learn:</p>

            <ol>
                <li>Dynamic Movements</li>
                <li>Overhangs</li>
                <li>Smearing</li>
                <li>Flagging</li>
            </ol>
            <div class="warmup_imgBox relative">
                <img src="../images/bouldering_images/C1-warmup.png" alt="Warm up" width="1250" height="1250">


                <a href="../pre.php" class="warmup_btn">
                    <p>Haven't warmed up?</p>
                    <p>Warm up ></p>
                </a>
            </div>
        </section>

        <section>
            <h3>1. Dynamic Movements</h3>
            <p>During more advanced climbs, you will likely run into moves that can't be executed without some sort of jump or swing. Dynamic movements or “dynos” are used when a climber propels themselves up the wall in a move that can't be performed statically. </p>
            <div class="flexbox row center">
                <div class="imgBox lessonImg">
                    <img src="../images/bouldering_images/C3-dynamic-1.png" alt="Dynamic movements - before" width="1250" height="1250">
                </div>
                <div class="imgBox lessonImg">
                    <img src="../images/bouldering_images/C3-dynamic-2.png" alt="Dynamic movements - after" width="1250" height="1250">
                </div>
            </div>
        </section>


        <section>
            <h3>2. Overhangs</h3>
            <p>Overhangs are walls that protrude outwards at an angle that often raises the difficulty level of a climb. Remember to keep your hips close to the wall, especially on overhangs as the consequences of your climbing inefficiencies will be magnified.</p>
            <div class="flexbox row center">
                <div class="imgBox lessonImgSingle">
                    <img src="../images/bouldering_images/C3-overhang.png" alt="Overhangs" width="1250" height="1250">
                </div>
            </div>
        </section>


        <section>
            <h3>3. Smearing</h3>
            <p>Certain types of routes will purposely have a lack of footholds if any at all. In some cases you may need to place your feet directly onto the wall in place of a foot-hold, this movement is called, “smearing”.</p>
            <div class="flexbox row center">
                <div class="imgBox lessonImgSingle">
                    <img src="../images/bouldering_images/C3-smearing.png" alt="Smearing" width="1250" height="1250">
                </div>
            </div>
        </section>


        <section>
            <h3>4. Flagging</h3>
            <p>When faced with a foothold on one side of the wall and nothing for the other foot, extend your leg to balance your weight evenly across the wall. This movement is called “flagging” and is used for balance and energy conservation on the wall.</p>
            <div class="flexbox row center">
                <div class="imgBox lessonImgSingle">
                    <img src="../images/bouldering_images/C3-flagging.png" alt="Flagging" width="1250" height="1250">
                </div>
            </div>
        </section>

        <section>
            <h3>Test Your Skills!</h3>
            <p>Collect badges on your profile page and unlock a prize when you successfully complete all 3 bouldering tests.</p>
        </section>
    </div>

    <a href="../test/c3.php" class="btn_test">Take C3 Test!</a>


</main>
<?php include '../footer.php'; ?>