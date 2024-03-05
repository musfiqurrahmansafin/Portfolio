<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md. Musfiqur Rahman</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">MR<span>safin</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#projects" class="menu-btn">Projects</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
	<section class="home" id="home">
		<div class="max-width">
			<div class="home-content">
				<div class="text-1">Hello, My name is</div>
				<div class="text-2">Md. Musfiqur Rahman</div>
				<div class="text-1">studing Computer Science and Engineering at Khulna University of Engineering & Technology</div>
				<div class="text-3">And I'm a <span class="typing"></span></div>
				<div class="socials-container">
					<img src="images\github.png" alt="My Github Profile" class="icon"
						onclick="location.href='https://github.com/musfiqurrahmansafin'" />
                    <img src="images/codeforces.png" alt="My Codeforces Profile" class="icon"
						onclick="location.href='https://codeforces.com/profile/__shafin'" />
                    <img src="images/facebook.png" alt="My Facebook Profile" class="icon"
						onclick="location.href='https://www.facebook.com/musfiqurrahmansafin'" />
                    <img src="images\linkedin.png" alt="My LinkedIn Profile" class="icon"
						onclick="location.href='https://www.linkedin.com/in/md-musfiqur-rahman-a1148a273/'" />
				</div>
			</div>
		</div>
	</section>
	<!-- about section start  -->
	<section class=" about" id="about">
					<div class="max-width">
						<h2 class="title">About me</h2>
						<div class="about-content">
							<div class="column left">
								<img src="images/profile-1.jpeg" alt="">
							</div>
							<div class="column right">
								<div class="text">I'm Safin and I'm a <span class="typing-2"></span></div>
								<p>I am currently pursuing my Bachelor of Science degree in Computer Science and Engineering at Khulna University of Engineering & Technology, Bangladesh. I am in the final year of my studies and have a CGPA of 3.92 out of 4.0. I have secured the second position out of 123 students in my batch. My research interests lie in the fields of Machine Learning and Natural Language Processing. I have co-authored two journal articles and four conference papers in these domains. I am also working on two more journal papers that are under review (Journal of Artificial Intelligence Research, Expert Systems with Applications). I have participated in several national and international competitions and hackathons related to AI and NLP. I have also completed an internship at the Center for Artificial Intelligence and Robotics (CAIR) in India, where I developed a chatbot for disaster management.</p>
								
								<!-- <a href="https://drive.google.com/file/d/1ex13ekrevnSuxiMsPGWuCkyaL15XNx_y/view?usp=sharing">Download CV</a> -->
							</div>
						</div>
					</div>
	</section>
    
    
<?php include 'db.php';?>

<!-- Projects section start -->
<section class="projects" id="projects">
        <div class="max-width">
            <h2 class="title">My Projects</h2>
            <div class="projects-content">
                <?php
                $sql = "SELECT id, title, description, languages, url FROM projects";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="card">
                            <div class="box">
                                <div class="text">' . htmlspecialchars($row["title"]) . '</div>
                                <p>' . htmlspecialchars($row["description"]) . '</p>
                                <div class="project-details">
                                    <div class="languages-used">
                                        <strong>Languages/Frameworks:</strong> ' . htmlspecialchars($row["languages"]) . '
                                    </div>
                                    <div class="project-link">
                                        <a href="' . htmlspecialchars($row["url"]) . '" target="_blank">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo "<p>No projects to display.</p>";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </section>
    <!-- Projects section end -->




    
    <!-- Skills section start -->
<section class="skills" id="skills">
    <div class="max-width">
        <h2 class="title">My Skills</h2>
        <div class="skills-content">
            <!-- Competitive Programming -->
            <div class="skill">
                <h3>Competitive Programming</h3>
                <div class="progress">
                    <div class="progress-bar" style="width: 85%;">85%</div>
                </div>
            </div>
            <!-- Programming Languages -->
            <div class="skill">
                <h3>Programming Languages</h3>
                <p>C, C++, Python</p>
                <div class="progress">
                    <div class="progress-bar" style="width: 90%;">90%</div>
                </div>
            </div>
            <!-- Web Development -->
            <div class="skill">
                <h3>Web Development</h3>
                <p>HTML, CSS, JavaScript</p>
                <div class="progress">
                    <div class="progress-bar" style="width: 80%;">80%</div>
                </div>
            </div>
            <!-- App Development -->
            <div class="skill">
                <h3>App Development</h3>
                <p>Java, Android</p>
                <div class="progress">
                    <div class="progress-bar" style="width: 75%;">75%</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Skills section end -->

    
    <!-- contact section start -->
<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Contact me</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Get in Touch</div>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title">Md. Musfiqur Rahman</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">CSE, KUET, Khulna, Bangladesh</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">musfiqurrahman232@gmail.com</div>
                            <div class="sub-title">rahman2007043@stud.kuet.ac.bd</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">
                <div class="text">Message me</div>
                <form action="#">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Name" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Subject" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                    </div>
                    <div class="button-area">
                        <button type="submit">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- contact section end -->

    <script src="script.js"></script>
</body>
</html>
