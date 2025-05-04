<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
        }
        
        .dashboard-container {
            display: flex;
            min-height: calc(100vh - 80px);
            padding-top: 20px;
        }
        
        .dashboard-sidebar {
            width: 280px;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-left: 5%;
            height: fit-content;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .user-profile {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 20px;
        }
        
        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #2563eb;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin: 0 auto 10px;
            font-weight: bold;
        }
        
        .user-profile h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }
        
        .user-email {
            color: #666;
            font-size: 14px;
        }
        
        .sidebar-nav {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .nav-item {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 6px;
            color: #555;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .nav-item:hover {
            background-color: #f3f4f6;
        }
        
        .nav-item.active {
            background-color: #eff6ff;
            color: #2563eb;
        }
        
        .nav-item i {
            width: 20px;
            margin-right: 12px;
        }
        
        .dashboard-main {
            flex: 1;
            padding: 0 5%;
        }
        
        .content-header {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .content-header h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }
        
        .content-header p {
            color: #666;
        }
    </style>
</head>
<body>
    @include('components.nav')
    
    <div class="dashboard-container">
        <!-- Sidebar Navigation -->
        <aside class="dashboard-sidebar">
            <div class="user-profile">
                <div class="avatar">JD</div>
                <h3>Jean Dupont</h3>
                <span class="user-email">jean.dupont@example.com</span>
            </div>
            
            <nav class="sidebar-nav">
                <a href="#" data-tab="mes-annonces" class="nav-item active">
                    <i class="fas fa-bullhorn"></i>
                    <span>Mes annonces</span>
                </a>
                <a href="#" data-tab="mes-favoris" class="nav-item">
                    <i class="fas fa-heart"></i>
                    <span>Mes favoris</span>
                </a>
                <a href="#" data-tab="parametres" class="nav-item">
                    <i class="fas fa-cog"></i>
                    <span>Paramètres</span>
                </a>
            </nav>
        </aside>
        
        <!-- Main Content -->
        <main class="dashboard-main">
            <div class="content-header">
                <h1>Mes annonces</h1>
                <p>Gérez et consultez toutes vos annonces en ligne</p>
            </div>
            
            <div id="content-area">
                <!-- Content will be loaded here -->
            </div>
        </main>
    </div>
    
    @include('components.footer')
    
    <script>
        // Navigation handling
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all nav items
                document.querySelectorAll('.nav-item').forEach(nav => {
                    nav.classList.remove('active');
                });
                
                // Add active class to clicked item
                this.classList.add('active');
                
                // Get the tab name
                const tab = this.dataset.tab;
                
                // Update header
                const header = document.querySelector('.content-header');
                let headerTitle = '';
                let headerDesc = '';
                
                switch(tab) {
                    case 'mes-annonces':
                        headerTitle = 'Mes annonces';
                        headerDesc = 'Gérez et consultez toutes vos annonces en ligne';
                        break;
                    case 'mes-favoris':
                        headerTitle = 'Mes favoris';
                        headerDesc = 'Retrouvez vos annonces favorites';
                        break;
                    case 'parametres':
                        headerTitle = 'Paramètres';
                        headerDesc = 'Gérez votre compte et vos préférences';
                        break;
                }
                
                header.innerHTML = `
                    <h1>${headerTitle}</h1>
                    <p>${headerDesc}</p>
                `;
                
                // Load content based on tab
                loadTabContent(tab);
            });
        });
        
        function loadTabContent(tab) {
            const contentArea = document.getElementById('content-area');
            
            switch(tab) {
                case 'mes-annonces':
                    contentArea.innerHTML = `
                        <div class="annonces-list">
                            ${getMesAnnoncesContent()}
                        </div>
                    `;
                    break;
                case 'mes-favoris':
                    contentArea.innerHTML = `
                        <div class="favoris-list">
                            ${getMesFavorisContent()}
                        </div>
                    `;
                    break;
                case 'parametres':
                    contentArea.innerHTML = `
                        <div class="parametres-section">
                            ${getParametresContent()}
                        </div>
                    `;
                    break;
            }
        }
        
        // Initial load
        loadTabContent('mes-annonces');
    </script>
</body>
</html>