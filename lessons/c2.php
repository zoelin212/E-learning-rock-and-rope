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
                <img src="../images/c2.png" alt="C2 level" width="234" height="227">
            </div>
        </div>
    </div>
    <div class="lessonBox">
        <section>
            <h3>Welcome!</h3>
            <p>Welcome to bouldering module level 2! In this course you will learn:</p>

            <ol>
                <li>Save Your Energy</li>
                <li>Use Your Legs</li>
                <li>Matching</li>
                <li>Switching Your Feet</li>
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
            <h3>1. Save Your Energy</h3>
            <p>While climbing the first few times, you may feel that you are getting tired very quickly.</p>
            <div class="flexbox row center">
                <div class="imgBox lessonImgSingle">
                    <img src="../images/bouldering_images/C2-arms-straight.png" alt="Arms straight" width="1250" height="1250">
                </div>
            </div>
            <p>Ways to conserve your energy while climbing include keeping your arms straight when possible and your hips close to the wall. Avoid having your arms bent while supporting all of your weight, this is an inefficient way to climb.</p>
        </section>

        <section>
            <h3>2. Use Your Legs</h3>
            <p>Oftentimes beginner climbers will focus a lot of energy on lifting themselves up the wall using mostly their arms.</p>

            <div class="flexbox row center">
                <div class="imgBox lessonImgSingle">
                    <img src="../images/bouldering_images/C2-using-legs-1.png" alt="Using legs" width="1250" height="1250">
                </div>
            </div>
            <p>Focusing on putting weight onto your legs where possible is essential in improving your climbing technique. Remember; climbing is a full-body workout, be creative in the ways where you can take weight off of your upper body.</p>
        </section>

        <section>
            <h3>3. Matching</h3>
            <p>When there are limited holds, sometimes you will have to do what is called “matching” which is when two of your hands or feet are using the same hold.</p>
            <div class="flexbox row center">
                <div class="imgBox lessonImg">
                    <img src="../images/bouldering_images/C2-matching-1.png" alt="Matching from one hand to both hands" width="1250" height="1250">
                </div>
                <div class="imgBox lessonImg">
                    <img src="../images/bouldering_images/C2-matching-2.png" alt="Two of your hands are on the same hold" width="1250" height="1250">
                </div>
            </div>
        </section>

        <section>
            <h3>4. Switching Your Feet</h3>
            <p>Switching your feet is where one foot jumps off of a foot-hold to allow for your other foot to take its place in one fluid movement. It's likely that you have used this technique without even realizing it. This movement is essential in order to shift your weight on the wall on trickier routes.</p>
            <div class="flexbox row center">
                <div class="imgBox lessonImg">
                    <img src="../images/bouldering_images/C2-switching-left-leg.png" alt="Switching left leg" width="1250" height="1250">
                </div>
                <div class="imgBox lessonImg">
                    <img src="../images/bouldering_images/C2-switching-right-leg.png" alt="Switching right leg" width="1250" height="1250">
                </div>
            </div>
            <p>If jumping to switch your feet feels intimidating, try doing this move statically by rotating your foot over to match your feet before switching.</p>
        </section>


        <section>
            <h3>Test Your Skills!</h3>
            <p>Collect badges on your profile page and unlock a prize when you successfully complete all 3 bouldering tests.</p>
        </section>
    </div>
    <a href="../test/c2.php" class="btn_test">Take C2 Test!</a>

</main>
<?php include '../footer.php'; ?>