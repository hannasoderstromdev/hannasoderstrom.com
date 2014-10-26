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
			<a class="rotate" href="#webdeveloper" title="">Webbutvecklare <img src="images/icons/webdevelopment.png" alt=""></a>
			<a class="rotate" href="#educator" title="">Utbildare <img src="images/icons/educator.png" alt=""></a>
			<a class="rotate" href="#debater" title="">Debattör <img src="images/icons/debater.png" alt=""></a>
			<a class="rotate" href="#contact" title="">Kontakt <img src="images/icons/contact.png" alt=""></a>
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
						<p>“Jag vill bara tacka dig för att du är en människa 
						som är sig själv, är originell, kreativ, unik och 
						intelligent. Det finns för få såna här i världen. 
						</p>
						<p>Jag känner dig inte så väl men vill ändå tacka dig 
						för att du finns.”</p>
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
				
				<h1 class="webdeveloper-title">Webbutvecklare</h1>

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
						<h2>Färdigheter</h2>
					</div>
					<div class="dark">
						<div class="l-center">

							<ul class="skills-list">
								<li>HTML 			<strong><span>*****</span></strong></li>
								<li>CSS 			<strong><span>*****</span></strong></li>
								<li>jQuery 			<strong><span>***</span>**</strong></li>
								<li>Resp. Design 	<strong><span>*****</span></strong></li>
							</ul>	

							<ul class="skills-list">
								<li>PHP 			<strong><span>****</span>*</strong></li>
								<li>PHP(OOP) 		<strong><span>***</span>**</strong></li>
								<li>MySQL 			<strong><span>***</span>**</strong></li>
								<li>WordPress		<strong><span>*****</span></strong></li>
							</ul>

							<ul class="skills-list">
								<li>Photoshop 		<strong><span>*****</span></strong></li>
								<li>Illustrator 	<strong><span>***</span>**</strong></li>							
								<li>Video Editing 	<strong><span>***</span>**</strong></li>
								<li>Audio Editing 	<strong><span>***</span>**</strong></li>
							</ul>

						</div>			
					</div>	
				</section>
				
				<section id="websites">
				
					<div class="l-center">
						<h2>Webbsajter</h2>
					</div>

					<div class="dark">
						<div class="l-center websites-list">
					
							<article class="websites-site">
								<h3>Billy Lundevall</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									
									<img src="images/websites/billylundevall-600x332.jpg" alt="BillyLundevall.se" class="website-screenshot">
									<p>Illustratör, 3D konstnär - Billy Lundevall</p>
									<p class="website-description">Pixel-perfekt Wordpress-Theme efter design av Billy Lundevall</p>
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
									<p>RDE Connects - Kontakter för avancerad teknisk apparatur</p>
									<p class="website-description">Design och konstruktion av webbplats och administratörsgränsnitt för sökbar produktkatalog</p>
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
								<h3>Psylocke - Fetish Model</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/psylocke-600x332.jpg" alt="RDE-USA.com" class="website-screenshot">
									<p>Psylocke - Fetischmodell, portfölj och medlemssida</p>
									<p class="website-description">Design och konstruktion av WordPress-theme med medlems-plugin</p>
									<a class="website-link" href="http://psylocke.se">Psylocke.se</a>
									<ul class="website-tags">
										<li>2014</li>
										<li>Design</li>
										<li>PHP</li>
										<li>WordPress</li>
										<li>HTML</li>
										<li>CSS</li>
									</ul>
								</div>	
							</article>
							
							<article class="websites-site">
								<h3>Daniel Kopp - 3D Artist</h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/koppentertainment-600x332.jpg" alt="KoppEntertainment" class="website-screenshot">
									<p>Daniel Kopp - 3D-Konstnär</p>
									<p class="website-description">Design och konstruktion av WordPress-theme</p>
									<a class="website-link" href="http://koppentertainment.com">KoppEntertainment.com</a>
									<ul class="website-tags">
										<li>2013</li>
										<li>Design</li>
										<li>PHP</li>
										<li>MySQL</li>
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
									<p>Skolprojekt - Konceptdesign</p>
									<p class="website-description">Design och konstruktion av webbplats för ett skolprojekt.</p>
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
									<p>Artisthemsida - Gitarristen Chris Poland</p>
									<p class="website-description">Design och konstruktion av WordPress-theme, baserad på ett skivomslag.</p>
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
									<p>Ideell webbsajt med information och forum</p>
									<p class="website-description">Design och konstruktion av WordPress-theme.</p>
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
									<p>Ideell webbsajt med information</p>
									<p class="website-description">Design och konstruktion av WordPress-theme.</p>
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
									<p>Min personliga blogg</p>
									<p class="website-description">Design och konstruktion av WordPress-theme.</p>
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
				
				<h1 class="educator-title">Utbildare</h1>
				
				<div class="dark">
					<div class="educator">
						
						<div class="educator-field">
							<h3>Dela med sig</h3>
							<p>Att dela med sig av [dyrköpta] lärdomar har för 
							mig alltid varit en självklarhet. Som tillhörande 
							sharing is caring-generationen är det lika naturligt 
							att dela med sig av musik jag gillar, som 
							instruktioner för hur man sätter upp en krypterad 
							Internetanslutning.</p>			
						</div>
						
						<div class="educator-field">
							<h3>Kreativitet</h3>
							<p>Mitt kreativa intresse är stort och Photoshop är 
							ett verktyg jag hanterat sedan 12-årsåldern. När 
							jag började fanns ‘tutorials’ enbart i form av bilder 
							och texter, men idag är det enkelt att spela in egna 
							instruktionsvideos och dela dem via exempelvis 
							YouTube.</p>

							<a href="http://www.youtube.com/user/HannaPhotoshop84" title="YouTube Channel">YouTube</a> is simple.</p>
						</div>
						
						<div class="educator-field">
							<h3>Självkännedom</h3>
							
							<p>Mycket av problemen som transsexuella måste 
							hantera beror på okunskap, både hos en själv och hos 
							omgivningen.</p>
							
							<ul class="educator-links">
								<li><a href="http://forum.transsexualism.se" title="TS-forum">TS-forum</a> - Ett forum jag grundat för personer med transsexualism.</li>
								<li><a href="http://transsexualism.se" title="Transsexualism.se">Transsexualism.se</a> - Guider, information och nyheter.</li>
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

				<h1>Debattör</h1>

				<div class="l-left-column dark">
					
					<h2>Kärlek för idéer</h2>
					<p>Filosofi, idéhistoria, politik och samhällskunskap 
					har länge engagerat mig. Det är för mig både ett 
					intellektuellt nöje såväl som engagemang för enskilda 
					frågor som driver mig att delta i samhällsdebatten.</p>

					<h3>Min personliga historia</h3>
					<p>Frågan om transsexuellas rättigheter ligger mig 
					självklart nära till hands, tillhörande denna minoritet. 
					Frågan om ett slut på tvångssteriliseringar och rätten 
					till lika vård oavsett var i landet är mina främsta 
					hjärtefrågor.</p>

					<h4>Artiklar</h4>
					<ul class="media-links">
						<li><a href="http://www.svd.se/opinion/brannpunkt/juridiskt-kon-inte-samma-som-biologiskt_6773173.svd" title="">Juridiskt kön inte samma som biologiskt</a> - (swedish) SvD Opinion</li>
					</ul>
			
					<div class="quotes">
						<blockquote class="quotes-testemony-single">
							<p>“Det jag sett av Hanna de senaste åren är att hon är rak och ärlig.”</p>

							<div class="quotes-testemony-author-single">
								<p class="h-card"><span class="p-name">Angel Rops</span>, <br>
								<span class="p-job-title">RFSL</span> Malmö, Sweden</p>
								<img class="quotes-testemony-author-image" src="http://graph.facebook.com/angel.rops/picture?type=large" alt="Angel Rops">
							</div>
						</blockquote>
					</div>
					
				
					<h3>Ett fritt Internet</h3>
					<p>Internet är den största revolutionen sedan Gütenbergs
					tryckpress. Jag var tidigt engagerad i Piratrörelsen och verkade 
					för vikten av ett Internet fritt från politikers och 
					storföretags kontroll och begränsning av vad som borde vara 
					fritt tillgängligt för alla.</p>
					
					<p>Mitt engagemang nådde sin höjdpunkt under rättegången mot 
					The Pirate Bay och i protesterna mot FRA-lagen 2008. Tyvärr dog 
					mycket av min tilltro till politiker med det totala sveket, inte 
					minst hos liberaler, efter dessa erfarenheter.</p>


					<h3>Liberalism i praktiken</h3>
					<p>Individens frihet från kollektivets förtryck är 
					livsviktig för mig och en röd tråd i alla frågor som 
					engagerar mig. I frågan om statens varande och 
					ansvarsområden finns många ämnen kring praktisk 
					politik som engagerat mig, bortom de principiella 
					frågorna.</p>

					<p>Dit hör exempelvis frågor som sexköpslagen och 
					sexsäljares rättigheter, barnporrlagstiftningen och 
					informationsfrihet, narkotikapolitiken och vikten av 
					evidensbaserad lagstiftning, integrationspolitik och 
					frågan om välfärdsstaten kontra fullständig 
					rörelsefrihet.</p>

				</div><!-- .l-left-column -->

				<div class="l-right-column">
				
					<section class="opinion-maker">
						<h2>Opinionsbildare</h2>
						
						<p>Jag författar artiklar på <a href="http://gothbarbie.se">min egen blogg</a>,
						och för nyhetssajten <a href="http://nyheteridag.se">Nyheter Idag</a>.</p>
					</section>
			
					<section id="media">

						<h2>Mediaframträdanden</h2>

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
					<h2>Böcker</h2>
					<p>Senaste böckerna jag läst</p>
					<ul class="books-list">
						<li>
							<ul class="book-item">
								<li><strong>Namn</strong></li>
								<li><strong>Innehåll</strong></li>
								<li><strong>Betyg</strong></li>
							</ul>
						</li>
						<?php getBooksList(); ?>
					</ul>
				
					<h2>CV</h2>
					<p><a class="cv-download" href="pdf/cv_hannasoderstrom.pdf">Ladda ner mitt CV</a></p>
				</section>
				

				<section id="contact">

				
					<h2>Kontakta mig</h2>
					<?php 
					if(isset($errors)){
						foreach ($errors as $error) {
							echo '<p class="error">' . $error . '</p>';
						}	
					}
					?>
					<form action="?#contact" method="POST" accept-charset="utf-8">		
						
						<input type="text" name="title" class="hidden">
						
						<label for="name">Namn: *
							<input id="name" type="text" name="name" value="<?php echo escape(Input::get('name')); ?>">
						</label>
						
						<label for="email">E-post: *
							<input id="email" type="email" name="email" value="<?php echo escape(Input::get('email')); ?>">
						</label>
						
						<label for="subject">Ämne: *

							<select id="subject" name="subject">
								<option value="Request Quote">Begär offert</option>
								<option value="Praise &amp; Critique">Beröm &amp; kritik</option>
							</select>
						</label>
						
						<label for="message">Meddelande: *
							<textarea id="message" name="message"><?php echo escape(Input::get('message')); ?></textarea>
						</label>
					
						<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
						<p class="required"><em>* Obligatoriskt</em></p>
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
		<a class="rotate" href="#top" title="Back to top">Upp 
			<img src="images/icons/top.png" alt="">
		</a>
		<a class="rotate" href="#webdeveloper" title="">Webbutvecklare <img src="images/icons/webdevelopment.png" alt=""></a>
		<a class="rotate" href="#educator" title="">Utbildare <img src="images/icons/educator.png" alt=""></a>
		<a class="rotate" href="#debater" title="">Debattör <img src="images/icons/debater.png" alt=""></a>
		<a class="rotate" href="#contact" title="">Kontakt <img src="images/icons/contact.png" alt=""></a>
	</nav>

	<div id="backdrop">
		<div id="close">x</div>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/hideshow.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/scrollmenu.js"></script>
	<script src="js/lightboxeffect.js"></script>

	</body>
</html>