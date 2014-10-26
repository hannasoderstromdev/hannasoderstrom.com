<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hanna Söderström | <?php echo $pageTitle; ?></title>
		<link rel="stylesheet" href="css/styl/style_styl.css">
	</head>
	<body id="top">

	<div id="l-wrapper">
		<header class="main-header">
			<img class="main-header-img-hanna" src="images/hanna-header.png" alt="Hanna Söderström">
			<img class="main-header-img-icon" src="images/icons/hs-icon.png" alt="Logo">

			<h1 class="main-header-title">
				<?php if($page !== '' OR $page !== 'home'){ echo '<a href="" title="">HannaSoderstrom.com</a>'; } else { echo 'HannaSoderstrom.com'; } ?>
			</h1>
			
		</header><!-- header -->

		<nav class="main-navigation">
			<a class="rotate" href="http://hannasoderstrom.com/index.php#webdeveloper" title="">Web developer <img src="images/icons/webdevelopment.png" alt=""></a>
			<a class="rotate" href="http://hannasoderstrom.com/index.php#educator" title="">Educator <img src="images/icons/educator.png" alt=""></a>
			<a class="rotate" href="http://hannasoderstrom.com/index.php#debater" title="">Debater <img src="images/icons/debater.png" alt=""></a>
			<a class="rotate" href="http://hannasoderstrom.com/index.php#contact" title="">Contact <img src="images/icons/contact.png" alt=""></a>
		</nav><!-- nav -->

		<main>

			<section id="quotes" class="quotes">

				<blockquote class="quotes-testemony">
					
					<div class="quotes-testemony-quote">
						<p>“Hanna is extremely devoted to tasks she is given 
						and tends to finish them long before deadline and with 
						great quality.</p>
						<p>She is also very social and pragmatic, 
						frequently using her social network to hone her already 
						excellent technical skills.”</p>
					</div>

					<div class="quotes-testemony-author">
						<p class="h-card"><span class="p-name">Emil Wall</span>, <span class="p-job-title">Software Engineer</span>
						<br>Uppsala, Sweden</p>
						<img class="quotes-testemony-author-image" src="http://graph.facebook.com/erif89/picture?type=large" alt="Emil Wall">
					</div>
				</blockquote>

			

				<blockquote class="quotes-testemony">
					
					<div class="quotes-testemony-quote">
						<p>“I just want to thank you for being yourself,
						original, creative, unique and intelligent. There's
						not enough of people like you in the world.</p>
						<p> I don't know you that well, but I still want to 
						thank you for being you.”</p>
					</div>

					<div class="quotes-testemony-author">
						<p class="h-card"><span class="p-name">Lovisa Hedman</span>, <span class="p-job-title">Illustrator</span>
						<br>Linköping, Sweden</p>
						<img class="quotes-testemony-author-image" src="http://graph.facebook.com/lovisah1/picture?type=large" alt="Lovisa Hedman">
					</div>
				</blockquote>

				<blockquote class="quotes-testemony">				
					
					<div class="quotes-testemony-quote">
						<p>“I have used Hanna on many jobs. Her professionalism, 
						friendly personality, meticulous dedication to detail 
						and creative insight are a testament to her stellar 
						character and faultless work ethic.</p>
						<p>She is also able to communicate effortlessly in 
						English which allows her to directly communicate with 
						my clients here in the United States. That is a big 
						positive. A truly talented artist whom I trust from 
						across the sea”</p>	
					</div>

					<div class="quotes-testemony-author">
						<p class="h-card"><span class="p-name">Donny Sarian</span>, <br>
						<span class="p-job-title">Owner of DNS Photo &amp; Graphics <br>
						Service</span> California, USA</p>
						<img class="quotes-testemony-author-image" src="http://graph.facebook.com/donnysarian/picture?type=large" alt="Donny Sarian">
					</div>

				</blockquote>

				

			</section><!-- .quotes -->

			<section id="webdeveloper">
				
				<h1 class="webdeveloper-title">Web developer</h1>

				<div id="slider">
					<div id="slider-mask">
						<ul id="slider-inner"><?php populate_slider(); ?></ul>
					</div>
					<a href='javascript:slide("right");' id="goLeft"></a>
					<a href='javascript:slide("left");' id="goRight"></a>
				</div>
				<div id="slider-shadow"></div>
	
				<section id="skills">
					
					<div class="l-center">
						<h2>Skills</h2>
					</div>
					<div class="dark">
						<div class="l-center">

							<ul class="skills-list">
								<li>HTML5 			<strong><span>*****</span></strong></li>
								<li>CSS3			<strong><span>*****</span></strong></li>
								<li>JavaScript 		<strong><span>***</span>**</strong></li>
								<li>jQuery 			<strong><span>****</span>*</strong></li>
								<li>Resp. Design 	<strong><span>*****</span></strong></li>
							</ul>	

							<ul class="skills-list">
								<li>PHP 			<strong><span>****</span>*</strong></li>
								<li>PHP(OOP) 		<strong><span>***</span>**</strong></li>
								<li>MySQL 			<strong><span>***</span>**</strong></li>
								<li>WordPress		<strong><span>*****</span></strong></li>
								<li>CodeIgniter		<strong><span>**</span>***</strong></li>
							</ul>

							<ul class="skills-list">
								<li>Photoshop 		<strong><span>*****</span></strong></li>
								<li>Illustrator		<strong><span>***</span>**</strong></li>							
								<li>Premiere 		<strong><span>***</span>**</strong></li>
								<li>Audition 		<strong><span>***</span>**</strong></li>
								<li></li>
							</ul>

						</div>			
					</div>	
				</section>
				
				<section id="websites">
				
					<div class="l-center">
						<h2>Websites</h2>
					</div>

					<div class="dark">
						<div class="l-center websites-list">
					
							<article class="websites-site">
								<h3>Starfucked - Fetish Model</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/starfucked-600x332.jpg" alt="starfucked.net" class="website-screenshot">
									<p>Starfucked.net - Fetish model official website</p>
									<p class="website-description">Design and building of WordPress theme</p>
									<a class="website-link" href="http://starfucked.net">Starfucked.net</a>
									<ul class="website-tags">
										<li>2014</li>
										<li>Design</li>
										<li>PHP</li>
										<li>WordPress</li>
										<li>HTML</li>
										<li>CSS</li>
										<li>Responsive</li>
									</ul>
								</div>	
							</article>


							<article class="websites-site">
								<h3>Billy Lundevall</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									
									<img src="images/websites/billylundevall-600x332.jpg" alt="BillyLundevall.se" class="website-screenshot">
									<p>Illustrator, 3D artist - Billy Lundevall</p>
									<p class="website-description">Pixel perfect Wordpress Theme from design by Billy Lundevall</p>
									<a class="website-link" href="http://billylundevall.se">BillyLundevall.se</a>
									<ul class="website-tags">
										<li>2013</li>
										<li>WordPress</li>
										<li>HTML</li>
										<li>CSS</li>
									</ul>
								</div>							
							</article>

							<article class="websites-site">
								<h3>RDE Connects</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/rde-usa-600x332.jpg" alt="RDE-USA.com" class="website-screenshot">
									<p>RDE Connects - Connectors for advanced technical equipment</p>
									<p class="website-description">Design and building of website and administration system for searchable catalog</p>
									<a class="website-link" href="http://rde-usa.com">RDE-USA.com</a>
									<ul class="website-tags">
										<li>2013</li>
										<li>2014</li>
										<li>Design</li>
										<li>PHP</li>
										<li>MySQL</li>
										<li>jQuery</li>
										<li>Google API</li>
										<li>HTML</li>
										<li>CSS</li>
									</ul>
								</div>	
							</article>
					
							<article class="websites-site">
								<h3>Daniel Kopp - 3D/VFX Artist</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/koppentertainment-600x332.jpg" alt="KoppEntertainment" class="website-screenshot">
									<p>Daniel Kopp - 3D/VFX Artist</p>
									<p class="website-description">Design and building of website and administration system for searchable catalog</p>
									<a class="website-link" href="http://koppentertainment.com">KoppEntertainment.com</a>
									<ul class="website-tags">
										<li>2013</li>
										<li>Design</li>
										<li>PHP</li>
										<li>MySQL</li>
										<li>jQuery</li>
										<li>Google API</li>
										<li>HTML</li>
										<li>CSS</li>
									</ul>
								</div>	
							</article>
							
							<article class="websites-site">
								<h3>Hanna's Morph</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/hannasmorphs-600x332.jpg" alt="Hanna's Morphs" class="website-screenshot">
									<p>School Project - Concept Design</p>
									<p class="website-description">Design and building of website and administration system for searchable catalog</p>
									<a class="website-link" href="http://hannasoderstrom.com/hannasmorphs/">Hannah's Morphs</a>
									<ul class="website-tags">
										<li>2013</li>
										<li>Design</li>
										<li>PHP</li>
										<li>HTML</li>
										<li>CSS</li>
									</ul>
								</div>	
							</article>

							<article class="websites-site">
								<h3>Chris Poland</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/chrispoland-600x332.jpg" alt="Chris Poland" class="website-screenshot">
									<p>Artist Website - Guitarrist Chris Poland</p>
									<p class="website-description">Design and building of WordPress Theme, based on an album cover</p>
									<a class="website-link" href="http://chrispoland.com">ChrisPoland.com</a>
									<ul class="website-tags">
										<li>2012</li>
										<li>Design</li>
										<li>WordPress</li>
										<li>PHP</li>
										<li>MySQL</li>
										<li>HTML</li>
										<li>CSS</li>
									</ul>
								</div>	
							</article>
							
							<article class="websites-site">
								<h3>Transsexualism.se</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/transsexualism-600x332.jpg" alt="Transsexualism.se" class="website-screenshot">
									<p>Non-profit Information and community website</p>
									<p class="website-description">Design and building of WordPress Theme</p>
									<a class="website-link" href="http://transsexualism.se">Transsexualism.se</a>
									<ul class="website-tags">
										<li>2012</li>
										<li>Design</li>
										<li>WordPress</li>
										<li>PHP</li>
										<li>MySQL</li>							
										<li>HTML</li>
										<li>CSS</li>
									</ul>
								</div>	
							</article>				
							
							<article class="websites-site">
								<h3>Transition-Guide.com</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/transitionguide-600x332.jpg" alt="Transition-Guide.com" class="website-screenshot">
									<p>Non-profit Information website</p>
									<p class="website-description">Design and building of WordPress Theme</p>
									<a class="website-link" href="http://transition-guide.com">Transition-Guide.com</a>
									<ul class="website-tags">
										<li>2013</li>
										<li>Design</li>
										<li>WordPress</li>
										<li>PHP</li>									
										<li>HTML</li>
										<li>CSS</li>
									</ul>
								</div>	
							</article>	

							<article class="websites-site">
								<h3>Gothbarbie.se</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/gothbarbie-600x332.jpg" alt="gothbarbie.se" class="website-screenshot">
									<p>My Personal Blog</p>
									<p class="website-description">Design and building of WordPress Theme</p>
									<a class="website-link" href="http://gothbarbie.se">Gothbarbie.se</a>
									<ul class="website-tags">
										<li>2013</li>
										<li>Design</li>
										<li>WordPress</li>
										<li>PHP</li>							
										<li>HTML</li>
										<li>CSS</li>
									</ul>
								</div>	
							</article>
					
						</div><!-- .websites -->
					</div><!-- dark -->	
				</section>
			</section><!-- #webdeveloper -->
		
			<section id="educator">
				
				<h1 class="educator-title">Educator</h1>
				
				<div class="dark">
					<div class="educator">
						
						<div class="educator-field">
							<h3>Sharing</h3>
							
							<p>Sharing [hard] lessons learned, has always
							been an obvious thing for me to do. Being a part
							of the 'sharing is caring'-generation, it's as
							natural to me sharing artists I like as video-instructions
							on how to set up an encrypted Internet connection.</p>
						</div>
						
						<div class="educator-field">
							<h3>Creativity</h3>
						
							<p>My interests in creativity is huge and Photoshop
							is a tool I've used since I was about twelve. When
							I began there was 'tutorials' only in the form of
							images and text, but today, recording your own 
							instruction-videos and sharing them on sites like 
							<a href="http://www.youtube.com/user/HannaPhotoshop84" title="YouTube Channel">YouTube</a> is simple.</p>
						</div>
						
						<div class="educator-field">
							<h3>Self-knowledge</h3>
							
							<p>Many of the issues we have to confront in life
							are a result of lack of knowledge, in ourselfs as
							well as our sourrundings.</p>

							<ul class="educator-links">
								<li><a href="http://forum.transsexualism.se" title="TS-forum">TS-forum</a> - A forum I set up for people with transsexualism.</li>
								<li><a href="http://transsexualism.se" title="Transsexualism.se">Transsexualism.se</a> - Guides, information and news.</li>
							</ul>			
						</div>

					</div><!-- educator -->
					<div class="educator">
						<a href="images/educator/presentation.jpg" title="Presentations">
							<img class="educator-image" src="images/educator/presentation.jpg" alt="Presentations" >
						</a>

						<a href="images/educator/morph.jpg" title="Morphing">
							<img class="educator-image" src="images/educator/morph_tbn.jpg" alt="Manipulating">
						</a>

						<a href="images/educator/retouch.jpg" title="Retouching">
							<img class="educator-image" src="images/educator/retouch_tbn.jpg" alt="Retouch">
						</a>
					</div><!-- educator -->
				</div>
				
			</section><!-- .educator -->

			<section id="debater">

				<h1>Debater</h1>

				<div class="l-left-column dark">
					
					<h2>Love for ideas</h2>
					<p>Philosophy, the history of ideas, politics and social 
					science, has engaged me for a long time. To me it is
					both a matter of intellectual entertainment as well
					as engagement for single issues, that forces my engagement
					in public debate.</p>

					<h3>My Personal Story</h3>
					<p>The issue of transsexual's rights are important to
					me for obvious reasons, being of this minority.
					To end forced sterilization and the right to equal medical
					treatment no mater where you are located are two of my
					pet issues.</p>

					<h4>Articles</h4>
					<ul class="media-links">
						<li><a href="http://www.svd.se/opinion/brannpunkt/juridiskt-kon-inte-samma-som-biologiskt_6773173.svd" title="">Juridiskt kön inte samma som biologiskt</a> - (swedish) SvD Opinion</li>
					</ul>
			
					<div class="quotes">
						<blockquote class="quotes-testemony-single">
							<p>“What I've seen of Hanna throughout the last years is that she is direct and honest.”</p>

							<div class="quotes-testemony-author-single">
								<p class="h-card"><span class="p-name">Angel Rops</span>, <br>
								<span class="p-job-title">RFSL</span> Malmö, Sweden</p>
								<img class="quotes-testemony-author-image" src="http://graph.facebook.com/angel.rops/picture?type=large" alt="Angel Rops">
							</div>
						</blockquote>
					</div>
					
					<h3>A Free Internet</h3>
					<p>Internet is the biggest revolution since the Gütenberg 
					printing press. I was engaged early in the free Internet movement 
					fighting for an Internet free from politicians
					and big business controlling and limiting what should
					be free and open to everyone.</p>
					<p>My engagement peeked at the trial of The Pirate Bay and the
					protesting of the Swedish Internet mass-survailance law in 2008.
					Unfortunately most of my trust in politics died with 
					liberals voting to implement this law.</p>
		
					<h3>Liberalism in Practice</h3>
					<p>The individuals right to freedom from repression
					of the collective has been a red thread in all issues
					that engages me. I've been engaged in many issues 
					beyond the principled question of the state's existance
					and responsibilitites.</p>

					<p>Among them are the Swedish law against buying sexual
					services, the rights of sexworkers, child pornography law
					and freedom of information, war on drugs, the importance
					of evidence-based law, integration politics and the issue
					of well-fare state VS open borders.</p>

				</div><!-- .l-left-column -->

				<div class="l-right-column">
				
					<section class="opinion-maker">
						<h2>Opinion Maker</h2>
						
						<p>I write articles at <a href="http://gothbarbie.se">my own blog</a>,
						and for the online newspaper <a href="http://nyheteridag.se">Nyheter Idag</a>.</p>
					</section>
			
					<section id="media">

						<h2>Media Apparences</h2>

						<article class="media-appearence">
							<h4>Ingen behandling trots diagnos - VLT 26 Sep 2012</h4>
							<img src="images/media/vlt2012.jpg" alt="VLT">
							<ul class="media-tags">
								<li>ADHD</li>
								<li>Sjukvården</li>
								<li>Vårdgaranti</li>
							</ul>
						</article>
						
						<article class="media-appearence">
							<h4>Svenskars Hemliga Liv - TV3 Nov 2011</h4>
							<a href="http://www.tv3play.se/program/svenskars-hemliga-liv/257425">
								<img src="images/media/hemligaliv.jpg" alt="Svenskars Hemliga Liv">
							</a>
							<ul class="media-tags">
								<li>Transsexualism</li>
								<li>Könskorrigering</li>
								<li>Thailand</li>
								<li>TV</li>
							</ul>
						</article>
						
						<article class="media-appearence">
							<h4>QX Intervju - Dec 2011</h4>
							<a href="http://www.qx.se/noje/19274/pa-tv-i-kvall-hanna-foddes-med-fel-kon">
								<img src="images/media/qx2011.jpg" alt="QX Intervju">
							</a>
							<ul class="media-tags">
								<li>QX</li>
								<li>HBTQ</li>
								<li>Transsexualism</li>
							</ul>
						</article class="media-appearence">
						
						<article class="media-appearence">
							<h4>Magasinet Neo - Nr4 2010</h4>
							<img src="images/media/neo.jpg" alt="Magasinet Neo">
							<ul class="media-tags">
								<li>BDSM</li>
								<li>Feminism</li>
								<li>Sexköpslagen</li>
								<li>Kvinnosyn</li>
							</ul>
						</article>

					</section>

				</div><!-- .l-right-column -->
			</section><!-- .debater -->

			<section id="footer" class="dark">

				<section id="books">
					<h2>Books</h2>
					<p>Latest books I've read</p>
					<ul class="books-list">
						<li>
							<ul class="book-item">
								<li><strong>Title</strong></li>
								<li><strong>Content</strong></li>
								<li><strong>Rating</strong></li>
							</ul>
						</li>
						<?php getBooksList(); ?>
					</ul>

					<h2>CV</h2>
					<p><a class="cv-download" href="pdf/cv_hannasoderstrom.pdf">Download my CV</a></p>
				</section>

				<section id="contact">
				
					<h2>Contact me</h2>
					<?php 
					if(isset($errors)){
						foreach ($errors as $error) {
							echo '<p class="error">' . $error . '</p>';
						}	
					}
					?>
					<form action="?#contact" method="POST" accept-charset="utf-8">		
						
						<input type="text" name="title" class="hidden">
						
						<label for="name">Name: *
							<input id="name" type="text" name="name" value="<?php echo escape(Input::get('name')); ?>">
						</label>
						
						<label for="email">E-mail: *
							<input id="email" type="email" name="email" value="<?php echo escape(Input::get('email')); ?>">
						</label>
						
						<label for="subject">Subject: *

							<select id="subject" name="subject">
								<option value="Request Quote">Request Quote</option>
								<option value="Praise &amp; Critique">Praise &amp; Critique</option>
								<option value=""></option>
							</select>
						</label>
						
						<label for="message">Message: *
							<textarea id="message" name="message"><?php echo escape(Input::get('message')); ?></textarea>
						</label>
					
						<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
						<p class="required"><em>* Required</em></p>
						<input type="submit" value="Send">
					</form>
				

				</section><!-- .contact -->

			</section>

		</main><!-- main -->
	</div><!-- #wrapper -->

	<footer>
		&copy; <?php echo date('Y'); ?> - Hanna Söderström
	</footer><!-- footer -->

	<nav id="scrollMenu">
		<a class="rotate" href="#top" title="Back to top">Back 
			<img src="images/icons/top.png" alt="">
		</a>
		<a class="rotate" href="http://hannasoderstrom.com/index.php#webdeveloper" title="">Web developer <img src="images/icons/webdevelopment.png" alt=""></a>
		<a class="rotate" href="http://hannasoderstrom.com/index.php#educator" title="">Educator <img src="images/icons/educator.png" alt=""></a>
		<a class="rotate" href="http://hannasoderstrom.com/index.php#debater" title="">Debater <img src="images/icons/debater.png" alt=""></a>
		<a class="rotate" href="http://hannasoderstrom.com/index.php#contact" title="">Contact <img src="images/icons/contact.png" alt=""></a>
	</nav>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/hideshow.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/scrollmenu.js"></script>
	<script src="js/lightboxeffect.js"></script>

	</body>
</html>