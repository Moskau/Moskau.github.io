<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>

    <!-- Bootstrap -->
	<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
	<link rel="stylesheet" href="rstyle.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
	<div class="nav">
		<div class="container">
			<div class="row">
				<ul class="pull-left">
					<li><img class="logo" src="#"></li>
					<li><a href="Projects.php">Projects</a></li>
					<li><a href="Resume.php">Resume</a></li>
					<li><a href="Blog.php">Blog</a></li>
				</ul>
				<ul class="pull-right">
					<li><a href="index.html">Home</a></li>
				</ul>	
			</div>
		</div>	
	</div>
	
	<div class="resume">
		<div class="header white">
			<div class="container">
				<h2 id="name">Matthew Paine - Software Engineering Game Design III</h2>
				<p id="address">25 Timber Lane, St. Catharines, ON L2N 7R7</p>
				<a href="mailto:matthewpaine21@gmail.com"><p id="email">matthewpaine21@gmail.com</p></a>
			</div>
		</div>
		<div class="footer">
			<div class="container">
			</div>
		</div>
		<div class="education grey">
			<div class="container">
				<h4 id="eduh">Education</h4>
				<h5 id="edu1">Bachelor of Engineering, Software Game Design</h5>
				<h5 id="class">Class of 2015</h5>
				<ul class="list">
					<li>Recipient of <a href="#">McMaster Entrance Scholarship</a> , $1200 for 90%+ high school average.</li>
					<li>Recipient of <a href="#">Childhood Cancer Canada Survivor Scholarship</a>, $1500 for young adult cancer survivors that became exemplary students.</li>
					<li>Recipient of <a href="#">The Queen Elizabeth II - Aiming for the Top Scholarship</a> , $12 000 which recognizes students who have shown academic excellance.</li>
				</ul>
			</div>
		</div>
		<div class="Projects white">
			<div class="game_design">
				<div class="container">
					<h4 id="projects_title">Projects</h4>
					<h5 id="game_title">Game Design</h5>
					<ul class="list">
						<li>
						<a href="#">Perception:</a>
						A 3D game which was created using OpenGL (C++, freeglut) wih three colleagues. The game is a platformer
						which uses the mechanic of switching between 2D and 3D perspectives in order to solve various puzzles, and
						other challenges. 3D Maps can be imported using Blender, and maps themselves can be created within the game.
						Through doing this project I was able to both hone my skills in OpenGL programming, as well as gain a vast amount
						of knowledge concerning 3D and 2D game physics. I also learned quite a bit about the development process of a
						somewhat complex game.
						</li>
						<li>
						<a href="#">Java Battleship</a>
						Along with two other group members, I created a battleship game in java which includes a somewhat complex AI
						system, as well as a fully functional GUI. This project gave me insight into how to build a user friendly GUI, as well as
						how to program AI systems for a game.
						</li>
						<li>
						<a href="#">UDK Levels</a>
						Created two relatively large UDK levels, both with some amount of gameplay and imported textures and materials. One 
						level includes buttons and elevators which were programmed using kismet. Through this project I was enlightened to the
						intricacies involved in the creation of engaging gameworlds and gameplay, and have gained an even deeper respect for 
						the game design process.
						</li>
						<li>
						<a href="#">The Tortoise and the Hare</a>
						Created a short Adobe Flash animation based upon one of Asop's fables "The Tortoise and the Hare". This project required
						me to create the characters, backgrounds, and the story's narrative. Although the animation is somewhate crude in nature,
						I still was able to learn a fare bit about character, and narrative creation.
						</li>
						<li>
						<a href="#">Blender Model</a>
						Designed an original character in Blender using a model sheet drawn in Adobe Illustrator. This model was then rigged for
						animation, and I created a walk cycle and other simple character animations. Through this project I was able both able 
						to learn how to utilize a character sheet to design a 3D model, as well as how to create realistic character movements.
						</li>
						<li>
						<a href="#">Particle Systems</a>
						Created both 2D and 3D particle systems using OpenGL. The 3D particle system included a simple physics system, 
						with gravity, projectile motion, and friction. In the 2D particle system particles track the mouses movement upon left
						clicking, and are rebounded away from the mouse when right clicking. This project taught me the basics of how to
						program particle physics using OpenGL.
						</li>
						<li>
						<a href='#'>3D Object Manipulator</a>
						A colleague and myself create a 3D object Manipulator program in OpenGL, where you could create and move 3D
						shapes in 3D space. Created shapes could then be selected using the mouse via ray tracing. The 2D position
						of the mouse on the screen is projected out into 3D space with a ray, and first shape intersected would then be 
						selected. This taught me how point and click movement systems are implemented in games such as Diablo, and
						League of Legends (Amoung others).
						</li>
						<li>
						<a href='#'>Game Analysis</a>
						Wrote a paper in which analysis the gameplay differences between the different iterations of the popular mmorpg
						World of Warcraft. It discusses how recent gameplay additions have contributed to the declining subscription
						numbers, and how they have negatively impacted the social structure of the game. Writing this paper taught me
						how to not just play a game, but how to analyse its components in order to discover how they contribute to the
						game as a whole.
						</li>
					</ul>
				</div>
			</div>
			<div class="software">
				<div class="container">
				<h5 id="software_title">Software</h5>
					<ul class="list">
						<li>
						<a href='#'>MedConnect</a>
						Project manager of a group with making a medical documentation app for android, which makes use of a remote 
						server for data. This project allowed me to view a projects development from the perspective of a project manager. 
						As a result I was provided with a sense of how to organize and constrain the development process in order to meet 
						various deadlines with maximum efficiency.
						</li>
						<li>
						<a href='#'>Concurrent Programs</a>
						Developed concurrent programs using both C, and GO. Through doing so was able to gain a vast amount of knowledge 
						of how concurrent computing can be applied to software. The programs I developed sum up the values in an array, one 
						utilizes threads, where each thread sums up a seperate portion of the array, while the other does the same except with
						processes.
						</li>
						<li>
						<a href='#'>Programming in Nasm</a>
						Created a simple nasm program in which sorts vector arrays by both their length, as well as the sum of the values inside
						the array. The program also interfaces with C. As a result of working in nasm I was able to gain insight into how programs 
						can be optimized through simple changes in code structure.
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="experience grey">
			<div class="container">
				<h4 id="experience_title">Experience</h4>
				<p class="bold">Porter</p>
				<p><a href='#'>Prince of Wales Hotel</a> Niagara on the Lake, ON</p>
					<ul class="list">
						<li>
						Required excellent communication and listening skills to interaction with customer service and complaints.
						</li>
						<li>
						Required Strong teamwork skills to organize, plan, and set up of functions, all with great detail.
					</ul>
			</div>
		</div>
	</div>
		
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="rscript.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>
