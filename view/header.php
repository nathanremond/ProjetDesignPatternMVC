<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     header {
            background-color: #333;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: center; 
            flex-direction: column; 
        }

    nav {
            display: flex;
            gap: 20px;
            
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
    
        nav a:hover,
        nav a:focus {
            background-color: #555;
        }
</style>
<body>
    <header>
        <a href="index.php"><img src="../image/logo.png" alt="logo SmartBike"></a>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="index.php?page=velos">Velos</a>
            <a href="index.php?page=contact">Contact</a>
        </nav>
    </header>
</body>
</html>