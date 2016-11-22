<?php
	include "php/db.php";
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="My Personal Site">
	<meta name="keywords" content="Justin,Piper,Pitt,Student,Developer">
	<meta name="author" content="Justin Piper">
	<title>Justin Piper</title>
  <link rel="stylesheet" type="text/css" href="./css/main.css">
	<!-- add links to external style-sheets and .js -->
</head>
<body>
	<?php
		$links = array(
			"abt" => "#about",
			"prj" => "#project",
			"bks" => "#books",
			"ml" => "#mailingList"
		);
	?>

	<header id="navBar">
		<!-- nav guide goes here -->
		<nav>
			<ul>
				<li>
					<a href=<?php echo $links["abt"]; ?>>About</a>
				</li>
				<li>
					<a href=<?php echo $links["prj"]; ?>>Projects</a>
				</li>
				<li>
					<a href=<?php echo $links["bks"]; ?>>Book Recommendations</a>
				</li>
				<li>
					<a href=<?php echo $links["ml"]; ?>>Mailing List</a>
				</li>
			</ul>
		</nav>
	</header>
	<section id="about">
		<h1>About</h1>
		<p>
			Hi there. I'm Justin Piper, a senior at the University of Pittsburgh pursuing a Bachelor's of Science in Bioinformatics.
			I am also a software developer with experience in a number of different languages, particularly Java, Python, Groovy, HTML,
			CSS, and JavaScript.
		</p>
		<p>
			There's more to me than a nerd with his keyboard, though. I am an avid sports fan, and root for Pittsburgh teams across the
			board. My favorite sport is baseball, but I also enjoy football, hockey, basketball, and golf.
		</p>
	</section>
	<section id="project">
		<h1>Project</h1>
    <h3><a href="https://rescert.bio.pitt.edu/cert_data/">Certificate in Life Sciences Research</a></h3>
    <p>
      In the summer of 2015 I was fortunate enough to be employed by the Biology Department here at Pitt. My job was to
      build a website for the research certificate offered by the department. This site handles student applications, allows
      the current administrator to easily update program requirements, and allows professors to view and approve work submitted
      by their students.
    </p>
	</section>
	<section id="books">
		<h1>Book Recommendations</h1>
		<p>
      I like to describe myself as an avid reader, though unfortunately I often don't have time to read as much as
      I'd like to during the semester. With that caveat in mind, I'll try to keep this list of books I've enjoyed as
      up-to-date as possible.
    </p>
    <h3>
      Sci-Fi
    </h3>
    <ul>
      <!--add pics of each author that appear on mouse over-->
      <li>
		  	<p id="asimov">
					The Foundation Trilogy - Isaac Asimov
				</p>
      </li>
      <li>
				<p id="mark">
					The Familiar, Vol. One: One Rainy Day in May - Mark Danielewski
				</p>
      </li>
      <li id="heinlein">
        Starship Troopers - Robert Heinlein
      </li>
    </ul>
    <h3>Graphic Novels</h3>
    <ul>
      <li id="moore1">
        Watchmen - Alan Moore
      </li>
      <li id="moore">
        V for Vendetta - Alan Moore
      </li>
    </ul>
    <h3>Western</h3>
    <ul>
      <li id="portis">
        True Grit - Charles Portis
      </li>
      <li id="proulx">
        Close Range: Wyoming Stories - Annie Proulx
      </li>
      <li id="alexie">
        The Lone Ranger and Tonto Fistfight in Heaven - Sherman Alexie
      </li>
    </ul>
	</section>
  <section>
    <?php
      foreach ($_GET as $key => $value) {
        echo "<p>" . $key . " - " . $value . "</p>";
      }
      echo "<p>Title exists? " . array_key_exists("Title", $_GET) . "</p>";
      echo "<p>Title is set?" . empty($_GET["Title"]) . "</p>";
      echo "<p>Title: " . $_GET["Title"] . "</p>";
    
      // add form submissions to the db
      // assume all form fields are completed
      $insert = "insert into books values ('" . $_GET["Title"] . "', '" . $_GET["Genre"] . "', '" . $_GET["Author_First_Name"] . "', '" .$_GET["Author_Last_Name"] ."')";
      echo $insert;
    
    ?>
  </section>
	<section id="mailingList">
    <p id="errorMessage"></p>
		<h1>Read any good books lately? Add them to the list here!</h1>
		<form action="index.php" method="get" id="contactList" onsubmit="return verify()">
			<fieldset class="generalInputs">
				<div>
					<label for="firstName">Title</label>
					<input type="text" name="Title" placeholder="The Hobbit" id="firstName"/>
				</div>
				<div>
					<label for="lastName">Author's First Name (or initials, if applicable)</label>
					<input type="text" name="Author First Name" placeholder="J.R.R." id="lastName"/>
				</div>
				<div>
					<label for="email">Author's Last Name</label>
					<input type="text" name="Author Last Name" placeholder="Tolkein" id="email"/>
				</div>
        <div>
          <label for="genre">Genre</label>
          <input type="text" name="Genre" placeholder="Fantasy" id="genre"/>
        </div>
				<div>
					<input type="submit" value="Submit"/>
				</div>
			</fieldset>
		</form>
	</section>
	<footer>
    <p>
      <a href="mailto:jcp68@pitt.edu">Justin Piper</a>
    </p>
    <p>
      Disclaimer: I do not actually have a mailing list
    </p>
		&copy;2016
	</footer>
  <script src="js/main.js"></script>
  <script src="js/form.js"></script>
</body>
</html>