<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LanguaLuxe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Admin Stylesheet -->
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>LanguaLuxe</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item active">404 Page</a>
                    </div>
                </div>

            </div>
            <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log Out</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">User</h1>
                    <nav aria-label="breadcrumb">
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

     <!-- Service Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <a href="Userhome.php"><h5 class="mb-3">Profile</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <a href="Languages1.php"><h5 class="mb-3">Languages</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <a href="Quiz1.php"><h5 class="mb-3">Quizzes</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <a href="QuizScore1.php"><h5 class="mb-3">Quiz Score</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <a href="Greetings1.php"><h5 class="mb-3">Greetings and Farewell</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.11s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <a href="Food1.php"><h5 class="mb-3">Food</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <a href="Travel1.php"><h5 class="mb-3">Travel</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <a href="Frequent1.php"><h5 class="mb-3">Frequently Used Words</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

<!--Languages start-->
<div class="container">
    <?php
    // Include database connection
    include("config1.php");
    $email = $_SESSION['email'];


    // Fetch data from the Language table
    $languageQuery = "SELECT * FROM Language";
    $languageResult = $conn->query($languageQuery);
    ?>

    <h6 class="section-title bg-white text-start text-primary pe-3">User Dashboard</h6>
    <h1 class="mb-4">Languages</h1>

    <!-- Display Language table -->
    <table>
        <tr>
            <th>Language ID</th>
            <th>Language</th>
        </tr>
        <?php
        // Fetch user languages
        $userLanguagesQuery = "SELECT l.language_id, l.language FROM Language l
                              JOIN user_lang ul ON l.language_id = ul.language_id
                              JOIN user u ON ul.userid = u.userid
                              WHERE u.email = '$email'";
        $userLanguagesResult = $conn->query($userLanguagesQuery);

        if ($userLanguagesResult->num_rows > 0) {
            while ($row = $userLanguagesResult->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['language_id']}</td>";
                echo "<td>{$row['language']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No languages found for the user</td></tr>";
        }
        ?>
    </table>

    <br>

    <!-- Display menu for selecting another language -->
    <h2>Select Another Language</h2>
    <form method="post" action="add_language.php"> <!-- Create add_language.php to handle adding a language to the user -->
        <label for="language">Select a Language:</label>
        <select id="language" name="language">
            <?php
            // Display options for selecting another language
            while ($row = $languageResult->fetch_assoc()) {
                echo "<option value='{$row['language_id']}'>{$row['language']}</option>";
            }
            ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Add Language">
    </form>
</div>

<?php
// Close the database connection
$conn->close();
?>

<!--Languages end-->


   
      

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-3 col-md-6">
                </div>
                <div class="col-lg-3 col-md-6">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>