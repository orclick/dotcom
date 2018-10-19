<?php
  if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto+Slab" rel="stylesheet">
    <style>
        .grid {
            display: grid;
            grid-template-columns: 150px auto 150px;
            grid-template-rows: repeat(3);
            grid-gap: 1em;
        }

        header,
        aside,
        article,
        footer {
            border: 1px solid #ccc;
            padding: 1em;
        }

        header, footer {
            grid-column: 1 / 4;
        }

        footer {
            font-size:80%;
        }

        /* Demo Specific Styles */
        body {
            padding: 1em 0;
            font-family: 'Roboto Slab', serif;
        }
        
        h1,h2,h3,h4,h5,h6 {
            font-family: 'Raleway', sans-serif;
        }

        #logo {
            width: 25%;
            text-align: center;
            border: 1px solid #ccc;
            padding: 1em;
            margin: 3em;
        }

        #header {
            width: 75%;
            text-align: center;
            padding: 2em;
            margin: 2em;
        }
    </style>
</head>
<body>
<div class="grid">
    <header>
        <div id="logo"><h2>Logo</h2></div>
        <div id="header"><h1>Header</h1></div>
    </header>

    <aside class="sidebar-left">
        <h1>Left Sidebar</h1>
        <ul>
            <li>Item</li>
            <li>Item</li>
            <li>Item</li>
            <li>Item</li>
            <li>Item</li>
            <li>Item</li>
        </ul>
    </aside>

    <article>
        <h1>Article</h1>
        <p>Gingerbread cake jelly pudding jelly beans. Fruitcake gingerbread wafer wafer gingerbread apple pie marshmallow. Biscuit jelly cookie dragée brownie dessert carrot cake macaroon bonbon. Thanks to: Cupcake Ipsum.</p>
    </article>

    <aside class="sidebar-right">
        <h1>Right Sidebar</h1>
        <ul>
            <li>Small Card</li>
            <li>Small Card</li>
            <li>Small Card</li>
            <li>Small Card</li>
        </ul>
    </aside>

    <footer>
        Copyright © 2013 - <?php echo date("Y"); ?> Orclick
    </footer>
</div>
</body>
</html>
