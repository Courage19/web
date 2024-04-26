<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Additional styles for list page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }
        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav ul li a:hover {
            color: #ffa500;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .item-list {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }
        .item-list li {
            border-bottom: 1px solid #eee;
            padding: 10px 0;
            font-size: 18px;
        }
        .item-list li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="list.php">List Page</a></li>
                <li><a href="table.php">Table Page</a></li>
                <li><a href="frame.html">Frame Page</a></li>
                <li><a href="form.html">Form Page</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>List of Items</h1>
            <ul class="item-list">
                <?php
                // Sample PHP code to fetch and display list items
                for ($i = 1; $i <= 10; $i++) {
                    echo "<li>Item $i</li>";
                }
                ?>
            </ul>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>
</body>
</html>
