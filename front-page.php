<?php get_header() ?>

        <div class="site-overlay"></div>

        <div class="main-wrapper push">
            <div class="pre-main ">

            </div>
            <main>

                <?php $info = get_field('main_information'); ?>

                <section class="aboutMe scrollme">
					<article class="adamParent animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="-400">

						<h2 class=title> <?php echo $info['left_title']; ?></h2>
                        <?php echo $info['left_side']; ?>
						<a class="js-scrollTo" href=".skills">my Skills.</a>

					</article><section class="webDev animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatex="400">
						<h2 class=title ><?php echo $info['right_title']; ?></h2>
						<?php echo $info['right_side']; ?>
                        <a class="js-scrollTo" href=".portfolio">projects </a>
                        <section class="swiper-container info animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatex="-500">
							<h2 class=title ><?php echo $info['bottom_title']; ?></h2>
							<div class="swiper-wrapper">
								<!-- Slides -->
								<div class="swiper-slide"><?php echo $info['bottom_side1']; ?></div>
								<div class="swiper-slide"><?php echo $info['bottom_side2']; ?></div>
								<div class="swiper-slide"><?php echo $info['bottom_side3']; ?></div>
								<div class="swiper-slide"><?php echo $info['bottom_side4']; ?></div>
							</div>
						</section>
					</section>

				</section>

                <section class="skills scrollme ">

                    <div class=" skill-list animateme" data-when="enter" data-from="1" data-to="0" data-opacity="0" data-translatex="-500" >
                        <h2 class="title">Skills</h2>
                        <div class="block ">
                            <div class="skillbar " data-percent="90" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">HTML5</span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="90" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">CSS3</span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                                <!-- End Skill Bar -->

                            <div class="skillbar" data-percent="90" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">JS</span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">ES6</span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                                <!-- End Skill Bar -->

                            <div class="skillbar" data-percent="90" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">PHP</span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                                <!-- End Skill Bar -->

                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">NODE JS </span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                                <!-- End Skill Bar -->
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">WEBGL </span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="55" data-text="Good + learning">
                                    <span class="skillbar-title" style="background: #d35400;">PYTHON</span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="70" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">REACT</span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="70" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">REDUX</span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="75" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">MYSQL</span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="70" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">MONGODB</span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="70" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #d35400;">POSTGRES</span>
                                    <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                <span class="skillbar-title" style="background: #d35400;">Vue </span>
                                <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                <span class="skillbar-title" style="background: #d35400;">VueX </span>
                                <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                <span class="skillbar-title" style="background: #d35400;">Angular </span>
                                <p class="skillbar-bar" style="background: #9ccff3;"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                                <!-- End Skill Bar -->
                        </div>
                    </div>

                    <div class="extra-list animateme" data-when="enter" data-from="1" data-to="0" data-opacity="0" data-translatex="500">

                        <p class="title">Extra </p>
                        <div class="block" >

                            <div class="skillbar" data-percent="60" data-text="Normal">
                                    <span class="skillbar-title" style="background: #2980b9">PHOTOSHOP</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="65" data-text="Normal">
                                    <span class="skillbar-title" style="background: #2980b9">C++</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                                <!-- End Skill Bar -->
                            <div class="skillbar" data-percent="70" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #2980b9">LARAVEL</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                                <!-- End Skill Bar -->
                                <div class="skillbar" data-percent="70" data-text="Good">
                                    <span class="skillbar-title" style="background: #2980b9">EXPRESS</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #2980b9">CI</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="40" data-text="Not Bad">
                                    <span class="skillbar-title" style="background: #2980b9">SYSADMIN</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #2980b9">GIT</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="60" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #2980b9">GULP</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="70" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #2980b9">WEBPACK</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="70" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #2980b9">THREEJS</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #2980b9">Apache</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="90" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #2980b9">WORDPRESS</span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                    <span class="skillbar-title" style="background: #2980b9;">eCommerce </span>
                                    <p class="skillbar-bar" style="background: #dc911b;"></p>
                                    <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                <span class="skillbar-title" style="background: #2980b9;">WooCommerce </span>
                                <p class="skillbar-bar" style="background: #dc911b;"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                <span class="skillbar-title" style="background: #2980b9;">Shopify </span>
                                <p class="skillbar-bar" style="background: #dc911b;"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <div class="skillbar" data-percent="80" data-text="Confirmed">
                                <span class="skillbar-title" style="background: #2980b9;">Yii </span>
                                <p class="skillbar-bar" style="background: #dc911b;"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <!-- End Skill Bar -->
                        </div>
                    </div>
                </section>

                <section class="portfolio ">
                    <h2 class="title">Portfolios</h2>
                    <div class="portfolio-wrapper">

                        <section class="portfolio-front scrollme animateme" data-when="enter" data-from="0.6" data-to="0" data-opacity="0" data-translatex="-1000">
                            <h2 class="hidden"> Cover Portfolio Front</h2>
                            <img class="front" src="<?php bloginfo('template_directory'); ?>/assets/alliance4.png" alt="logo of Alliance starwars">
                            <p class="captionFront">Portfolio Front <span class="under">list of my Front side projects</span>
                            </p>
                        </section><section class="front-content ">
                                <h2 class="hidden"> Portfolio Front</h2>
                                <nav class="secondary-nav-front">
                                    <ul class="portfolio-nav-list ">
                                        <li class="filter" data-filter=".category-1">Games</li>
                                        <li  class="filter" data-filter=".category-2">App</li>
                                        <li class="filter" data-filter="all">All</li>
                                    </ul>
                                </nav>
                                <ul class="front-list filter-container">
                                    <li class="mix category-1" data-myorder="1"><a href="http://demo.adam-parent.com/Cardash/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/car.jpg" alt="screenshot of Arnaud's cargame "><div class="project-caption"><p>A 3D car Game  <span class="underline">Available on server</span></p></div></a></li>
                                    <li class="mix category-2 " data-myorder="4"><a href="https://github.com/InitialCrow/chat" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/chat.jpg" alt="screenshot of Arnaud's chat "><div class="project-caption"><p>A chat client based on php API or node API<span class="underline">Available on Github</span></p></div></a></li>
                                    <li class="mix category-1" data-myorder="2"><a href="https://github.com/InitialCrow/mcAdamRush" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/mcAdamrush.jpg" alt="screenshot of mc Arnaud Rush Arnaud's game"><div class="project-caption"><p>Multiplayer games fight with your friends and switch to fight or support mode to finish level<span class="underline">available on github</span></p></div></a></li>
                                    <li class="mix category-1" data-myorder="3"><a href="https://github.com/InitialCrow/TrisRun" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/trisrun.jpg" alt="screenshot of trisrun Arnaud's game"><div class="project-caption"><p>A runner game just one thing you control the map <span class="underline">available on github</span></p></div></a></li>
                                    <li class="mix category-2 " data-myorder="4"><a href="http://demo.adam-parent.com/PixelStudio/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/PixelStudio.jpg" alt="screenshot of Arnaud's pixelStudio app "><div class="project-caption"><p>Draw with pixel studio and try my inspiration mode did without canvas  <span class="underline">Available on server</span></p></div></a></li>
                                    <li class="mix category-2 " data-myorder="4"><a href="http://projects.adam-parent.com/state-manager/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/plugin.jpg" alt="screenshot of Arnaud's stater plugin"><div class="project-caption"><p>One plugin to make a stater for html games  <span class="underline">See the home page</span></p></div></a></li>

                                </ul>
                                <button class="return btn" >Back</button>
                        </section><section  class="portfolio-back scrollme   animateme" data-when="enter" data-from="0.6" data-to="0" data-opacity="0" data-translatex="+1000">
                            <h2 class="hidden"> Cover Portfolio Back</h2>
                            <img class="back" src="<?php bloginfo('template_directory'); ?>/assets/empire3.png" alt="logo Empire of starwars">
                            <p class="captionBack">Portfolio Back<span class="under"> list of my Back side projects</span>
                        </section><section class="back-content  ">
                                <h2  class="hidden"> Portfolio Back</h2>
                                <nav class="secondary-nav-back">
                                    <ul class="portfolio-nav-list ">
                                        <li class="filter" data-filter=".category-1">Games</li>
                                        <li  class="filter" data-filter=".category-2">App</li>
                                        <li  class="filter" data-filter=".category-3">Tool</li>
                                        <li class="filter" data-filter="all">All</li>
                                    </ul>
                                </nav>
                                <ul class="back-list filter-container">
                                    <li class="mix category-2 " data-myorder="4"><a href="https://github.com/InitialCrow/chat" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/chat.jpg" alt="screenshot of Arnaud's chat app"><div class="project-caption"><p> One chat API developed with WS in nodejs and without WS in PHP  <span class="underline">Available on github</span></p></div></a></li>
                                    <li class="mix category-2 " data-myorder="4"><a href="https://github.com/InitialCrow/SpaMail"><img src="<?php bloginfo('template_directory'); ?>/assets/spamMail.jpg" alt="screenshot of Arnaud's SpaMail app"><div class="project-caption"><p>Do newsletter with this app create your contact list or import from excel for send mass mail <span class="underline">Available on github</span></p></div></a></li>
                                    <li class="mix category-2" data-myorder="2"><a href="https://github.com/InitialCrow/wpChat" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/wp-plugin.png" alt="logo of wordpress plugin"><div class="project-caption"><p>WpChat A chat wordpress plugin with admin functions<span class="underline"> Available on github </span></p></div></a></li>
                                    <li class="mix category-2" data-myorder="2"><a href="https://github.com/InitialCrow/Cloudify" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/cloud.png" alt="logo of wordpress plugin"><div class="project-caption"><p>Cloudify is a one cloud app create your account and share your files with us<span class="underline"> Available on github </span></p></div></a></li>
                                    <li class="mix category-2" data-myorder="3"><a target="blank" href="https://github.com/InitialCrow/caribbean"><img src="<?php bloginfo('template_directory'); ?>/assets/planner.jpg" alt="screenshot of Arnaud's planner app"><div class="project-caption"><p>A social Network for married <span class="underline">See on Github</span></p></div></a></li>
                                    <li class="mix category-2" data-myorder="2"><a href="https://github.com/InitialCrow/HivyLite" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/hivy.png" alt="logo of HivyLite"><div class="project-caption"><p>HivyLite is a litle search engine made with React and redux <span class="underline"> Available on github </span></p></div></a></li>
                                    <li class="mix category-3" data-myorder="2"><a href="https://github.com/InitialCrow/EzRouter" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/PHP_Logo.png" alt="logo of Ezrouter"><div class="project-caption"><p>Ezrouter is a litle router made in php for app<span class="underline"> Available on github </span></p></div></a></li>
                                </ul>
                                <button class="return btn" >Back</button>
                        </section>

                    </div>
                </section>
                <section class="pre-contact swiper-container2 ">
                    <h2 class="hidden">Citation</h2>
                    <div class="swiper-wrapper">


                        <p class="swiper-slide">If debugging is the process of removing software bugs, then programming must be the process of putting them in. - Edsger Dijkstra</p>
                        <p class="swiper-slide">Measuring programming progress by lines of code is like measuring aircraft building progress by weight - Bill Gates</p>
                        <p class="swiper-slide">Nine people can’t make a baby in a month -  Fred Brooks</p>
                        <p class="swiper-slide">When debugging, novices insert corrective code; experts remove defective code - Richard Pattis</p>
                        <p class="swiper-slide">Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program - Linus Torvalds</p>
                        <p class="swiper-slide">Programming is like sex. One mistake and you have to support it for the rest of your life. - Michael Sinz </p>
                    </div>
                </section>
                <section class="contact">

					<h2 class="title">Work with me</h2>
					<section class="social-net scrollme animateme" data-when="enter" data-from="0.6" data-to="0" data-opacity="0" data-translatex="-1000">
						<h2 class="hidden">My social tracking</h2>
						<ul class="social-list">
							<li><a href="https://drive.google.com/file/d/1tGB5HF8EmYZDJKFsgv9kww0--sTSsNqX/view?usp=sharing" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/resume.png" alt="resume"></a></li>
							<li><a href="https://www.upwork.com/freelancers/~01d7313e59b70e5ee7" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/upwork.png" alt="logo of facebook"></a></li>
							<li><a href="https://github.com/seniorDevMaster" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/github.png" alt="logo of github"></a></li>
							<li><a href="#" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/in.png" alt="logo of linkedin"></a></li>
						</ul>
					</section>
					<form class="contact-info scrollme animateme" data-when="enter" data-from="0.8" data-to="0" data-opacity="0" data-translatex="1000" method="GET">
						<label class="hidden" for="name"  >name : </label>
						<p><input id="name" type="text" placeholder="name" ></p>
						<label class="hidden" for="email">email : </label>
						<p><input type="email" id="email" placeholder="exemple@adress.ie"></p>
						<label class="hidden" for="desc">your project : </label>
						<p><textarea id="desc" rows="5" placeholder="say me mor about your request ..."></textarea></p>

						<label class="hidden" for="nameHide"  >nameHidden : </label>
						<p><input style="display:none;" id="nameHide" type="text" placeholder="name"  value="jetestlerobotilneMauraPas"></p>
						<label class="hidden" for="emailHide">emailHidden : </label>
						<p><input style="display:none;" type="text" id="emailHide" placeholder="exemple@adress.fr" value=""></p>
						<label class="hidden" for="descHide">votre projet Hidden: </label>
						<p><textarea style="display:none;" id="descHide" rows="5" value="" ></textarea></p>
						<button type="submit()"><img src="<?php bloginfo('template_directory'); ?>/assets/send.jpg" alt="logo of sending mail"><span class="under">Send</span></button>
					</form>

				</section>
            </main>
        </div><!-- wrapper -->

<?php get_footer() ?>