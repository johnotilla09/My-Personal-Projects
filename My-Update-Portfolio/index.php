<!-- PHP main codes here -->
<?php

    $icon = '<img src="https://cdn-icons-png.flaticon.com/512/458/458594.png" height="17px" width="17px">';

    $flag = 0;
    $save = 0;

    $fname = $_POST['fname'] ?? null;
    $lname = $_POST['lname'] ?? null;
    $email = $_POST['email'] ?? null;
    $subject = $_POST['subject'] ?? null;
    
    if(isset($_POST['submit']) && $fname != null && $lname != null && $email != null) {

        // function database($fname, $lname, $email, $subject) {
            
            // database
            // $pdo = new PDO('mysql:host=localhost;port=3306;dbname=portfolio', 'root', ''); // database connection
            // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set error
            // database
    
        //     $statement = $pdo->prepare("INSERT INTO `message` (`fname`, `lname`, `email`, `subject`) VALUES (:fname, :lname, :email, :sub) ");
    
        //     $statement->bindValue(':fname', $fname);
        //     $statement->bindValue(':lname', $lname);
        //     $statement->bindValue(':email', $email);
        //     $statement->bindValue(':sub', $subject);
    
        //     $execute = $statement->execute();
    
        //     $GLOBAL['save'] = 1;
        // }

        // database($fname, $lname, $email, $subject);

        // database
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=portfolio', 'root', ''); // database connection
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set error
        // database

        $statement = $pdo->prepare("INSERT INTO `message` (`fname`, `lname`, `email`, `subject`) VALUES (:fname, :lname, :email, :sub) ");

        $statement->bindValue(':fname', $fname);
        $statement->bindValue(':lname', $lname);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':sub', $subject);

        $execute = $statement->execute();

        $save = 1;

    }

?>
<!-- PHP main codes here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORTFOLIO</title>

    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bangers&family=Bebas+Neue&family=Berkshire+Swash&family=My+Soul&family=Poppins:wght@300&family=Roboto:ital,wght@1,700&family=Rubik+Moonrocks&family=Rubik+Wet+Paint&family=Tapestry&family=Tinos&family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">
    <!-- Font Family -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/bootstrap.bundle.js"></script>
    <!-- Bootstrap CSS -->

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- CSS -->

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <!-- JS -->
    

    <!-- Teams -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Teams -->

    <!-- Typing -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <!-- Typing -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./fonts/css/all.min.css">
    <!-- Font Awesome -->

    <!-- Sweet ALert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
    <!-- Sweet ALert -->

</head>
<body>

    <?php if ($save == 1): ?>
        <script>
			swal("Registered Successfully!", "", "success")
			.then((value) => {
				if (value == true) {
					window.location = "index.php";
                }
			})
			</script>
    <?php endif; ?>

    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="logo"><a href="#" class="navbar-brand">Portfol<span>lio.</span></a></div>
            <ul class="navbar-nav text-dark">
                <li class="nav-item">
                    <a href="#home" class="nav-link active" area-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#service" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#skills" class="nav-link">Skills</a>
                </li>
                <li class="nav-item">
                    <a href="#teams" class="nav-link">Teams</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- Home section start -->
    <div class="home" id="home">
        <div class="container max-width">
            <div class="row home-content">
                <div class="col-6 left">
                    <div class="text-1">Hello, I am </div>
                    <div class="text-2">John C. Otilla</div>
                    <div class="text-3">I am a <span class="typing"></span></div>
                    <a href="https://docs.google.com/document/d/1kay5kxVLkIev-SLChDW5-86NnPpN-chZn_vqe8HTbBM/edit"><button type="button" class="btn btn-danger mt-4 fs-5 p-3" >Hire Me</button></a>
                </div>
                <div class="col-6 right">
                    <div class="image">
                        <img src="photo.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Home section start --> 

    <!-- About section start -->
    <section class="about" id="about">
        <div class="container max-width">
            <h2 class="title">About Me</h2>
            <div class="row about-content">
               <div class="col-6 left">
                    <img src="photo.jpg" alt="">
               </div>
               <div class="col-6 right">
                    <h4 class="text">I'am John and I'am a <span class="typing2"></span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime ratione illum delectus? Deserunt, qui expedita vitae asperiores eos ut voluptates magnam tempore fugit, reprehenderit consequuntur corporis atque! Maiores fuga corporis corrupti laudantium, perspiciatis, fugit recusandae, nesciunt sed veritatis tenetur cum molestias inventore porro! Quia ipsam error excepturi quidem iusto aut necessitatibus totam facere! Exercitationem, molestias consectetur? Minus, deserunt? Eius totam dolores quidem consequatur placeat id dignissimos similique corporis magnam, corrupti temporibus libero. Iure accusamus explicabo, sed quas rerum tempora enim natus atque ipsam error sunt voluptate, ea corrupti temporibus sit blanditiis. Cupiditate nemo recusandae iusto illum cumque, tenetur nesciunt.</p>
                    <a href="https://docs.google.com/document/d/1kay5kxVLkIev-SLChDW5-86NnPpN-chZn_vqe8HTbBM/edit"><button type="button" class="btn btn-danger fw-semibold p-3 fs-5">Download CV</button></a>
               </div>
            </div>
        </div>
    </section> 
    <!-- About section start -->

    <!-- Service section start -->
    <section class="service" id="service">
        <div class="container max-width">
            <h2 class="title">My Services</h2>
            <div class="service-content">
               <div class="cards">
                    <div class="boxs">
                        <img src="front-end.png" height="100px" width="100px" alt="">
                        <div class="text">Front-End Developer</div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et in excepturi facilis aspernatur consequatur maiores quaerat quod molestiae ad doloribus.</p>
                    </div>
               </div>
               <div class="cards">
                    <div class="boxs">
                        <img src="back-end.png" width="100px" height="100px" alt="">
                        <div class="text">Back-End Developer</div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et in excepturi facilis aspernatur consequatur maiores quaerat quod molestiae ad doloribus.</p>
                    </div>
               </div>
                <div class="cards">
                    <div class="boxs">
                        <img src="technician.png" height="100px" width="100px" alt="">
                        <div class="text">Computer Technician</div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et in excepturi facilis aspernatur consequatur maiores quaerat quod molestiae ad doloribus.</p>
                    </div>
                </div>
           </div>
        </div>
    </section>
    <!-- Service section start -->

    <!-- Skills section start -->
    <section class="skills" id="skills">
        <div class="container max-width">
            <h2 class="title">My Skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My Creative Skills & Experience</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis quam placeat cumque facere enim reprehenderit et dolorum, numquam cupiditate illo eligendi eum earum amet voluptatem dicta sint, officiis ipsa. Numquam impedit aspernatur hic quis labore accusantium expedita corrupti officiis in quos saepe minima perferendis odio, quo non! Aspernatur optio voluptatum ratione repellendus beatae reprehenderit quaerat ab ea odit harum et officiis incidunt, maiores magnam omnis modi ipsa? Ab consequuntur distinctio eum cumque sint facilis, ratione quia blanditiis consectetur fugiat molestiae accusamus sed. Reprehenderit ad aperiam dicta, explicabo accusamus quam atque debitis, error, quos non assumenda saepe pariatur ipsum iusto!</p>
                    <button type="button" class="btn btn-danger fw-semibold p-3">Read more...</button>
                </div>
                <div class="column right">
                    <!-- Front-End Development -->
                    <h4>Front-End Development</h4>
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>75%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>70%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JAVASCRIPT</span>
                            <span>30%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>BOOTSTRAP</span>
                            <span>50%</span>
                        </div>
                        <div class="line bootstrap"></div>
                    </div>
                    <!-- Front-End Development -->

                    <!-- Back-End Development -->
                    <h4>Back-   End Development</h4>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>80%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MYSQL</span>
                            <span>30%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JAVA</span>
                            <span>60%</span>
                        </div>
                        <div class="line java"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- Skills section start -->

    <!-- Teams section start -->
    <section class="teams" id="teams">
        <div class="container max-width">
            <h2 class="title">My Teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/Mark_Zuckerberg_F8_2019_Keynote_%2832830578717%29_%28cropped%29.jpg"" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, ab.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://news-cdn.softpedia.com/images/news2/microsoft-founder-bill-gates-again-the-richest-man-in-the-world-514123-2.jpg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, ab.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Elon_Musk_Royal_Society_%28crop2%29.jpg/1200px-Elon_Musk_Royal_Society_%28crop2%29.jpg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, ab.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/James_Gosling_2008.jpg/1200px-James_Gosling_2008.jpg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, ab.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Teams section start -->

    <!-- Contact start -->
    <section class="contact" id="contact">
        <div class="container max-width">
            <h2 class="title">Contact Me</h2>
            <div class="row contact-content">
                
                <!-- Column left -->
                <div class="col-6 left">
                    <h4>Get in Touch</h4>
                    <p>Need to get in touch with me? Either fill out the form with your inquery or contact me with my email below.</p>
                    <div class="info-content">
                        <div class="rows">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name:</div>
                                <div class="sub-title">John C. Otilla</div>
                            </div>
                        </div>
                        <div class="rows">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address:</div>
                                <div class="sub-title">Inascan, Guinobatan, Albay</div>
                            </div>
                        </div>
                        <div class="rows">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email:</div>
                                <div class="sub-title address">otillajohn09@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column left -->

                <!-- Column right -->
                <div class="col-6 right">
                    <div class="text">Message Me</div>
                    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                        <div class="row forms">
                            <div class="col-6 <?php echo (isset($_POST['submit']) && (!isset($fname) || strlen(trim($fname)) == 0) ? 'has_error' : $flag = 1); ?>">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Firstname" name="fname">
                                    <label for="floatingTextarea2">Firstname</label>
                                </div>
                                
                                <!-- if condition and invoking check_Error() function -->
                                <?php 
                                
                                    if (isset($_POST['submit']) && $flag != 1) {
                                        $error_Message = "$icon Firstname is requierd";
                                        check_Error($error_Message);
                                    }
                                
                                ?>
                                <!-- if condition and invoking check_Error() function -->

                            </div>
                            <div class="col-6 <?php echo (isset($_POST['submit']) && (!isset($lname) || strlen(trim($lname)) == 0) ? 'has_error' : $flag = 2); ?>">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Lastname" id="floatingTextarea2" name="lname">
                                    <label for="floatingTextarea2">Lastname</label>
                                </div>

                                <!-- if condition and invoking check_Error() function -->
                                <?php 
                                    
                                    if (isset($_POST['submit']) && $flag != 2) {
                                        $error_Message = "$icon Lastname is requierd";
                                        check_Error($error_Message);
                                    }
                                
                                ?>
                                <!-- if condition and invoking check_Error() function -->   

                            </div>
                        </div>
                        <div class="col-12 forms <?php echo (isset($_POST['submit']) && (!isset($email) || strlen(trim($email)) == 0) ? 'has_error' : $flag = 3); ?>">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingTextarea2" placeholder="Email" name="email">
                                <label for="floatingTextarea2">Email</label>
                            </div>

                                <!-- if condition and invoking check_Error() function -->
                                <?php 
                                    
                                    if (isset($_POST['submit']) && $flag != 3) {
                                        $error_Message = "$icon Email is requierd";
                                        check_Error($error_Message);
                                    }
                                
                                ?>
                                <!-- if condition and invoking check_Error() function -->

                        </div>
                        <div class="col-12 forms">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="subject"></textarea>
                                <label for="floatingTextarea2">Whay can I help you?</label>
                            </div>
                        </div>
                        <div class="button">
                            <button class="btn btn-danger w-100 p-2" name="submit" value="1">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- Column right -->

            </div>
        </div>
    </section>
    <!-- Contact start -->

    <!-- Footer section -->
    <footer>
        <div class="icons">
            <div class="icon facebook">
                <a href="https://www.facebook.com/john.otilla/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
            <div class="icon insta">
                <a href="https://www.instagram.com/otilla_john/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="icon github">
                <a href=""><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
        <div class="dev">
            <span>Created By <a href="">OtillaJohn.com</a> | <i class="far fa-copyright"></i> 2022 All right reserved.</span>
        </div>
    </footer>
    <!-- Footer section -->

</body>
</html>

<!-- PHP functions -->
<?php 

    // Error function
    function check_Error($error_Message) {
        echo "<div class=\"col-12 fade-in mt-2\">";
        echo  "<div class=\"px-0 pt-0\" role=\"alert\">";
        echo    "<p class=\"has_error\">$error_Message.</p>";
        echo  "</div>";
        echo "</div>";
    }
    // Error function

    // database function
    
    // database function
?>
<!-- PHP functions -->