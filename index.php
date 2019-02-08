<?php include('./PHP/server.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="CSS/style.css" />
		<link rel="stylesheet" href="CSS/animation.css">
		<link rel="icon" href="images/og.jpg" type="image/png" />
		<link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Kendrick Lamar</title>
		<script language="Javascript" src="JS/funz.js"></script>
		<script src="JS/jquery-3.3.1.js"></script>
	</head>
	<body onLoad="cop()">
		<!--Form registrazione-->
		
		<div id="registerform">
		<form method="post" action="index.php">
			<?php include('./PHP/errors.php'); ?>
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
			<label>Password</label>
			<input type="password" name="password_1">
			<label>Confirm password</label>
			<input type="password" name="password_2">
			<input type="button" value="Cancel" onclick="hideRegister()">
			<input type="submit" class="btn" name="reg_user" value='Register'>
			<p class='pForm'>
				Already a member? <a onclick="hideRegister();login();">Sign in</a>
			</p>
		</form>
			   		<!-- <form action="" onSubmit="return mostra();">
						<label>First Name:</label>
						<label id="nameErr" class="err">

						</label>
						<input type="text" placeholder="First name" id="name">


						<label>Last Name:</label>
						<label id="lNameErr" class="err">

						</label>
						<input type="text" placeholder="Last name" id="lName">


						<label>Birthday:</label>
						<input type="date">


						<label class="radiobtn">Male
							<input type="radio" name="radio" value="male" checked>
							<span class="checkmark"></span>
						</label>

						<label class="radiobtn">Female
							<input type="radio" name="radio" value="female">
							<span class="checkmark"></span>
						</label><br><br>

						<label>E-mail:</label>
						<label id="mailErr" class="err">

						</label>
						<input type="mail" placeholder="E-mail" id="mail">


						<label id="labelPsw">Password:</label>
						<label id="match" class="err">

						</label>
						<input type="password" id="psw1">

						<label>Repeat password:</label>
						<input type="password" id="psw2">

						<label>Phone:</label>
						<label id="telErr" class="err">

						</label>
						<input type="tel" placeholder="256-646-7800" id="tel">


						<label>Country</label>
						<select>
						  <option value="Italy">Italy</option>
						  <option value="London">London</option>
						  <option value="Amsterdam">Amsterdam</option>
						  <option value="New York">New York</option>
						  <option value="Spain">Spain</option>
						</select>

						<center>
							<input type="button" value="Cancel" onclick="hideRegister()">
							<input type="submit" value="Submit">
						</center>
  					</form> -->
			   </div>
			   <div id="loginForm">
					<form method="post" action="index.php">
						<?php include('./PHP/errors.php'); ?>
							<label>Username</label>
							<input type="text" name="username" >
							<label>Password</label>
							<input type="password" name="password">
						<center>
							<input type="button" value="Cancel" onclick="hideLogin()">
							<input type="submit" value="Login" name="login_user">
						</center>
						<p class='pForm'>
							Not yet a member? <a onclick="hideLogin();register();">Sign up</a>
						</p>
					</form>
			   </div>
		<!--Tutto il contenuto del sito-->
		<div id="container">
			<!--Creazione dell'header-->
		   <div id="header" class="animated fadeInDown">
			   <!-- notification message -->
			   <?php if (!isset($_SESSION['username'])) : ?>
			   <?php if (isset($_POST['reg_user']) && (count($errors) > 0)) : ?>
			   <script>
			   register();
			   </script>
			   <?php endif ?>
			   <?php if (isset($_POST['login_user']) && (count($errors) > 0)) : ?>
			   <script>
			   login();
			   </script>
			   <?php endif ?>
			   <div class="submit">
					<a id="login" onClick="login()">
						Login
					</a>
					<a id="register" onClick="register()">
						Register
					</a>
				</div>
			   <?php endif ?>


				<!-- logged in user information -->
				<?php  if (isset($_SESSION['username'])) : ?>
					<div id='loginDiv'>
						<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
						<p> <a href="./PHP/index.php?logout='1'">logout</a> </p>
					</div>
				<?php endif ?>
				
				<nav>
					<a href="index.php" id="title">
						<span class="highlight">K</span>ENDRICK <span class="highlight">L</span>AMAR
					 </a>
						<div style="height: 15px;">
						</div>
							<hr width="80%" color="#BFB172"/>
					<!--Creazione navbar Desktop-->
						<ul class="navbar">
							<li class="item">
								<a href="#">
									 Home
								</a>
							</li>
							<li class="item">
								<a onclick="linka('bio')">
									Biography
								</a>
							</li>
							<li class="item">
								<a onclick="linka('album')">
									Album
								</a>
							</li>
							<li class="item">
								<a onclick="linka('gallery')">
									Gallery
								</a>
							</li>
							<li class="item">
								<a href="https://txdxe.com/collections/kendrick-lamar">
									Shop
								</a>
							</li>
							<!--Costruzione menu per mobile-->
							<li class="mitem bordo">
								<a onclick="menuDiv();">Menu</a>
							</li>
							<ul id="mshow">
								<div>
									<li class="mitem">
										<a href="#" onClick="nascondi()">
										 Home
										</a>
									</li>
									<li class="mitem">
										<a href="https://txdxe.com/collections/kendrick-lamar" onClick="nascondi()">
											Shop
										</a>
									</li>
									<li class="mitem">
										<a href="#bio" onClick="nascondi()">
											Biography
										</a>
									</li>
									<li class="mitem">
										<a href="#album" onClick="nascondi()">
											Album
										</a>
									</li>
									<li class="mitem">
										<a href="#gallery" onClick="nascondi()">
											Gallery
										</a>
									</li>
									<li class="mitem" onClick="nascondi()">
										<a onClick="login()">
											Login
										</a>
									</li>
									<li class="mitem" onClick="nascondi()">
										<a onClick="register()">
											Register
										</a>
									</li>
								</div>
							</ul>
						</ul>
				</nav>
		</div>
			<div style="clear: both"></div>
		<!--Creazione Latest-->
		<div class="content">
			<div id="latest">
		<!--Parte sinistra del Latest-->
				<div id="sin" style="flex-grow: 1">
					<center>
						<blockquote>
							<p>
							"Miss me with that bullshit (Bullshit) <br>
							You ain't really wild, you a tourist (A tourist) <br>
							I be blackin' out with the purist (The purist) <br>
							I made a hundred thou' then I freaked it (I freaked it) <br>
							I made 500 thou' then I freaked it (I freaked it) <br>
							I bought a '87 for the weekend (The weekend)"
							</p>
						 </blockquote>
					</center>
				</div>
		<!--Parte centrale del Latest-->
				<div id="cen" style="flex-grow: 1">
					<center>
						<p>
							LATEST SONG
						</p>
							<iframe width="640" height="360" src="https://embed.vevo.com?isrc=USUV71800389" allowfullscreen=""></iframe>
					</center>
				</div>
		<!--Parte destra del Latest-->
				<div id="dest" style="flex-grow: 1">
					<center>
						<p>
							- King's Dead -
						</p>
						<p>
							Jay Rock, Kendrick Lamar, Future, James Blake
						</p>

					<div id="streams">
						<p>Stream it on</p>
						<a href="https://open.spotify.com/album/1NXM5lF9YB7a3f1e4R48oH" target="_blank"><img src="./images/spotify-download-button.png" alt="Spotify" width="auto" height="40"></a>
						<a href="https://itunes.apple.com/bf/artist/kendrick-lamar/id368183298"><img src="images/AMusic.png"></a>
					</div>
					</center>
				</div>
			</div>
				<div style="clear: both"></div>
			<!--Creazione della sezione biografia-->
			<div id="bio">
				<a href="#bio"><img class="animated fadeInRight" src="Images/og.jpg" /></a>
				  <h1  class="animated fadeInLeft"> Biography</h1>
					<p  class="animated fadeInLeft">Kendrick Lamar Duckworth was born in Compton, California on June 17, 1987, the son of a couple from Chicago, Illinois. His father, Kenny Duckworth, was a member of a street gang called Gangster Disciples, and Lamar's family had ties to the Bloods. He began to gain recognition in 2010, after his first retail release, Overly Dedicated. The following year, he independently released his first studio album, Section.80, which included his debut single, "HiiiPoWeR". By that time, he had amassed a large online following and collaborated with several prominent artists in the hip hop industry, including The Game, Busta Rhymes, and Snoop Dogg.

					Lamar's major label debut album, good kid, m.A.A.d city, was released in 2012 by TDE, Aftermath, and Interscope Records to critical success. It debuted at number two on the US Billboard 200 chart and was later certified platinum by the Recording Industry Association of America (RIAA). The record contained the top 40 singles "Swimming Pools (Drank)", "Bitch, Don't Kill My Vibe", and "Poetic Justice". </p>
			</div>
				<div style="clear: both"></div>
			<!--Costruzione sezione Album-->
			<div id="album">
				<center>
					<p>Album</p>
				</center>
			<!--Prima copertina dell'Album-->
			<!--Photos dove ci starà l'immagine-->
					<div class="photos">
					  <img src="images/268x0w.jpg" alt="Good kid m.a.a.d. city" class="image" style="width:100%">
						<!--middle utilizzata per l'animazione di sfocatura-->
					  <div class="middle">
						  <!--textgallery per il testo delle canzoni degli album-->
						<div class="textgallery">
							<p id="good">Good kid m.a.a.d. city</p>
							<ol>
								<li>Sherane</li>
								<li>Bitch, Don't Kill My Vibe.</li>
								<li>Backseat Freestyle</li>
								<li>The Art of Peer Pressure</li>
								<li>Money Trees</li>
								<li>Poetic Justice</li>
								<li>good kid</li>
								<li>m.A.A.d City</li>
								<li>Swimming Pools</li>
								<li>Sing About Me, I’m Dying of Thirst</li>
								<li>Real</li>
								<li>Compton</li>
							</ol>
						</div>
					  </div>
					</div>
			<!--Seconda copertina dell'Album-->
					<div class="photos">
					  <img src="images/topimp.jpg" alt="To Pimp a Butterfly" class="image" style="width:100%">
					  <div class="middle">
						<div class="textgallery">
							<p id="pimp">To Pimp a Butterfly</p>
							<ol>
								<li>Wesley's Theory</li>
								<li>For Free?</li>
								<li>King Kunta</li>
								<li>Institutionalized</li>
								<li>These Walls</li>
								<li>u</li>
								<li>Alright</li>
								<li>For Sale?</li>
								<li>Momma</li>
								<li>Hood Politics</li>
								<li>How Much a Dollar Cost</li>
								<li>Complexion</li>
								<li>The Blacker the Berry</li>
								<li>You Ain't Gotta Lie</li>
								<li>i</li>
								<li>Mortal Man</li>
							</ol>
						</div>
					  </div>
					</div>
			<!--Terza copertina dell'Album-->
					<div class="photos">
					  <img src="Images/damn.jpg" alt="DAMN." class="image" style="width:100%">
					  <div class="middle">
						<div class="textgallery" id="damn">
							<p id="damnp">DAMN.</p>
							<ol>
								<li>BLOOD.</li>
								<li>DNA.</li>
								<li>YAH.</li>
								<li>ELEMENT.</li>
								<li>FEEL.</li>
								<li>LOYALTY.</li>
								<li>PRIDE.</li>
								<li>HUMBLE.</li>
								<li>LUST.</li>
								<li>LOVE.</li>
								<li>XXX.</li>
								<li>FEAR.</li>
								<li>GOD.</li>
								<li>DUCKWORTH.</li>
							</ol>
						</div>
					  </div>
					</div>
			</div>
				<div style="clear: both"></div>
			<!--Creazione di una semplice galleria usando display flex per renderla un po responsive-->
			<div id="gallery">
				<center>
					<p>GALLERY</p>
				</center>
			<!--prima riga-->
				<div class="gallery_row">
					<!--Qui le 4 colonne-->
					<div class="gallery_column">
						<img src="./images/damn.jpg" alt="damn">
						<img src="images/268x0w.jpg" alt="damn">
						<img src="./images/1.jpg" alt="damn">
					</div>
					<div class="gallery_column">
						<img src="./images/3.jpg" alt="damn">
						<img src="./images/KLr.jpg" alt="damn">
						<img src="./images/4.jpg" alt="damn">
						<img src="./images/5.jpg" alt="damn">
					</div>
					<div class="gallery_column">
						<img src="./images/pimp.jpg" alt="damn">
						<img src="./images/12.jpg" alt="damn">
						<img src="./images/6.jpg" alt="damn">
						<img src="./images/7.jpg" alt="damn">
					</div>
					<div class="gallery_column">
						<img src="./images/8.jpg" alt="damn">
						<img src="./images/9.jpg" alt="damn">
						<img src="./images/10.jpg" alt="damn">
						<img src="./images/11.jpg" alt="damn">
					</div>
				</div>
			</div>
		</div>
			<!--Costruzione del footer-->
		<footer>
			<hr width="80%" color="#BFB172"/>
		<div  id="fsopra">
			Copryright
		</div>
		<div id="f1" class="fcolonne" onload="scrolla">
			<h1>
				News
			</h1>
			<div id="contScr">
				<div id="pr-bar">

				</div>
				<hr \>

			</div>
			<div class="articoli">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultricies lacinia nulla non varius. Ut semper tempus tortor, ac egestas justo lobortis et. Fusce et pulvinar odio, ac consectetur urna. Duis interdum elit metus, eu convallis dui dignissim imperdiet. Nunc at urna nec est accumsan tempor et et tortor. Cras sodales ex ex, pretium mattis libero imperdiet mollis. Vestibulum nibh elit, tempus id risus vel, pharetra consectetur lacus. Fusce non libero sed nibh vulputate commodo in sit amet lectus. Pellentesque dictum nec lacus at suscipit. Morbi in libero at nunc pellentesque vestibulum. Etiam tincidunt pretium nisi, ut commodo elit volutpat vel. Aenean libero lacus, scelerisque tincidunt viverra interdum, egestas eu diam. Donec eget nisl volutpat justo cursus posuere. Integer pretium dui et ante blandit, at dictum enim accumsan. Duis a est neque. Aliquam feugiat, massa ac rutrum auctor, risus velit interdum tortor, id commodo ipsum metus sit amet metus.
				</p>

				<p>
					Vivamus mi leo, bibendum vitae sem sit amet, sollicitudin semper ipsum. Fusce tristique venenatis est in condimentum. Curabitur interdum venenatis purus, id eleifend lorem facilisis at. Pellentesque hendrerit molestie erat. Proin commodo est tincidunt nibh posuere pharetra. Maecenas id nulla tincidunt, congue quam vitae, eleifend purus. Suspendisse lacinia et dui dapibus hendrerit. Nulla scelerisque justo dolor, at hendrerit purus rutrum nec. Nam nulla nulla, dapibus vel tellus ac, varius mollis lectus. Cras at mi tincidunt, tristique lacus pulvinar, egestas elit. Donec vulputate vulputate magna, ut scelerisque tortor pharetra vitae. Donec ac faucibus urna. Nam maximus semper sem feugiat sollicitudin. Quisque lectus eros, porttitor eget aliquet eget, porttitor nec tellus.
				</p>
				<p>
					Sed vehicula in arcu vitae luctus. Vestibulum efficitur arcu vel hendrerit tempus. Maecenas bibendum dolor sit amet neque fringilla tristique. Integer ac urna ac diam aliquet porttitor. Integer euismod ornare urna sit amet tempor. Nullam at neque eu mauris gravida semper. In pulvinar, ipsum ut efficitur sodales, felis tortor dictum dolor, ut consequat massa velit quis felis. Aliquam consequat enim ut tortor mollis, et feugiat orci vulputate. Vestibulum elit nunc, lacinia quis eleifend sit amet, finibus nec mauris. Pellentesque commodo justo eget sapien porttitor fermentum. Fusce quis nunc consectetur, congue nulla quis, mollis massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean molestie felis nec enim tempor, non lobortis felis condimentum.
				</p>
				<p>
					Vivamus justo ipsum, aliquet sed tristique a, efficitur in augue. Maecenas volutpat accumsan hendrerit. Nunc scelerisque elementum ultrices. Maecenas efficitur nulla nec mollis vehicula. Sed vel tortor arcu. Aenean mattis ligula eget augue ultricies, vulputate blandit risus pellentesque. Cras eget velit nec dui dapibus laoreet in non turpis. Cras lorem nibh, feugiat sed nisi nec, aliquet commodo augue.

					Etiam in purus gravida, volutpat augue id, luctus magna. Donec tempor quis est nec cursus. Cras nec est tristique ipsum efficitur congue et ut quam. Mauris felis massa, sodales eget leo eget, fringilla porttitor enim. Duis dignissim vehicula massa, eget auctor nibh tempus in. Sed eleifend ut nisi et lacinia. Sed sed sem mauris. Aliquam erat volutpat. Donec ante neque, accumsan ac malesuada eu, scelerisque sed arcu. Cras viverra felis ipsum, at dictum quam bibendum sed. Donec euismod lectus nec mauris congue ornare. Pellentesque id ipsum id felis hendrerit porta. Maecenas dictum, sem non maximus auctor, metus sapien ullamcorper diam, et sagittis est quam ut elit. Quisque tristique elementum dolor, ac aliquet eros ornare vel. Proin tincidunt pellentesque mauris, sit amet accumsan ante convallis ornare. Duis eget luctus ex.
				</p>
			</div>
		</div>
		<div id="f2" class="fcolonne">
			<div id="immagini">
				<center>
					<a href="https://www.facebook.com/kendricklamar" target="_blank">
						<img src="images/ico/facebook.png" alt="Facebook">
					</a>
					<a href="https://www.instagram.com/kendricklamar/" target="_blank">
						<img src="images/ico/instagram.png" alt="Instagram">
					</a>
					<a href="https://twitter.com/kendricklamar" target="_blank">
						<img src="images/ico/twitter.png" alt="Twitter">
					</a>
					<a href="https://www.youtube.com/channel/UCoYfzC2zMlc9M-Odgaf6OSg" target="_blank">
						<img src="images/ico/YT.png" alt="Youtube">
					</a>
				</center>
			</div>
		</div>
		<div id="f3" class="fcolonne">
			<h1>Contacts</h1>
			<hr />
			<p onClick="easteregg()">
				E-mail: lamar@kendrick.com <br>
				Phone: 256-646-7800<br>

				955 Marcus Street<br>
				Gadsden, AL<br>
				Alabama, 35901<br>



			</p>
			<!--
			<h3 style="color: white;">Sales:</h3>

			<canvas width="300" height="200" id="canvas"></canvas>
			<script>

			var c = document.getElementById("canvas");
			var ctx = c.getContext("2d");
			ctx.beginPath();
			ctx.moveTo(20, 150);
			ctx.lineTo(80, 20);
			ctx.strokeStyle = "white";
			ctx.stroke();
			ctx.font = "15px Arial";
			ctx.fillStyle = "white";
			ctx.fillText("2015",10,170);
			ctx.fillText("1 MLN", 10,25);

			ctx.beginPath();
			ctx.moveTo(80, 20);
			ctx.lineTo(120, 40);
			ctx.strokeStyle = "white";
			ctx.stroke();
			ctx.font = "15px Arial";
			ctx.fillText("2016",110,170);

			ctx.beginPath();
			ctx.moveTo(120, 40);
			ctx.lineTo(200, 60);
			ctx.strokeStyle = "white";
			ctx.stroke();
			ctx.font = "15px Arial";
			ctx.fillText("2017",190,170);
			</script>
		</div>	-->
		</footer>
		</div>
		</body>
</html>
