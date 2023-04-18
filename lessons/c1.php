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
                <img src="../images/c1.png" alt="C1 level" width="233" height="227">
            </div>
        </div>
    </div>
    <div class="lessonBox">
        <section>
            <h3>Welcome!</h3>
            <p>Welcome to bouldering module level 1! In this course you will learn:</p>

            <ol>
                <li>Safely Jump/Fall off the Wall</li>
                <li>Bouldering Grading System</li>
                <li>Starting/Finishing a Route</li>
                <li>Different Kinds of Holds</li>
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
            <h3>1. Safely Jump/Fall Off the Wall</h3>
            <p>When landing on the mats below the wall, ensure that you land on both feet with your knees bent in a squat position.</p>
            <div class="flexbox row center">
                <div class="imgBox lessonImg">
                    <img src="../images/bouldering_images/C1-landing-2.png" alt="knees bent in a squat position" width="1250" height="1250">
                </div>
                <div class="imgBox lessonImg">
                    <img src="../images/bouldering_images/C1-landing-1.png" alt="Stand up straight" width="1250" height="1250">
                </div>
            </div>
            <p>If you fall or are unprepared to land on both feet, aim to land on your butt (I mean it!). Landing on your butt is a safe alternative to the squat landing and is a completely acceptable way to land.</p>

            <div class="flexbox row center">
                <div class="imgBox lessonImgSingle">
                    <img src="../images/bouldering_images/C1-landing-5.png" alt="Landing on your butt" width="1250" height="1250">
                </div>
            </div>
            <p>Avoid landing in any unstable positions at all costs. If you were to jump off the wall onto one leg, for example, you would be at risk of spraining/twisting your ankle. If you are ever in doubt, land on your butt!</p>

            <div class="flexbox row center">
                <div class="imgBox lessonImg">
                    <img src="../images/bouldering_images/C1-landing-3.png" alt="Jump off the wall onto one leg" width="1250" height="1250">
                </div>

                <div class="imgBox lessonImg">
                    <img src="../images/bouldering_images/C1-landing-4.png" alt="Spraining/twisting your ankle" width="1250" height="1250">
                </div>
            </div>
        </section>


        <section>
            <h3>2. Bouldering Grading System</h3>
            <p>To complete a bouldering route, you are required to follow a path of the same color of rocks from a start point, to a top point. Start points for routes are designated by a label that indicates the difficulty of that climb. Our site uses a rating scale that goes from C1(easy) to C7(expert), but different gyms use variations of this system.</p>

            <div class="flexbox row center">
                <div class="imgBox lessonImgSingle">
                    <img src="../images/bouldering_images/C1-grading.png" alt="Bouldering grading" width="1250" height="1250">
                </div>
            </div>

        </section>


        <section>
            <h3>3. Starting/Finishing a Route</h3>
            <p>To begin a bouldering route, place both hands on the rock which is closest to the label that indicates the climb's rating. In some cases, a small circle will be placed next to a second starting hold indicating a “split start”. In the case of a split start, place one hand on each hold to begin the climb.</p>
            <div class="flexbox row center">
                <figure>
                    <div class="imgBox lessonImg">
                        <img src="../images/bouldering_images/C1-normal-start.png" alt="Normal Start" width="1250" height="1250">

                        <figcaption>Normal Start</figcaption>
                    </div>
                </figure>

                <figure>
                    <div class="imgBox lessonImg">
                        <img src="../images/bouldering_images/C1-split-start.png" alt="Split-Start" width="1250" height="1250">

                        <figcaption>Split-Start</figcaption>
                    </div>
                </figure>
            </div>
            <p>To successfully complete a climb, you must place both hands on the top rock, which is indicated by a “top” label.</p>
            <div class="flexbox row center">
                <div class="imgBox lessonImgSingle">
                    <img src="../images/bouldering_images/C1-top-for-red-hold.png" alt="Place both hands on the top rock" width="1250" height="1250">
                </div>
            </div>
        </section>


        <section>
            <h3>4. Different Kinds of Holds</h3>
            <p>There are many different types of rocks on climbing walls called “holds”. “Jugs” are big and easy rocks to hold onto, generally with a lot of surface area for your hand. “Side-pulls” require a counterbalance to hold onto, generally when holding a right-facing side-pull, a climber will need to lean to the left.</p>
            <div class="flexbox row center">
                <figure>
                    <div class="imgBox lessonImg">
                        <img src="../images/bouldering_images/C1-jug.png" alt="Jug" width="1250" height="1250">

                        <figcaption>Jug</figcaption>
                    </div>
                </figure>
                <figure class="flexbox row center">
                    <div class="imgBox lessonImg">
                        <img src="../images/bouldering_images/C1-side-pull.png" alt="Side-pull" width="1250" height="1250">

                        <figcaption>Side-pull</figcaption>
                    </div>
                </figure>
            </div>

            <p>“Crimps” are tiny holds that require finger strength however, they generally make better foot-holds. Two types of holds to pay attention to as a beginner are called “Lowering holds” and “Volumes”. Lowering holds are grey handle-bar-looking holds which are used to down-climb before jumping off the wall. Do not use lowering holds as part of your climbing route as they exist for safety and convenience.</p>
            <div class="flexbox row center">
                <figure>
                    <div class="imgBox lessonImg">
                        <img src="../images/bouldering_images/C1-crimp.png" alt="Crimp" width="1250" height="1250">

                        <figcaption>Crimp</figcaption>
                    </div>
                </figure>

                <figure class="flexbox row center">
                    <div class="imgBox lessonImg">
                        <img src="../images/bouldering_images/C1-lowering-hold.png" alt="Lowering hold" width="1250" height="1250">

                        <figcaption>Lowering hold</figcaption>
                    </div>
                </figure>
            </div>

            <p>Volumes, on the other hand, can be used for any route no matter the color. Volumes are large boxy protrusions of the wall that are neutrally colored and are included in the intended path of many climbing routes.</p>
            <figure class="flexbox row center">
                <div class="imgBox lessonImgSingle">
                    <img src="../images/bouldering_images/C1-volume.png" alt="Volume" width="1250" height="1250">
                    <figcaption>Volume</figcaption>
                </div>
            </figure>
        </section>

        <section>
            <h3>Test Your Skills!</h3>
            <p>Collect badges on your profile page and unlock a prize when you successfully complete all 3 bouldering tests.</p>
        </section>
    </div>
    <a href="../test/c1.php" class="btn_test">Take C1 Test!</a>

</main>
<?php include '../footer.php'; ?>