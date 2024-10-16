<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>muhesham's portofolio</title>
    <link rel="stylesheet" href="index.css">
    
</head>
<?php include "data.php"; ?>
<body>
    <div class="header">
        <div class="first">
            <a href="#home">Muhesham</a>
        </div>
        <div class="sec">
        <a href="#home">Home</a>
        <a href="#port">Portfolio</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        </div>
    </div>
    
    <div id="home">
        <section><h1>Welcome to my Portfolio!</h1>
        <span>Hi, I'm <?php echo $data["name"] ?>!</span>
        <br><br>
        CS student currently learning and developing skills in backend development in PHP and Node.js.
        While still in the learning phase, focused on understanding the principles of building server-side applications,
        working with databases, Aim to expanding my knowledge in Computer Science Field.</section>
        <img src="images/se.jpg" width="400" height="360">
    </div>
    <hr>
    <div id="port">
        <div class="experience">
            <h1>Work Experience</h1>
        <p>
            <?php echo $data["experience"]["title"] . " | " . $data["experience"]["company"]. " (".$data["experience"]["from-date"]. " - " . $data["experience"]["to-date"].")"; echo "<br>";
                echo "Employment Type: ". $data["experience"]["work-type"];echo "<br>";
                echo" Location: ". $data["experience"]["location-type"];
            ?>
        </p>
        <img src="images/mindset.jpeg">
        </div>
    
        <div class="projects">
            <h1>Projects</h1>
            <p>
                <?php
                    echo $data["projects"]["proj2"]["name"]." (".$data["projects"]["proj2"]["from-date"]." - ".$data["projects"]["proj1"]["to-date"].")";echo "<br>";
                    echo "Technologies Used: ".$data["projects"]["proj2"]["type"];echo "<br><br>";
                    echo $data["projects"]["proj2"]["description"];echo "<br>";
                ?><br>
                <a href="https://github.com/muuhesham/Store-Module">Github Repo<img src="images/github.png" width="20" height="20"></a>
            </p>
            <hr class="smallhr">
            <P>
                <?php
                    echo $data["projects"]["proj1"]["name"]." - ".$data["projects"]["proj1"]["type"]." (".$data["projects"]["proj1"]["from-date"]." - ".$data["projects"]["proj1"]["to-date"].")";echo "<br><br>";
                    echo $data["projects"]["proj1"]["description"];echo "<br>";
                ?><br>
                <a href="https://github.com/muuhesham/Database_Channel_Project">Github Repo<img src="images/github.png" width="20" height="20"></a>
            </p>
        </div>
        <div class="skills">
            <h1>Techinical Skills</h1>
                <h2>Frontend</h2>
            <section><div class="photo"><img src="images/html.png" width="80" height="80"><br><?php echo $data["skills"][0] ?></div>
            <div class="photo"><img src="images/css.png" width="80" height="80"><br><?php echo $data["skills"][1] ?></div>
            <div class="photo"><img src="images/js.png" width="80" height="80"><br><?php echo $data["skills"][2] ?></div>
            <div class="photo"><img src="images/jquery.png" width="80" height="80"><br><?php echo $data["skills"][3] ?></div></section>
                <h2>Backend</h2>
            <section><div class="photo"><img src="images/php.png" width="120" height="80"><br><?php echo $data["skills"][4] ?></div>
            <div class="photo"><img src="images/node.png" width="100" height="90"><br><?php echo $data["skills"][5] ?></div>
            <div class="photo"><img src="images/mysql.png" width="120" height="80"><br><?php echo $data["skills"][6] ?></div></section>
                <h2>Other</h2>
            <section><div class="photo"><img src="images/git.png" width="80" height="80"><br><?php echo $data["skills"][7] ?></div>
            <div class="photo"><img src="images/linux.png" width="80" height="100"><br><?php echo $data["skills"][8] ?></div></section>
        </div>
    </div>
    <hr>  
    <div id="about">
        <h1>Eduction</h1>
        <p>
            <?php echo  $data["age"] . " y/o " . $data["track"]  ."<br>"; ?>
            <?php echo $data["eduction"]["degree"]." ".$data["eduction"]["major"]. " (2022 - Present)" ; echo "<br>"; ?> 
            Undergradute Student Attend <?php echo "(" . $data["eduction"]["university"] . " - " . $data["eduction"]["faculty"] . ")"; ?><br>
            <br>
            Relevant Courses in College
            <section>
                <?php echo $data["courses"][0] ?> |
                <?php echo $data["courses"][1] ?> |
                <?php echo $data["courses"][2] ?> | 
                <?php echo $data["courses"][3] ?> |
                <?php echo $data["courses"][4] ?> |
                <?php echo $data["courses"][5] ?> 
            <br><br>
            Languagues
            <br><br>
                <?php echo $data["languague"][0]?> | 
                <?php echo $data["languague"][1]?> 
            
            </section>  
        </p>
    </div>
    <div id="contact">
        <h1>Contact Me</h1>
        <section class="sec1"><?php echo $data["email"]; echo "<br>"; 
            echo $data["phone"]; echo "<br>";
        ?><br>
        </section>
        <section class="sec2">
            <a href="<?php echo $data["linkedin"] ?>"><img src="images/linkedin.png" width="20" height="20"></a>
            <a href="<?php echo $data["github"] ?>"><img src="images/github.png" width="20" height="20"></a>
            <a href="<?php echo $data["email"] ?>"><img src="images/email.png" width="20" height="20"></a>
        </section>
    </div>
</body>
</html>