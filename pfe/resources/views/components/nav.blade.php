<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Optimisation chargement des polices/icônes -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    
    <title>Barre de navigation moderne</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
        }
 a{
    text-decoration: none
 }
        nav.navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 10px 5%;
            background-color: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2563eb;
            display: flex;
            align-items: center;
            gap: 8px;
            animation: slideInLeft 0.6s ease forwards;
        }

        .search-container {
            flex: 1 1 100%;
            margin: 12px 0;
            max-width: 600px;
            position: relative;
            opacity: 0;
            animation: slideUpFade 0.6s ease 0.2s forwards;
            will-change: transform, opacity;
        }

        .search-bar {
            display: flex;
            position: relative;
        }

        .search-bar input {
            width: 100%;
            padding: 12px 20px;
            border: none;
            border-radius: 12px;
            background: #f1f5f9;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .search-bar input:focus,
        .search-bar input:focus-visible {
            outline: none;
            background: #fff;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.2);
        }

        .search-bar button {
            position: absolute;
            right: 6px;
            top: 6px;
            bottom: 6px;
            padding: 0 16px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: transform 0.2s ease, background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .search-bar button:hover {
            background-color: #1d4ed8;
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.06);
        }

        .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            opacity: 0;
            animation: zoomIn 0.5s ease 0.4s forwards;
            will-change: transform, opacity;
        }

        .btn {
            padding: 10px 18px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: transform 0.2s ease, background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:focus-visible,
        .search-bar button:focus-visible {
            outline: 2px solid #2563eb;
            outline-offset: 2px;
        }

        .btn-publish {
            background-color:  #ea580c;
            color: white;
            box-shadow: 5px 4px 6px rgba(249, 115, 22, 0.1);
            transition: background 0.3s ease, transform 0.2s ease;

        }


        .btn-publish:hover {
        background-color: #d9480f;
        transform: translateY(-2px);
        }

        .btn-login {
            background-color: transparent;
            color: #2563eb;
            border: 2px solid #e2e8f0;
        }

        .btn-login:hover {
            background-color: rgba(37, 99, 235, 0.05);
            border-color: #2563eb;
        }

        @media (min-width: 769px) {
            .search-container {
                margin: 0 5%;
                flex: 1;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: stretch;
            }

            .actions {
                justify-content: center;
                width: 100%;
            }

            .search-bar button {
                right: 5px;
                top: 5px;
                bottom: 5px;
                padding: 0 14px;
            }
        }

        /* Animations */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideUpFade {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="Barre de navigation principale">
        <div class="logo-text">
            <i class="fa-solid fa-bag-shopping"></i> Annoncia
        </div>

        <div class="search-container">
            <div class="search-bar">
                <input type="text" placeholder="Rechercher..." aria-label="Champ de recherche">
                <button id="search-btn" aria-label="Rechercher">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Rechercher
                </button>
            </div>
        </div>

        <div class="actions">
            <a href="">
                <button class="btn btn-login" id="login-btn">
                    <i class="fa-solid fa-right-to-bracket"></i>
                Connexion
            </button></a>

            <button class="btn btn-publish" id="publish-btn">
                <i class="fa-solid fa-square-plus"></i>
                Déposer une annonce 
            </button>
        </div>
    </nav>
</body>
</html>
