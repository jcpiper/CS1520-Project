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
  </head>
  
  <body>
    <?php
      $links = array(
        "abt" => "#about",
        "prj" => "#project",
        "bks" => "#books",
        "ml" => "#bookSubmission"
      );
    ?>
    
    <header id="navBar">
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
            <a href=<?php echo $links["ml"]; ?>>Book Submission</a>
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
    
    <?php
      $amazon = array(
        "asimov" => "https://www.amazon.com/Foundation-Empire-Second-Everymans-Library/dp/0307593967/ref=la_B003RY2ISS_1_2?s=books&ie=UTF8&qid=1479839454&sr=1-2&refinements=p_82%3AB003RY2ISS%2Cp_n_feature_browse-bin%3A2656020011",
        "mark" => "https://www.amazon.com/Familiar-One-Rainy-Day-May/dp/0375714944/ref=sr_1_1?s=books&ie=UTF8&qid=1479839620&sr=1-1&keywords=the+familiar",
        "heinlein" => "https://www.amazon.com/Starship-Troopers-Robert-Heinlein/dp/0441783589/ref=sr_1_1?s=books&ie=UTF8&qid=1479839649&sr=1-1&keywords=starship+troopers",
        "watch" => "https://www.amazon.com/Watchmen-Alan-Moore/dp/1401245250/ref=sr_1_1?s=books&ie=UTF8&qid=1479839689&sr=1-1&keywords=watchmen",
        "v" => "https://www.amazon.com/V-Vendetta-Alan-Moore/dp/140120841X/ref=sr_1_1?s=books&ie=UTF8&qid=1479839718&sr=1-1&keywords=v+for+vendetta",
        "portis" => "https://www.amazon.com/True-Grit-Novel-Charles-Portis/dp/159020459X/ref=sr_1_1?s=books&ie=UTF8&qid=1479839761&sr=1-1&keywords=true+grit",
        "proulx" => "https://www.amazon.com/Close-Range-Wyoming-Annie-Proulx/dp/0684852225/ref=sr_1_1?s=books&ie=UTF8&qid=1479839798&sr=1-1&keywords=close+range+wyoming+stories",
        "alexie" => "https://www.amazon.com/Ranger-Tonto-Fistfight-Heaven-Anniversary/dp/0802121993/ref=sr_1_1?s=books&ie=UTF8&qid=1479839836&sr=1-1&keywords=the+lone+ranger+and+tonto+fistfight+in+heaven"
      );
      $tab = "target=\"_blank\"";
    ?>
    
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
        <li>
          <p id="asimov">
            The Foundation Trilogy - <a href=<?php echo "\"" . $amazon["asimov"] . "\", " . $tab; ?>>Isaac Asimov</a>
          </p>
        </li>
        <li>
          <p id="mark">
            The Familiar, Vol. One: One Rainy Day in May - <a href=<?php echo "\"" . $amazon["mark"] . "\", " . $tab; ?>>Mark Danielewski</a>
          </p>
        </li>
        <li>
          <p id="heinlein">
            Starship Troopers - <a href=<?php echo "\"" . $amazon["heinlein"] . "\", " . $tab; ?>>Robert Heinlein</a>
          </p>
        </li>
      </ul>
      
      <h3>Graphic Novels</h3>
      <ul>
        <li>
          <p id="moore1">
            Watchmen - <a href=<?php echo "\"" . $amazon["watch"] . "\", " . $tab; ?>>Alan Moore</a>
          </p>
        </li>
        <li>
          <p id="moore">
            V for Vendetta - <a href=<?php echo "\"" . $amazon["v"] . "\", " . $tab; ?>>Alan Moore</a>
          </p>
        </li>
      </ul>
      
      <h3>Western</h3>
      <ul>
        <li>
          <p id="portis">
            True Grit - <a href=<?php echo "\"" . $amazon["portis"] . "\", " . $tab; ?>>Charles Portis</a>
          </p>
        </li>
        <li>
          <p id="proulx">
            Close Range: Wyoming Stories - <a href=<?php echo "\"" . $amazon["proulx"] . "\", " . $tab; ?>>Annie Proulx</a>
          </p>
        </li>
        <li>
          <p id="alexie">
            The Lone Ranger and Tonto Fistfight in Heaven - <a href=<?php echo "\"" . $amazon["alexie"] . "\", " . $tab; ?>>Sherman Alexie</a>
          </p>
        </li>
      </ul>
    </section>
    
    <section>
      <?php
        if (!empty($_GET)) {
          $insert = "insert into books (title, genre, author_firstName, author_lastName) values ('" . $_GET["Title"] . "', '" . $_GET["Genre"] . "', '" . $_GET["Author_First_Name"] . "', '" . $_GET["Author_Last_Name"] . "')";
          echo $insert;
  
          echo "Inserting form data into db";
  
          $connection->query($insert);
        }
        
        echo "<h1>Here are the books already suggested by other visitors</h1>";
        $get = "Select * from books order by genre";
        
        $books = $connection->query($get);
        $genre = '';
        if ($books->num_rows > 0) {
          while ($book = $books->fetch_assoc()) {
            if ($genre != $book["genre"]):
              $genre = $book["genre"];
              echo "<h2>" . $book["genre"] . "</h2>";
            endif;
            echo "<p>" . $book["title"] . " - " . $book["author_firstName"] . " " . $book["author_lastName"] . "</p>";
          }
        }
      ?>
    </section>
    
    <section id="bookSubmission">
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
      &copy;2016
    </footer>
    
    <script src="js/main.js"></script>
    <script src="js/form.js"></script>
  
  </body>
</html>
