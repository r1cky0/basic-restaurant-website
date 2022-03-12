<!DOCTYPE html>
<html>
    <head>
        <title>Da nonna Lidia</title>
        <meta charset="utf-8">
        <link rel="icon" href="images\Logo 500x500 px.jpeg">
        <link rel="stylesheet" href="mystyle.css">
    </head>
    <body>
        <?php
            session_start();
            include("passwords.php");
            check_logged();
        ?>
        <a class="skip-nav-link" href="#aris-content">Skip to Content</a>
        <nav>
            <ul>
                <li>
                    <a href="chisiamo.html">Chi siamo?</a>
                </li>
                <li>
                    <a href="homepage.html">Home</a>
                </li>
                <li>
                    <a href="menu.html">I nostri piatti</a>
                </li>
                <li>
                    <a href="contattiprenotazioni.html">Contatti e prenotazioni</a>
                </li>
                <li style="float:right">
                    <a class="active" href="areariservata.php">Area riservata</a>
                </li>
            </ul>
        </nav>
        <main id="aris-content">
            <section>
            <h1>Gestione prenotazioni</h1>
        <form name="f1" action="dbprenotazioni.php" method="post">
            1- Mostra tutte le prenotazioni
            <input type="hidden" name="action" id="action" value="1">
            <input type="submit" value="Ok">
        </form>
        <form name="f2" action="dbprenotazioni.php" method="post">
            2- Mostra la prenotazione di una persona
            <input type="hidden" name="action" id="action" value="2">
            <input type="text" name="n" id="n" placeholder="name">
            <input type="submit" value="Ok">
        </form>
        <form name="f3" action="dbprenotazioni.php" method="post">
            3- Inserisci una nuova prenotazione<br>
            <input type="hidden" name="action" id="action" value="3">
            <input type="text" name="n" id="n" placeholder="name" size="10"><br>
            <input type="text" name="e" id="e" placeholder="email" size="10"><br>
            <input type="text" name="d" id="d" placeholder="date" size="10"><br>
            <input type="text" name="h" id="h" placeholder="hour" size="10"><br>
            <input type="text" name="p" id="p" placeholder="number" size="10"><br>
            <input type="submit" value="Ok">
        </form>
        <form name="f4" action="dbprenotazioni.php" method="post">
            4- Elimina la prenotazione di una persona
            <input type="hidden" name="action" id="action" value="4">
            <input type="text" name="n" id="n" placeholder="name">
            <input type="submit" value="Ok">
        </form>
            </section>
        </main>
        <footer>
            &copy;Nonna Lidia
        </footer>
    </body>
</html>