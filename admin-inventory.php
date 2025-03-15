<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DJ Prestige Sound - Gestion de l'Inventaire</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/admin-style.css">
</head>
<body>
  <!-- Sidebar commun -->
  <div class="sidebar" id="sidebar">
    <div class="sidebar-header">
      <div class="d-flex align-items-center">
        <div class="music-waves">
          <div class="music-wave"></div>
          <div class="music-wave"></div>
          <div class="music-wave"></div>
          <div class="music-wave"></div>
        </div>
        <span class="logo-text">DJ Prestige Sound</span>
      </div>
      <button class="toggle-btn" id="toggleSidebar">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <div class="sidebar-menu">
      <a href="admin-dashboard.php" class="menu-item">
        <i class="fas fa-tachometer-alt"></i>
        <span>Tableau de bord</span>
      </a>
      <div class="menu-category">Gestion des demandes</div>
      <a href="admin-service-requests.php" class="menu-item">
        <i class="fas fa-clipboard-list"></i>
        <span>Demandes de service</span>
      </a>
      <a href="admin-events.php" class="menu-item">
        <i class="fas fa-calendar-alt"></i>
        <span>Événements</span>
      </a>
      <div class="menu-category">Catalogue</div>
      <a href="admin-music-library.php" class="menu-item">
        <i class="fas fa-music"></i>
        <span>Bibliothèque musicale</span>
      </a>
      <a href="admin-equipment.php" class="menu-item">
        <i class="fas fa-sliders-h"></i>
        <span>Équipement</span>
      </a>
      <a href="admin-inventory.php" class="menu-item active">
        <i class="fas fa-boxes"></i>
        <span>Inventaire</span>
      </a>
      <div class="menu-category">Équipe</div>
      <a href="admin-staff.php" class="menu-item">
        <i class="fas fa-id-card"></i>
        <span>Personnel</span>
      </a>
      <a href="admin-scheduling.php" class="menu-item">
        <i class="fas fa-calendar-check"></i>
        <span>Planification</span>
      </a>
      <div class="menu-category">Commercial</div>
      <a href="admin-invoices.php" class="menu-item">
        <i class="fas fa-file-invoice-dollar"></i>
        <span>Facturation</span>
      </a>
      <a href="admin-marketing.php" class="menu-item">
        <i class="fas fa-bullhorn"></i>
        <span>Marketing</span>
      </a>
      <a href="admin-venues.php" class="menu-item">
        <i class="fas fa-map-marker-alt"></i>
        <span>Lieux & Partenaires</span>
      </a>
      <div class="menu-category">Utilisateurs</div>
      <a href="admin-users.php" class="menu-item">
        <i class="fas fa-users"></i>
        <span>Clients</span>
      </a>
      <a href="admin-providers.php" class="menu-item">
        <i class="fas fa-user-tie"></i>
        <span>Prestataires</span>
      </a>
      <a href="admin-reviews.php" class="menu-item">
        <i class="fas fa-star"></i>
        <span>Avis clients</span>
      </a>
      <div class="menu-category">Système</div>
      <a href="admin-settings.php" class="menu-item">
        <i class="fas fa-cog"></i>
        <span>Paramètres</span>
      </a>
      <a href="admin-logs.php" class="menu-item">
        <i class="fas fa-history"></i>
        <span>Logs</span>
      </a>
      <a href="admin-analytics.php" class="menu-item">
        <i class="fas fa-chart-bar"></i>
        <span>Analytiques</span>
      </a>
    </div>
    <div class="sidebar-footer">
      <div class="user-info">
        <div class="user-avatar">
          <img src="https://via.placeholder.com/40x40" alt="Admin Avatar">
        </div>
        <div class="user-details">
          <p class="user-name">Admin</p>
          <p class="user-role">Administrateur</p>
        </div>
        <a href="logout.php" class="logout-btn" title="Déconnexion">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- Contenu principal -->
  <div class="main-content" id="mainContent">
    <div class="top-bar">
      <h1 class="page-title">Gestion de l'Inventaire</h1>
      <!-- Actions rapides éventuelles -->
    </div>
    <div class="dashboard-section">
      <!-- Ici, implémenter les tableaux ou filtres relatifs à l'inventaire -->
      <p>Contenu de gestion de l'inventaire à implémenter...</p>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>