<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuel & Flavor - Quick & Healthy Meals</title>
    <style>
        /* Advanced Technique Calibration: Fluid Sizing & Relative Typography */
        :root {
            --primary: #2e7d32;
            --primary-light: #e8f5e9;
            --accent: #e65100;
            --dark: #263238;
            --light: #fafafa;
            --white: #ffffff;
            --gray: #cfd8dc;
            
            /* Fluid Spacing & Type Scales via Relative Units */
            --padding-base: clamp(1rem, 2vw, 2.5rem);
            --font-main: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-main);
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: var(--white);
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        /* Flexbox Nav Architecture */
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem var(--padding-base);
        }

        .logo a {
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 1.5rem;
            align-items: center;
        }

        nav a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 600;
            padding: 0.5rem 0.75rem;
            border-radius: 4px;
            transition: var(--transition);
        }

        nav a:hover, nav a.active {
            color: var(--primary);
            background-color: var(--primary-light);
        }

        main {
            flex: 1;
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: var(--padding-base);
        }

        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: var(--white);
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            border-radius: 4px;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-weight: 600;
        }

        .btn:hover {
            background-color: #1b5e20;
            transform: translateY(-1px);
        }

        /* --- BREAKPOINT 1: TABLET LAYOUT ENGINE (600px - 1024px) --- */
        @media (max-width: 1024px) {
            .nav-container {
                padding: 1.25rem 1.5rem;
            }
            nav ul {
                gap: 0.75rem;
            }
            nav a {
                font-size: 0.95rem;
                padding: 0.4rem 0.6rem;
            }
        }

        /* --- BREAKPOINT 2: MOBILE LAYOUT ENGINE (Below 600px) --- */
        @media (max-width: 600px) {
            .nav-container {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }
            
            nav {
                width: 100%;
            }

            nav ul {
                flex-direction: column;
                width: 100%;
                gap: 0.5rem;
                padding: 0;
            }

            nav li {
                width: 100%;
                text-align: center;
            }

            nav a {
                display: block;
                width: 100%;
                padding: 0.6rem;
                background-color: #f8f9fa;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="nav-container">
            <div class="logo">
                <a href="index.php">🥗 Fuel & Flavor</a>
            </div>
            <nav>
                <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
                <ul>
                    <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="recipes.php" class="<?php echo $current_page == 'recipes.php' ? 'active' : ''; ?>">Recipes</a></li>
                    <li><a href="guide.php" class="<?php echo $current_page == 'guide.php' ? 'active' : ''; ?>">Meal Guide</a></li>
                    <li><a href="submit.php" class="<?php echo $current_page == 'submit.php' ? 'active' : ''; ?>">Submit Recipe</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>