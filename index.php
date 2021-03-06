<!-- INCLUSIONI PHP -->
<?php
    include __DIR__ . '/partialsphp/FAQ.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,700;1,400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>GOOGLE FAQ</title>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="header-logo-account">
            <div class="logo">
                <img src="./img/logo.png" alt="Logo">
                <a href="#">Privacy e termini</a>
            </div>
            <div class="account">
            <a href="#">
                <i class="fas fa-bars"></i>
            </a>
            <img src="./img/user.jpeg" alt="Logo">
            </div>
        </div>
        <nav class="nav-links">
            <ul class="nav-links-list">
                <li class="nav-item">
                    <a class="nav-link" href="#"> Introduzione </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Norme sulla privacy </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Termini di servizio </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Tecnologie </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"> Domande frequenti </a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- MAIN -->
    <main class="main">

        <?php foreach ($FAQ as $singleFAQ) {  ?>

            <h2 class="question"> <?php echo $singleFAQ['question'] ?> </h2>
            <p class="answer"> <?php echo $singleFAQ['answer'] ?> </p>
            
        <?php } ?>

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-links">
                <ul class="footer-links-list">
                    <li class="footer-links-item">
                        <a class="footer-link" href="#">
                            <small>Google</small>
                        </a>
                    </li>
                    <li class="footer-links-item">
                        <a class="footer-link" href="#">
                            <small>Tutto su google</small>
                        </a>
                    </li>
                    <li class="footer-links-item">
                        <a class="footer-link" href="#">
                            <small>Privacy</small>
                        </a>
                    </li>
                    <li class="footer-links-item">
                        <a class="footer-link" href="#">
                            <small>Termini</small>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-language">
                <select name="language" id="language">
                    <option value="ita">
                        Italiano
                    </option>
                </select>
            </div>
        </div>
    </footer>



    <script src="./dist/js/script.js"></script>
</body>
</html>