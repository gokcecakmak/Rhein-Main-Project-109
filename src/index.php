<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stochastik Rhein-Main</title>
    <style>
        :root {
            --orange: #e8913a;
            --grey: #8a8a8a;
            --text: #333;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: "Lato", "Helvetica Neue", Arial, sans-serif;
            font-size: 14px;
            line-height: 1.6;
            color: var(--text);
            background: #fff;
        }
        a { color: inherit; text-decoration: none; }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }

        /* ---------- Header ---------- */
        header .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .logo {
            font-size: 24px;
            letter-spacing: 3px;
            color: #444;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 30px;
        }
        nav a { font-size: 13px; color: #444; }
        nav a:hover, nav a.active { color: var(--orange); }

        /* ---------- Banner ---------- */
        .banner {
            height: 240px;
            background:
                linear-gradient(90deg, rgba(110,110,110,.9), rgba(210,210,210,.6) 50%, rgba(100,200,215,.8)),
                linear-gradient(180deg, #e0e0e0, #6fcfdc);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .button {
            display: inline-block;
            background: var(--orange);
            color: #fff;
            font-size: 16px;
            padding: 8px 22px;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,.2);
            transition: background .2s;
        }
        .button:hover { background: #d27a22; }

        /* ----------Columns for uber uns, veranstaltung...----------*/
        .features {
            background: #fafafa;
            padding: 40px 0 50px;
        }
        .features .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            text-align: center;
        }
        .feature { max-width: 260px; margin: 0 auto; }
        .feature h3 {
            margin: 0 0 14px;
            font-size: 15px;
        }
        .feature p { margin: 0 0 6px; font-size: 13px; }
        .more { color: var(--grey); font-size: 13px; }
        .more:hover { color: var(--orange); }

        /* The middle column (Veranstaltungen) is orange in the design */
        .feature.highlight .icon { border-color: var(--orange); color: var(--orange); }
        .feature.highlight h3 { color: var(--orange); }

        /* ---------- Footer with universities ---------- */
        footer {
            background: #fafafa;
            border-top: 1px solid #eee;
            box-shadow: 0 -3px 6px rgba(0,0,0,.04);
            padding: 30px 0;
            margin-top: 20px;
        }
        footer .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .uni {
            font-size: 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
            line-height: 1.3;
            color: #444;
        }
    </style>
</head>
<body>

<!----- HEADER ----->
<header>
    <div class="container">
        <a href="index.php" class="logo">RHEIN-MAIN</a>
        <nav>
            <ul>
                <li><a href="#">Veranstaltungen &#9662;</a></li>
                <li><a href="#">Über uns</a></li>
                <li><a href="#">Personen &#9662;</a></li>
                <li><a href="#">Kontakt</a></li>
                <li><a href="#">News</a></li>
                <li><a href="index.php" class="active">Startseite</a></li>
            </ul>
        </nav>
    </div>
</header>

<!----- BANNER ----->
<section class="banner">
    <a href="#" class="button">Aktuelle Veranstaltungen</a>
</section>

<!----- THREE COLUMNS ----->
<section class="features">
    <div class="container">

        <div class="feature">
            <div class="icon">
                <!-- "i" icon -->
            </div>
            <h3>Über uns</h3>
            <p>Stochastik Rhein-Main ist eine Kooperation der Arbeitsgruppen im Bereich
               Wahrscheinlichkeitstheorie und Statistik der Universitäten Darmstadt,
               Frankfurt und Mainz...</p>
            <a href="#" class="more">&raquo; Mehr erfahren</a>
        </div>

        <div class="feature highlight">
            <div class="icon">
                <!-- calendar icon -->
            </div>
            <h3>Veranstaltungen</h3>
            <p>Aktuelle Vorträge, Veranstaltungen, Meetings...</p>
            <a href="#" class="more">&raquo; Mehr erfahren</a>
        </div>

        <div class="feature">
            <div class="icon">
                <!-- people icon -->
            </div>
            <h3>Personen</h3>
            <p>Wissenschaftlerinnen und Wissenschaftler in den Arbeitsgruppen Stochastik
               der Rhein-Main-Universitäten.</p>
            <a href="#" class="more">&raquo; Mehr erfahren</a>
        </div>

    </div>
</section>

<!------ FOOTER ------>
<footer>
    <div class="container">
        <div class="uni">Technische<br>Universität<br>Darmstadt</div>
        <div class="uni">Goethe<br>Universität<br>Frankfurt am Main</div>
        <div class="uni">Johannes Gutenberg<br>Universität Mainz</div>
    </div>
</footer>

</body>
</html>