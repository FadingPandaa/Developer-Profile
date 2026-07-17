<?php
$currentPage = isset($page) ? $page : 'home'; // Set the current page for navigation highlighting.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keabetswe Masole | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&family=Orbitron:wght@700;800;900&family=Rajdhani:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!-- Preloader and header section -->
<div id="cyber-preloader" aria-hidden="true">
    <div class="loading-text">Initializing Systems...</div>
</div>

<!-- Header and Navigation -->
<header class="main-header">
    <div class="container">
        <nav class="navbar">
            <div style="grid-column: 1;">
                <a href="index.php?page=home" style="text-decoration: none;">
                    <span style="font-family: 'Orbitron', sans-serif; font-weight: 900; color: var(--text-primary); letter-spacing: 2px;">K_MASOLE.SYS</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="nav-links">
                <a href="index.php?page=home" class="nav-link-item <?php echo $currentPage === 'home' ? 'active' : ''; ?>">Home</a>
                <a href="index.php?page=about" class="nav-link-item <?php echo $currentPage === 'about' ? 'active' : ''; ?>">About</a>
                <a href="index.php?page=projects" class="nav-link-item <?php echo $currentPage === 'projects' ? 'active' : ''; ?>">Projects</a>
                <a href="index.php?page=contact" class="nav-link-item <?php echo $currentPage === 'contact' ? 'active' : ''; ?>">Contact</a>
            </div>

            <!-- System Status Dashboard -->
            <div class="micro-status-dashboard">
                <button class="system-palette-trigger" id="voltageTrigger" style="background: none; border: 1px solid rgba(0,240,255,0.3); padding: 6px 12px; cursor: pointer; display: flex; align-items: center; gap: 8px; border-radius: 4px;">
                    <span id="coreStatusLabel" class="status-cyan" style="color: var(--neon-cyan); font-family: 'Fira Code', monospace; font-size: 0.8rem;">CORE_STATE: CYAN_NOMINAL</span>
                    <div class="rotating-reactor">
                        <i class="fa-solid fa-atom"></i>
                        <div class="reactor-halo"></div>
                    </div>
                </button>
            </div>
        </nav>
    </div>
</header>

<main class="content-wrapper">
    <div class="container">