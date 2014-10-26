<?php 
/*
	1. Check/set user language
	2. Check currentPage
	3. Load content

*/

session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', true);
include('core/init.php');

// Check if Input has been submitted (exist() defaults to 'POST')
if(Input::exists()){

	// Check for valid token
	if(Token::check(Input::get('token'))) {

		// Run validation
		$validate = new Validate();
		
		$validate->check($_POST, array(
			'title'				=>	array(
				'spamcheck'	=>	true
			),
			'name'			=> array(
				'required'	=> 	true,
				'name'		=>	'Name',
				'min'		=> 	2
			),
			'subject'		=> array(
				'required'	=> 	true,
				'name'		=>	'Subject'
			),
			'message'		=> array(
				'required'	=> 	true,
				'name'		=>	'Message',
				'min'		=>	6
			),
			'email'				=> array(
				'required'	=> 	true,
				'name'		=>	'E-mail',
				'min'		=> 	6
			)
		));

		// If it passes validation
		if($validate->passed()){

			// Send data via e-mail to recipient
			$to = "info@hannasoderstrom.com";
			$subject = escape(Input::get('subject'));
			$message = escape(Input::get('message'));
			$from = escape(Input::get('name')) . " <" . escape(Input::get('email')) . "> \r\n";
			$headers = "From:" . $from;
			$headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";
			$headers .= "Mime-Version: 1.0 \r\n";
			$headers .= "Content-Transfer-Encoding: quoted-printable \r\n";
			if(mail($to,$subject,$message,$headers)){

				echo 'Success!';

			} else {
				die('N&aring;got gick fel, var god f&ouml;rs&ouml;k igen.');
			}
		
		} else {
			$errors = $validate->errors();
		}
	}
}


$language = '';

if(isset($_GET['en']))
{
	$language = 'en';
} 
elseif(isset($_GET['se']))
{
	$language = 'se';
} else {
	$language = 'en';
}

$pageTitle = ''; 					// Title of the current page
$pageDescription = ''; 				// Description of the current page

$data_en = array(

	'menu-webdeveloper' => 'Web developer',
	'menu-educator'     => 'Educator',
	'menu-debater'      => 'Debater',
	'menu-contact'      => 'Contact',

	'testemony2' 		=> '<p>“I just want to thank you for being yourself,
							original, creative, unique and intelligent. There\'s
							not enough of people like you in the world.</p>
							<p> I don\'t know you that well, but I still want to 
							thank you for being you.”</p>',

	'webdeveloper' 		=> 'Web developer',
	'skills' 			=> 'Skills',
	'websites' 			=> 'Websites',

	'site-title-exarb' 			=> 'Examination Project',
	'site-text-exarb' 			=> '<p>PlayTime - A game/utility app for making daily tasks more fun.</p>',
	'site-description-exarb' 	=> 'Design, planning, construction',

	'site-title-starfucked' 		=> 'Starfucked - Fetish Model',
	'site-text-starfucked' 			=> '<p>Starfucked.net - Fetish model official website</p>',
	'site-description-starfucked' 	=> 'Design and building of WordPress theme',

	'site-title-billylundevall' 		=> 'Billy Lundevall',
	'site-text-billylundevall' 			=> '<p>Illustrator, 3D artist - Billy Lundevall</p>',
	'site-description-billylundevall' 	=> 'Pixel perfect Wordpress Theme from design by Billy Lundevall',

	'site-title-rde' 		=> 'RDE Connects',
	'site-text-rde' 		=> '<p>RDE Connects - Connectors for advanced technical equipment</p>',
	'site-description-rde' 	=> 'Design and building of website and administration system for searchable catalog',

	'site-title-kopp' 		=> 'Daniel Kopp - 3D/VFX Artist',
	'site-text-kopp' 		=> '<p>Daniel Kopp - 3D/VFX Artist</p>',
	'site-description-kopp' => 'Design and building of website',

	'site-title-morph' 		=> 'Hanna\'s Morph',
	'site-text-morph' 		=> '<p>School Project - Concept Design</p>',
	'site-description-morph'=> 'Design and building of website',

	'site-title-poland' 		=> 'Chris Poland',
	'site-text-poland' 			=> '<p>Artist Website - Guitarrist Chris Poland</p>',
	'site-description-poland'	=> 'Design and building of WordPress Theme, based on an album cover',
	
	'site-title-ts' 		=> 'Transsexualism.se',
	'site-text-ts' 			=> '<p>Non-profit Information and community website</p>',
	'site-description-ts'	=> 'Design and building of WordPress Theme',		

	'site-title-gothbarbie' 		=> 'Gothbarbie.se',
	'site-text-gothbarbie' 			=> '<p>My Personal Blog</p>',
	'site-description-gothbarbie'	=> 'Design and building of WordPress Theme',		
					
	'educator' 					=> 'Educator',
	'educator-field-sharing' 	=> 'Sharing',
	'educator-sharing-text' 	=> '<p>Sharing [hard] lessons learned, has always
									been an obvious thing for me to do. Being a part
									of the \'sharing is caring\'-generation, it\'s as
									natural to me sharing artists I like as video-instructions
									on how to set up an encrypted Internet connection.</p>',

	'educator-field-creativity' => 'Creativity',
	'educator-creativity-text' 	=> '<p>My interests in creativity is huge and Photoshop
									is a tool I\'ve used since I was about twelve. When
									I began there was \'tutorials\' only in the form of
									images and text, but today, recording your own 
									instruction-videos and sharing them on sites like 
									<a href="http://www.youtube.com/user/HannaPhotoshop84" title="YouTube Channel">YouTube</a> is simple.</p>',

	'educator-field-selfknowledge' 	=> 'Self-knowledge',
	'educator-selfknowledge-text' 	=> '<p>Many of the issues we have to confront in life
										are a result of lack of knowledge, in ourselfs as
										well as our sourrundings.</p>',
	'educator-selfknowledge-link1'	=> 'A forum I set up for people with transsexualism.',
	'educator-selfknowledge-link2'	=> 'Guides, information and news.',


	'debater' 						=> 'Debater',

	'debater-field-loveforideas' 	=> 'Love for ideas',
	'debater-loveforideas-text' 	=> '<p>Philosophy, the history of ideas, politics and social 
										science, has engaged me for a long time. To me it is
										both a matter of intellectual entertainment as well
										as engagement for single issues, that forces my engagement
										in public debate.</p>',
	
	'debater-field-personal' 		=> 'My Personal Story',
	'debater-personal-text' 		=> '<p>The issue of transsexual\'s rights are important to
										me for obvious reasons, being of this minority.
										To end forced sterilization and the right to equal medical
										treatment no mater where you are located are two of my
										pet issues.</p>',

	'article'						=> 'Articles',


	'angel-quote' => '<p>“What I\'ve seen of Hanna throughout the last years is that she is direct and honest.”</p>',

		
	'a-free-internet' 		=> 'A Free Internet',
	'a-free-internet-text' 	=> '<p>Internet is the biggest revolution since the Gütenberg 
								printing press. I was engaged early in the free Internet movement 
								fighting for an Internet free from politicians
								and big business controlling and limiting what should
								be free and open to everyone.</p>
								<p>My engagement peeked at the trial of The Pirate Bay and the
								protesting of the Swedish Internet mass-survailance law in 2008.
								Unfortunately most of my trust in politics died with 
								liberals voting to implement this law.</p>',

	'liberalism' 			=> 'Liberalism in Practice',
	'liberalism-text' 		=> '<p>The individuals right to freedom from repression
								of the collective has been a red thread in all issues
								that engages me. I\'ve been engaged in many issues 
								beyond the principled question of the state\'s existance
								and responsibilitites.</p>

								<p>Among them are the Swedish law against buying sexual
								services, the rights of sexworkers, child pornography law
								and freedom of information, war on drugs, the importance
								of evidence-based law, integration politics and the issue
								of well-fare state VS open borders.</p>',

	'opinion-maker' 		=> 'Opinion Maker',
	'opinion-maker-text'	=> '<p>I write articles at <a href="http://gothbarbie.se">my own blog</a>,
								and for the online newspaper <a href="http://nyheteridag.se">Nyheter Idag</a>.</p>',

	'media' => 'Media Apparences',

	'books' 		=> 'Books',
	'books-text' 	=> '<p>Latest books I\'ve read</p>',
	'books-title'	=> 'Title',
	'books-content' => 'Content',
	'books-rating' 	=> 'Rating',

	'contact' => 'Contact me',
	'contact-name' => 'Name',
	'contact-email' => 'Email',
	'contact-subject' => 'Subject',
	'contact-subject-1' => 'Request Quote',
	'contact-subject-2' => 'Praise &amp; Critique',
	'contact-message' => 'Message',
	'contact-required' => 'Required',

	'back' => 'Back',

	'skills-html5-image'       => '<img src="images/details/html5.png" alt="html5">',
	'skills-html5-title'       => 'HTML5',
	'skills-html5-text'        => '<p>HTML5 is the latest standard of semantic content markup for the web and incorporates new elements for video and graphics in 2D as well as 3D.</p>',
	
	'skills-css3-image'        => '<img src="images/details/css3.png" alt="css3">',
	'skills-css3-title'        => 'CSS3',
	'skills-css3-text'         => '<p>CSS3 is the latest standard for Cascading Style-Sheets, used for design and layout of content.<br>
									It can be used for animations in 2D and 3D, as the icons in the main menu of this website.</p>',
	
	'skills-javascript-image'  => '<img src="images/details/javascript.png" alt="JavaScript">',
	'skills-javascript-title'  => 'JavaScript',
	'skills-javascript-text'   => '<p>JavaScript is used to manipulate content from the browser. It can be used to validate input and to produce graphics in the HTML5 Canvas-element.</p>',
	
	'skills-jquery-image'      => '<img src="images/details/jquery.png" alt="jQuery">',
	'skills-jquery-title'      => 'jQuery',
	'skills-jquery-text'       => '<p>jQuery is a plugin for JavaScript that simplifies anything you want to do, as the hiding and showing of content or the image slide-shows on this website.</p>',
	
	'skills-respdesign-image'  => '<img src="images/details/respd.png" alt="responsive design">',
	'skills-respdesign-title'  => 'Responsive Design',				
	'skills-respdesign-text'   => '<p>Modern websites needs to adjust its content to displays ranging from small cell phones to 50" TV screens. This is achieved by making the design responsive and fluid, so no matter the size of your screen, the content adapts to give you a pleasent experience.</p>',
	
	'skills-phpoop-image'      => '<img src="images/details/phpoop.png" alt="PHP OOP">',
	'skills-phpoop-title'      => 'Object Oriented PHP',
	'skills-phpoop-text'       => '<p>Structuring code in Objects make re-using and adding modules of new functionality a lot easier. This is a fundamental part of modern web frameworks and applications.</p>',
	
	'skills-mysql-image'       => '<img src="images/details/mysql.png" alt="mysql">',
	'skills-mysql-title'       => 'MySQL',
	'skills-mysql-text'        => '<p>Storing data in databases is fundamental for any interactive website today. But storing data is also about efficency. I use the open and well established MySQL database and optimize the structure of data to keep it fast <em>and</em> adaptable.</p>',
	
	'skills-wordpress-image'   => '<img src="images/details/wordpress.png" alt="WordPress">',
	'skills-wordpress-title'   => 'WordPress',
	'skills-wordpress-text'    => '<p>WordPress is a free and open-source content manager service (CMS) that makes it easy for anyone to update and maintain the content of a website. This is my first choise for most clients and I\'ve used it in many of my projects.</p>',
	
	'skills-codeigniter-image' => '<img src="images/details/codeigniter.png" alt="CodeIgniter">',
	'skills-codeigniter-title' => 'CodeIgniter',
	'skills-codeigniter-text'  => '<p>Structuring code can be a hassle and as early as in the 70\'s some smart people came up with the MVC pattern. Since then, many frameworks has been developed. CodeIgniter is small, fast and easy to get going with for any web application.</p>',
	
	'skills-photoshop-image'   => '<img src="images/details/photoshop.png" alt="Photoshop">',
	'skills-photoshop-title'   => 'Photoshop',
	'skills-photoshop-text'    => '<p>My first time in Photoshop was at the age of twelve. Since then, I\'ve probably spent more time in this software than any other. Be it to <strong>retouch photos</strong>, <strong>design websites</strong>, making <strong>graphics for ads</strong> or just making art for the fun of it.</p>',
	
	'skills-illustrator-image' => '<img src="images/details/illustrator.png" alt="Illustrator">',
	'skills-illustrator-title' => 'Illustrator',
	'skills-illustrator-text'  => '<p>With responsive designs the need to design websites with vector based art has become more important. Today this is my main tool for designing a website.</p>',
	
	'skills-premiere-image'    => '<img src="images/details/premiere.png" alt="Premiere">',
	'skills-premiere-title'    => 'Premiere',
	'skills-premiere-text'     => '<p>Whenever I need to cut, edit or render videos, this is my main tool. I can\'t say I\'m as comfortable to work with it as Photoshop, but I definetly know the basics of it very well.</p>',
	
	'skills-audition-image'    => '<img src="images/details/audition.png" alt="Audition">',
	'skills-audition-title'    => 'Audition',
	'skills-audition-text'     => '<p>I\'ve spent a lot of time recording music with friends and we started out in Cool Edit, which later became Audition when Adobe bought it. I don\'t write music often today, but it\'s like riding a bike. You never forget how.</p>',
	
	'skills-sublime-image'     => '<img src="images/details/sublime.png" alt="Sublime Text 3">',
	'skills-sublime-title'     => 'Sublime Text 3',
	'skills-sublime-text'      => '<p>At the age of twelve (or thereabout) I started making simple websites in Front Page 2000. I later learned to use Dreamweaver. Since then, almost two decades has past and a lot has happened.
									Today my main tool for programming anything (HTML, JavaScript, PHP) is Sublime Text 3. I can\'t praise this software highly enough.</p>'

);

$data_sv = array(

		'menu-webdeveloper' => 'Webbutvecklare',
		'menu-educator'     => 'Utbildare',
		'menu-debater'      => 'Debattör',
		'menu-contact'      => 'Kontakt',

		'testemony2' 		=> '<p>“Jag vill bara tacka dig för att du är en människa 
								som är sig själv, är originell, kreativ, unik och 
								intelligent. Det finns för få såna här i världen. 
								</p>
								<p>Jag känner dig inte så väl men vill ändå tacka dig 
								för att du finns.”</p>',

		'webdeveloper' 		=> 'Webbutvecklare',
		'skills' 			=> 'Färdigheter',
		'websites' 			=> 'Webbsajter',

		'site-title-exarb' 			=> 'Examensarbete',
		'site-text-exarb' 			=> '<p>PlayTime - Ett verktyg för att gamifiera vardagens tråkiga rutiner.</p>',
		'site-description-exarb' 	=> 'Design, planering, konstruktion',

		'site-title-starfucked' 		=> 'Starfucked - Fetish Model',
		'site-text-starfucked' 			=> '<p>Starfucked.net - Officiell webbsajt för fetishmodellen Starfucked</p>',
		'site-description-starfucked' 	=> 'Design och konstruktion av WordPress-tema',

		'site-title-billylundevall' 		=> 'Billy Lundevall',
		'site-text-billylundevall' 			=> '<p>Illustratör, 3D-konstnär - Billy Lundevall</p>',
		'site-description-billylundevall' 	=> 'Pixel-perfekt Wordpress-tema baserad på design av Billy Lundevall',

		'site-title-rde' 		=> 'RDE Connects',
		'site-text-rde' 		=> '<p>RDE Connects - Kontakter för avancerad apparatur</p>',
		'site-description-rde' 	=> 'Design och konstrukton av webbsajt samt administrationssystem för hantering av sökbara artiklar i webbsidans onlinekatalog',

		'site-title-kopp' 		=> 'Daniel Kopp - 3D/VFX Artist',
		'site-text-kopp' 		=> '<p>Daniel Kopp - 3D/VFX-konstnär</p>',
		'site-description-kopp' => 'Design och konstruktion av webbsida',

		'site-title-morph' 		=> 'Hanna\'s Morph',
		'site-text-morph' 		=> '<p>Skolprojekt - Konceptuell design av responsiv webbsida</p>',
		'site-description-morph'=> 'Design och konstruktion av webbsida',

		'site-title-poland' 		=> 'Chris Poland',
		'site-text-poland' 			=> '<p>Webbsida åt gitarristen Chris Poland</p>',
		'site-description-poland'	=> 'Design och konstruktion av WordPress-tema, baserad på ett albumomslag',
		
		'site-title-ts' 		=> 'Transsexualism.se',
		'site-text-ts' 			=> '<p>Ideell informationssajt med forum</p>',
		'site-description-ts'	=> 'Design och konstruktion av WordPress-tema',		

		'site-title-gothbarbie' 		=> 'Gothbarbie.se',
		'site-text-gothbarbie' 			=> '<p>Min blogg</p>',
		'site-description-gothbarbie'	=> 'Design och konstruktion av WordPress-tema',		
						
		'educator' 					=> 'Utbildare',
		'educator-field-sharing' 	=> 'Dela med sig',
		'educator-sharing-text' 	=> '<p>Att dela med sig av [dyrköpta] lärdomar har för 
										mig alltid varit en självklarhet. Som tillhörande 
										sharing is caring-generationen är det lika naturligt 
										att dela med sig av musik jag gillar, som 
										instruktioner för hur man sätter upp en krypterad 
										Internetanslutning.</p>',

		'educator-field-creativity' => 'Kreativitet',
		'educator-creativity-text' 	=> '<p>Mitt kreativa intresse är stort och Photoshop är 
										ett verktyg jag hanterat sedan 12-årsåldern. När 
										jag började fanns ‘tutorials’ enbart i form av bilder 
										och texter, men idag är det enkelt att spela in egna 
										instruktionsvideos och dela dem via exempelvis 
										<a href="http://www.youtube.com/user/HannaPhotoshop84" title="YouTube Channel">YouTube</a>.</p>',

		'educator-field-selfknowledge' 	=> 'Självkännedom',
		'educator-selfknowledge-text' 	=> '<p>Mycket av problemen som transsexuella måste 
											hantera beror på okunskap, både hos en själv och hos 
											omgivningen.</p>',
		'educator-selfknowledge-link1'	=> 'Ett forum jag grundat för personer med transsexualism.',
		'educator-selfknowledge-link2'	=> 'Guider, information och nyheter.',

		'debater' 						=> 'Debattör',

		'debater-field-loveforideas' 	=> 'Kärlek för idéer',
		'debater-loveforideas-text' 	=> '<p>Filosofi, idéhistoria, politik och samhällskunskap 
											har länge engagerat mig. Det är för mig både ett 
											intellektuellt nöje såväl som engagemang för enskilda 
											frågor som driver mig att delta i samhällsdebatten.</p>',
		
		'debater-field-personal' 		=> 'Min personliga historia',
		'debater-personal-text' 		=> '<p>Frågan om transsexuellas rättigheter ligger mig 
											självklart nära till hands, tillhörande denna minoritet. 
											Frågan om ett slut på tvångssteriliseringar och rätten 
											till lika vård oavsett var i landet är mina främsta 
											hjärtefrågor.</p>',

		'article'						=> 'Artiklar',

		'angel-quote' 			=> '<p>“Det jag sett av Hanna de senaste åren är att hon är rak och ärlig.”</p>',

		'a-free-internet' 		=> 'Ett fritt Internet',
		'a-free-internet-text' 	=> '<p>Internet är den största revolutionen sedan Gütenbergs
									tryckpress. Jag var tidigt engagerad i Piratrörelsen och verkade 
									för vikten av ett Internet fritt från politikers och 
									storföretags kontroll och begränsning av vad som borde vara 
									fritt tillgängligt för alla.</p>
									
									<p>Mitt engagemang nådde sin höjdpunkt under rättegången mot 
									The Pirate Bay och i protesterna mot FRA-lagen 2008. Tyvärr dog 
									mycket av min tilltro till politiker med det totala sveket, inte 
									minst hos liberaler, efter dessa erfarenheter.</p>',

		'liberalism' 			=> 'Liberalism i praktiken',
		'liberalism-text' 		=> '<p>Individens frihet från kollektivets förtryck är 
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
									rörelsefrihet.</p>',		

		'opinion-maker' 		=> 'Opinionsbildare',
		'opinion-maker-text'	=> '<p>Jag författar artiklar på <a href="http://gothbarbie.se">min egen blogg</a>,
									och för nyhetssajten <a href="http://nyheteridag.se">Nyheter Idag</a>.</p>',

		'media' => 'Mediaframträdanden',

		'books' 		=> 'Böcker',
		'books-text' 	=> '<p>Senaste böckerna jag läst</p>',
		'books-title'	=> 'Titel',
		'books-content' => 'Innehåll',
		'books-rating' 	=> 'Betyg',

		'contact' => 'Kontakta mig',
		'contact-name' => 'Namn',
		'contact-email' => 'Epost',
		'contact-subject' => 'Ämne',
		'contact-subject-1' => 'Begär prisuppgift',
		'contact-subject-2' => 'Beröm &amp kritik',
		'contact-message' => 'Meddelande',
		'contact-required' => 'Obligatoriskt',

		'back' => 'Tillbaka',

		'skills-html5-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-html5-title'       => 'HTML5',
		'skills-html5-text'        => '<p>HTML5 är den nyaste standarden för semantisk formattering av innehåll för nätet och innehåller flera nya element för video och grafik i såväl 2D som 3D.</p>',
		
		'skills-css3-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-css3-title'        => 'CSS3',
		'skills-css3-text'         => '<p>CSS3 är den nyaste standarden för "Cascading Style-Sheets", som används för layout och design.<br>
										Det kan användas för animationer i såväl 2D som 3D, som exempelvis ikonerna i huvudmenyn på den här webbplatsen.</p>',
		
		'skills-javascript-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-javascript-title'  => 'JavaScript',
		'skills-javascript-text'   => '<p>JavaScript används för att manipulera innehåll från webbläsaren. Det kan användas till att från att säkerhetskontrollera information till att skapa grafik i HTML5-elementet Canvas.</p>',
		
		'skills-jquery-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-jquery-title'      => 'jQuery',
		'skills-jquery-text'       => '<p>jQuery är ett plugin för JavaScript som förenklar annars avancerade funktioner som att dölja och visa innehåll med en knapptryckning, eller för att göra slideshows med bilder, båda exemplen används på denna webbplats.</p>',
		
		'skills-respdesign-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-respdesign-title'  => 'Responsiv Design',				
		'skills-respdesign-text'   => '<p>Moderna webbplatser måste kunna ses på alltifrån en liten mobilskärm till en stor 50-tums-TV. Det uppnår man genom att göra designen responsiv och flytande, så innehållet alltid anpassar sig för att ge en optimal upplevelse oavsett förutsättningar.<br>
										Testa ändra storleken på webbläsaren och se vad som  händer med innehållet!</p>',
		
		'skills-phpoop-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-phpoop-title'      => 'Objektorienterad PHP',
		'skills-phpoop-text'       => '<p>Att strukturera kod i objekt gör det betydligt enklare att återanvända kod och lägga till ny funktionalitet. Det här är en fundamental del av att skapa moderna webbplatser och applikationer.</p>',
		
		'skills-mysql-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-mysql-title'       => 'MySQL',
		'skills-mysql-text'        => '<p>Att lagra information är en grundläggande del av varje modern, interaktiv webbplats idag. Men att lagra data
										handlar också om effektivitet. Jag använder öppna och väl etablerade MySQL och optimerar databasen enligt väletablerade principer för att
										göra hanteringen av data snabb <em>och</em> anpassningsbar.</p>',
		
		'skills-wordpress-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-wordpress-title'   => 'WordPress',
		'skills-wordpress-text'    => '<p>WordPress är en gratis open-source innehållshanterare (CMS) som gör det enkelt 
										för vem som helst att redigera innehållet på en webbplats.
										Det här är mitt förstahandsval för de flesta klienter och ett verktyg jag använt 
										i många projekt.</p>',
		
		'skills-codeigniter-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-codeigniter-title' => 'CodeIgniter',
		'skills-codeigniter-text'  => '<p>Strukturera kod kan vara omständigt och redan på 70-talet uppfann några smarta
										personer MVC-principen. Det är ett sätt att strukturera kod som sedan dess används
										i många kod-ramverk. CodeIgniter är litet, behändigt och gör att det snabbt går att
										komma igång med en webbapplikation.</p>',
		
		'skills-photoshop-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-photoshop-title'   => 'Photoshop',
		'skills-photoshop-text'    => '<p>Första gången jag använde Photoshop var jag kring tolv år. Sedan dess har jag 
										antagligen spenderat mer tid i det här programmet än något annat. Oavsett jag 
										<strong>retucherar foton</strong>, <strong>designar webbsidor</strong>, 
										<strong>ritar reklambanners</strong> eller bara skapar något för eget nöje.</p>',
		
		'skills-illustrator-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-illustrator-title' => 'Illustrator',
		'skills-illustrator-text'  => '<p>Med responsiv design är behovet att designa webbsidor med vektorbaserat innehåll
										något som blir allt större och viktigare. Idag är detta mitt huvudsakliga verktyg för
										att designa en webbplats</p>',
		
		'skills-premiere-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-premiere-title'    => 'Premiere',
		'skills-premiere-text'     => '<p>Närhelst jag behöver klippa, redigera eller rendera videos så är det här mitt huvudsakliga
										verktyg. Jag kan inte säga att jag är lika hemma i det som Photoshop, men jag kan definitivt
										grunderna i det väldigt väl.</p>',
		
		'skills-audition-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-audition-title'    => 'Audition',
		'skills-audition-text'     => '<p>Jag har spenderat mycket tid med att spela in musik med vänner och vi började ursprungligen
										med programmet Cool Edit, som senare blev Audition, när Adobe köpte upp det. Jag skriver
										inte musik så ofta idag, men det är som att lära sig cykla. Man glömmer aldrig hur man gör.</p>',

		'skills-sublime-image'       => '<img src="images/details/html5.png" alt="html5">',
		'skills-sublime-title'    => 'Sublime Text 3',
		'skills-sublime-text'     => '<p>När jag var i tonåren började jag göra simpla webbsidor i Front Page 2000. Senare började
										jag använda Dreamweaver. Sedan dess har nästan två årtionden gått och mycket har ändrats.
										Idag är mitt huvudsakliga verktyg för programmering (HTML, JavaScript, PHP) Sublime Text 3.
										Jag kan inte rekommendera det här programmet nog.</p>'


);

$data = array();

if($language == 'en'){
	$data = $data_en;
} else {
	$data = $data_sv;
}

?>
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

			<h1 class="main-header-title">HannaSoderstrom.com</h1>	
		</header><!-- header -->

		<nav class="main-navigation">
			<a class="rotate" href="http://hannasoderstrom.com/index.php#webdeveloper" title="<?php echo $data['menu-webdeveloper'];  ?>"><?php echo $data['menu-webdeveloper'];  ?> <img src="images/icons/webdevelopment.png" alt=""></a>
			<a class="rotate" href="http://hannasoderstrom.com/index.php#educator" title="<?php echo $data['menu-educator'];  ?>"><?php echo $data['menu-educator'];  ?> <img src="images/icons/educator.png" alt=""></a>
			<a class="rotate" href="http://hannasoderstrom.com/index.php#debater" title="<?php echo $data['menu-debater'];  ?>"><?php echo $data['menu-debater'];  ?> <img src="images/icons/debater.png" alt=""></a>
			<a class="rotate" href="http://hannasoderstrom.com/index.php#contact" title="<?php echo $data['menu-contact'];  ?>"><?php echo $data['menu-contact'];  ?> <img src="images/icons/contact.png" alt=""></a>
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
					<?php echo $data['testemony2']; ?>
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
				<h1 class="webdeveloper-title"><?php echo $data['webdeveloper']; ?></h1>

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
						<h2><?php echo $data['skills'];  ?></h2>
					</div>
					<div class="dark">
						<div class="l-center">

							<ul class="skills-list">
								<li id="skill-html5">HTML5 			<strong><span>*****</span></strong></li>
								<li id="skill-css3">CSS3			<strong><span>*****</span></strong></li>
								<li id="skill-js">JavaScript 		<strong><span>***</span>**</strong></li>
								<li id="skill-jquery">jQuery 		<strong><span>****</span>*</strong></li>
								<li id="skill-respd">Resp. Design 	<strong><span>*****</span></strong></li>
							</ul>	

							<ul class="skills-list">
								<li id="skill-phpoop">PHP(OOP) 		<strong><span>****</span>*</strong></li>
								<li id="skill-mysql">MySQL 			<strong><span>***</span>**</strong></li>
								<li id="skill-wordpress">WordPress			<strong><span>*****</span></strong></li>
								<li id="skill-codeigniter">CodeIgniter		<strong><span>**</span>***</strong></li>
								<li></li>
							</ul>

							<ul class="skills-list">
								<li id="skill-photoshop">Photoshop 		<strong><span>*****</span></strong></li>
								<li id="skill-illustrator">Illustrator		<strong><span>***</span>**</strong></li>							
								<li id="skill-premiere">Premiere 		<strong><span>***</span>**</strong></li>
								<li id="skill-audition">Audition 		<strong><span>***</span>**</strong></li>
								<li id="skill-sublime">Sublime Text 3 		<strong><span>****</span>*</strong></li>
								<li></li>
							</ul>

						</div>			
					</div>
					<div class="skills-details l-center">
						<div class="l-center">
							<article id="s-details-html5" class="details">
								<?php echo $data['skills-html5-image']; ?>
								<h3><?php echo $data['skills-html5-title']; ?></h3>
								<?php echo $data['skills-html5-text']; ?>
							</article>						
							<article id="s-details-css3" class="details">
								<?php echo $data['skills-css3-image']; ?>
								<h3><?php echo $data['skills-css3-title']; ?></h3>
								<?php echo $data['skills-css3-text']; ?>
							</article>						
							<article id="s-details-js" class="details">
								<?php echo $data['skills-javascript-image']; ?>
								<h3><?php echo $data['skills-javascript-title']; ?></h3>
								<?php echo $data['skills-javascript-text']; ?>
							</article>						
							<article id="s-details-jquery" class="details">
								<?php echo $data['skills-jquery-image']; ?>
								<h3><?php echo $data['skills-jquery-title']; ?></h3>
								<?php echo $data['skills-jquery-text']; ?>
							</article>						
							<article id="s-details-respd" class="details">
								<?php echo $data['skills-respdesign-image']; ?>
								<h3><?php echo $data['skills-respdesign-title']; ?></h3>
								<?php echo $data['skills-respdesign-text']; ?>
							</article>						
							<article id="s-details-phpoop" class="details">
								<?php echo $data['skills-phpoop-image']; ?>
								<h3><?php echo $data['skills-phpoop-title']; ?></h3>
								<?php echo $data['skills-phpoop-text']; ?>
							</article>
							<article id="s-details-mysql" class="details">
								<?php echo $data['skills-mysql-image']; ?>
								<h3><?php echo $data['skills-mysql-title']; ?></h3>
								<?php echo $data['skills-mysql-text']; ?>
							</article>
							<article id="s-details-wordpress" class="details">
								<?php echo $data['skills-wordpress-image']; ?>
								<h3><?php echo $data['skills-wordpress-title']; ?></h3>
								<?php echo $data['skills-wordpress-text']; ?>
							</article>
							<article id="s-details-codeigniter" class="details">
								<?php echo $data['skills-codeigniter-image']; ?>
								<h3><?php echo $data['skills-codeigniter-title']; ?></h3>
								<?php echo $data['skills-codeigniter-text']; ?>
							</article>
							<article id="s-details-photoshop" class="details">
								<?php echo $data['skills-photoshop-image']; ?>
								<h3><?php echo $data['skills-photoshop-title']; ?></h3>
								<?php echo $data['skills-photoshop-text']; ?>
							</article>
							<article id="s-details-illustrator" class="details">
								<?php echo $data['skills-illustrator-image']; ?>
								<h3><?php echo $data['skills-illustrator-title']; ?></h3>
								<?php echo $data['skills-illustrator-text']; ?>
							</article>
							<article id="s-details-premiere" class="details">
								<?php echo $data['skills-premiere-image']; ?>
								<h3><?php echo $data['skills-premiere-title']; ?></h3>
								<?php echo $data['skills-premiere-text']; ?>
							</article>
							<article id="s-details-audition" class="details">
								<?php echo $data['skills-audition-image']; ?>
								<h3><?php echo $data['skills-audition-title']; ?></h3>
								<?php echo $data['skills-audition-text']; ?>
							</article>
							<article id="s-details-sublime" class="details">
								<?php echo $data['skills-sublime-image']; ?>
								<h3><?php echo $data['skills-sublime-title']; ?></h3>
								<?php echo $data['skills-sublime-text']; ?>
							</article>
						</div>
					</div>	
				</section>
				
				<section id="websites">
				
					<div class="l-center">
						<h2><?php echo $data['websites'];  ?></h2>
					</div>

					<div class="dark">
						<div class="l-center websites-list">

							<article class="websites-site">
								<h3><?php echo $data['site-title-exarb'];  ?></h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/exarb-600x332.jpg" alt="examensarbete" class="website-screenshot">
									<?php echo $data['site-text-exarb'];  ?>
									<p class="website-description"><?php echo $data['site-description-exarb'];  ?></p>
									<a class="website-link" href="http://h79-138-111-237.dynamic.se.alltele.net/examensarbete/index.php">Examensarbete</a>
									<ul class="website-tags">
										<li>2014</li>
										<li>Design</li>
										<li>PHP (OOP)</li>
										<li>HTML</li>
										<li>CSS</li>
										<li>Responsive</li>
									</ul>
								</div>	
							</article>

							<article class="websites-site">
								<h3><?php echo $data['site-title-starfucked'];  ?></h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/starfucked-600x332.jpg" alt="starfucked.net" class="website-screenshot">
									<?php echo $data['site-text-starfucked'];  ?>
									<p class="website-description"><?php echo $data['site-description-starfucked'];  ?></p>
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
								<h3><?php echo $data['site-title-billylundevall'];  ?></h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									
									<img src="images/websites/billylundevall-600x332.jpg" alt="BillyLundevall.se" class="website-screenshot">
									<?php echo $data['site-text-billylundevall'];  ?>
									<p class="website-description"><?php echo $data['site-description-billylundevall'];  ?></p>
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
								<h3><?php echo $data['site-title-rde'];  ?></h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/rde-usa-600x332.jpg" alt="RDE-USA.com" class="website-screenshot">
									<?php echo $data['site-text-rde'];  ?>
									<p class="website-description"><?php echo $data['site-description-rde'];  ?></p>
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
								<h3><?php echo $data['site-title-kopp'];  ?></h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/koppentertainment-600x332.jpg" alt="KoppEntertainment" class="website-screenshot">
									<?php echo $data['site-text-rde'];  ?>
									<p class="website-description">	<?php echo $data['site-description-kopp'];  ?></p>
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
								<h3><?php echo $data['site-title-morph'];  ?></h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/hannasmorphs-600x332.jpg" alt="Hanna's Morphs" class="website-screenshot">
									<?php echo $data['site-text-morph'];  ?>
									<p class="website-description"><?php echo $data['site-description-morph'];  ?></p>
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
								<h3><?php echo $data['site-title-poland'];  ?></h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/chrispoland-600x332.jpg" alt="Chris Poland" class="website-screenshot">
									<?php echo $data['site-text-poland'];  ?>
									<p class="website-description"><?php echo $data['site-description-poland'];  ?></p>
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
								<h3><?php echo $data['site-title-ts'];  ?></h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/transsexualism-600x332.jpg" alt="Transsexualism.se" class="website-screenshot">
									<?php echo $data['site-text-ts'];  ?>
									<p class="website-description"><?php echo $data['site-description-ts'];  ?></p>
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
								<h3><?php echo $data['site-title-gothbarbie'];  ?></h3>
								<a href="#" class="website-toggle"></a>
								<div class="website-content">
									<img src="images/websites/gothbarbie-600x332.jpg" alt="gothbarbie.se" class="website-screenshot">
									<?php echo $data['site-text-gothbarbie'];  ?>
									<p class="website-description"><?php echo $data['site-description-gothbarbie'];  ?></p>
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
				
				<h1 class="educator-title"><?php echo $data['educator'];  ?></h1>
				
				<div class="dark">
					<div class="educator">
		
						<div class="educator-field">
							<h3><?php echo $data['educator-field-sharing'];  ?></h3>
							<?php echo $data['educator-sharing-text'];  ?>
						</div>
						
						<div class="educator-field">
							<h3><?php echo $data['educator-field-creativity'];  ?></h3>
							<?php echo $data['educator-creativity-text'];  ?>
						</div>
						
						<div class="educator-field">
							<h3><?php echo $data['educator-field-selfknowledge'];  ?></h3>
							<?php echo $data['educator-selfknowledge-text'];  ?>

							<ul class="educator-links">
								<li><a href="http://forum.transsexualism.se" title="TS-forum">TS-forum</a> - <?php echo $data['educator-selfknowledge-link1'];  ?></li>
								<li><a href="http://transsexualism.se" title="Transsexualism.se">Transsexualism.se</a> - <?php echo $data['educator-selfknowledge-link2'];  ?></li>
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

				<h1><?php echo $data['debater'];  ?></h1>

				<div class="l-left-column dark">
					
					<h2><?php echo $data['debater-field-loveforideas'];  ?></h2>
					<?php echo $data['debater-loveforideas-text'];  ?>

					<h3><?php echo $data['debater-field-personal'];  ?></h3>
					<?php echo $data['debater-personal-text'];  ?>

					<h4><?php echo $data['article'];  ?></h4>
					<ul class="media-links">
						<li><a href="http://www.svd.se/opinion/brannpunkt/juridiskt-kon-inte-samma-som-biologiskt_6773173.svd" title="">Juridiskt kön inte samma som biologiskt</a> - (swedish) SvD Opinion</li>
					</ul>
			
					<div class="quotes">
						<blockquote class="quotes-testemony-single">
							<?php echo $data['angel-quote'];  ?>

							<div class="quotes-testemony-author-single">
								<p class="h-card"><span class="p-name">Angel Rops</span>, <br>
								<span class="p-job-title">RFSL</span> Malmö, Sweden</p>
								<img class="quotes-testemony-author-image" src="http://graph.facebook.com/angel.rops/picture?type=large" alt="Angel Rops">
							</div>
						</blockquote>
					</div>

					<h3><?php echo $data['a-free-internet'];  ?></h3>
					<?php echo $data['a-free-internet-text'];  ?>
		
					<h3><?php echo $data['liberalism'];  ?></h3>
					<?php echo $data['liberalism-text'];  ?>

				</div><!-- .l-left-column -->

				<div class="l-right-column">
				
					<section class="opinion-maker">
						<h2><?php echo $data['opinion-maker'];  ?></h2>
						<?php echo $data['opinion-maker-text'];  ?>
					</section>
			
					<section id="media">

						<h2><?php echo $data['media'];  ?></h2>

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
					<h2><?php echo $data['books'];  ?></h2>
					<?php echo $data['books-text'];  ?>
					<ul class="books-list">
						<li>
							<ul class="book-item">
								<li><strong><?php echo $data['books-title'];  ?></strong></li>
								<li><strong><?php echo $data['books-content'];  ?></strong></li>
								<li><strong><?php echo $data['books-rating'];  ?></strong></li>
							</ul>
						</li>
						<?php getBooksList(); ?>
					</ul>

					<h2>CV</h2>
					<p><a class="cv-download" href="pdf/cv_hannasoderstrom.pdf">Download my CV</a></p>
				</section>

				<section id="contact">
				
					<h2><?php echo $data['contact'];  ?></h2>
					<?php 
					if(isset($errors)){
						foreach ($errors as $error) {
							echo '<p class="error">' . $error . '</p>';
						}	
					}
					?>
					<form action="?#contact" method="POST" accept-charset="utf-8">		
						
						<input type="text" name="title" class="hidden">
						
						<label for="name"><?php echo $data['contact-name'];  ?>: *
							<input id="name" type="text" name="name" value="<?php echo escape(Input::get('name')); ?>">
						</label>
						
						<label for="email"><?php echo $data['contact-email'];  ?>: *
							<input id="email" type="email" name="email" value="<?php echo escape(Input::get('email')); ?>">
						</label>
						
						<label for="subject"><?php echo $data['contact-subject'];  ?>: *

							<select id="subject" name="subject">
								<option value="<?php echo $data['contact-subject-1'];  ?>"><?php echo $data['contact-subject-1'];  ?></option>
								<option value="<?php echo $data['contact-subject-2'];  ?>"><?php echo $data['contact-subject-2'];  ?></option>
								<option value=""></option>
							</select>
						</label>
						
						<label for="message"><?php echo $data['contact-message'];  ?>: *
							<textarea id="message" name="message"><?php echo escape(Input::get('message')); ?></textarea>
						</label>
					
						<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
						<p class="required"><em>* <?php echo $data['contact-required'];  ?></em></p>
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
		<a class="rotate" href="#top" title="<?php echo $data['back'];  ?>"><?php echo $data['back'];  ?> 
			<img src="images/icons/top.png" alt="">
		</a>
		<a class="rotate" href="http://hannasoderstrom.com/index.php#webdeveloper" title="<?php echo $data['menu-webdeveloper'];  ?>"><?php echo $data['menu-webdeveloper'];  ?> <img src="images/icons/webdevelopment.png" alt=""></a>
		<a class="rotate" href="http://hannasoderstrom.com/index.php#educator" title="<?php echo $data['menu-educator'];  ?>"><?php echo $data['menu-educator'];  ?> <img src="images/icons/educator.png" alt=""></a>
		<a class="rotate" href="http://hannasoderstrom.com/index.php#debater" title="<?php echo $data['menu-debater'];  ?>"><?php echo $data['menu-debater'];  ?> <img src="images/icons/debater.png" alt=""></a>
		<a class="rotate" href="http://hannasoderstrom.com/index.php#contact" title="<?php echo $data['menu-contact'];  ?>"><?php echo $data['menu-contact'];  ?> <img src="images/icons/contact.png" alt=""></a>
	</nav>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/scrollmenu.js"></script>
	<script src="js/lightboxeffect.js"></script>
	<script>
		$(document).ready(function(){

		    $(".website-toggle").on("click", function(e){
		        e.preventDefault();
		        $(this).next('.website-content').slideToggle('fast');
		        $(this).toggleClass('is-website-expanded');
		    });

		    $("#skill-html5").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-html5").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-css3").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-css3").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-js").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-js").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-jquery").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-jquery").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-respd").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-respd").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-phpoop").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-phpoop").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-mysql").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-mysql").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-wordpress").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-wordpress").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-codeigniter").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-codeigniter").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-photoshop").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-photoshop").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-illustrator").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-illustrator").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-premiere").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-premiere").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-audition").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-audition").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });

		    $("#skill-sublime").on("click", function(e){
		        e.preventDefault();
		        $('.details').hide('fast', 'swing');
		        $("#s-details-sublime").show('fast', 'swing');
		        $('.skills-list li').removeClass('is-details-expanded');
		        $(this).toggleClass('is-details-expanded');
		    });



		});
	</script>

	</body>
</html>