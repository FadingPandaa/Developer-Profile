<!-- This is the main content of the home page, including the hero section and featured system architectures. -->
<div style="margin-top: 30px; flex: 1; width: 100%; max-width: 1400px; padding: 0 15px;">
    <div class="hero-grid" style="display: flex; width: 100%; margin-bottom: 3rem; justify-content: center;">

        <!-- Hero Section with a terminal-style card and typewriter effect for the greeting. -->
        <div class="terminal-card" style="width: 100%; max-width: 1200px; background: var(--bg-card); border: var(--border-glow-cyan); border-radius: 10px; overflow: hidden; box-shadow: 0 0 25px rgba(0, 240, 255, 0.15);">
            <div class="terminal-header" style="background: rgba(4, 9, 20, 0.95); border-bottom: 1px solid rgba(0, 240, 255, 0.15); padding: 12px 20px; display: flex; justify-content: space-between; align-items: center;">
                <div class="terminal-buttons" style="display: flex; gap: 8px;">
                    <span class="term-btn red" style="width: 12px; height: 12px; border-radius: 50%; background-color: #ff5f56; display: inline-block;"></span>
                    <span class="term-btn yellow" style="width: 12px; height: 12px; border-radius: 50%; background-color: #ffbd2e; display: inline-block;"></span>
                    <span class="term-btn green" style="width: 12px; height: 12px; border-radius: 50%; background-color: #27c93f; display: inline-block;"></span>
                </div>
                <div class="terminal-title" style="font-family: 'Fira Code', monospace; font-size: 0.85rem; color: var(--text-muted);">system_shell.sh</div>
            </div>

            <!-- Terminal body with a typewriter effect for the greeting message and a brief introduction. -->
            <div class="terminal-body" style="padding: 40px; text-align: center;">
                <p style="font-family: 'Fira Code', monospace; color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; letter-spacing: 1px;">KEA@dev-portfolio:~$ executing greeting_render.sh...</p>
                <h1 id="typewriter-effect" class="neon-title" style="margin-bottom: 25px;">HI, I'M KEABETSWE MASOLE.</h1>
                <p style="font-size: 1.15rem; color: var(--text-muted); line-height: 1.8; max-width: 900px; margin: 0 auto 2.5rem; font-family: 'Rajdhani', sans-serif;">
                    Eager junior software developer with a focus on high-performance apps, safe database management systems, and reliable mobile and website architecture.
                </p>

                <!-- Call-to-action buttons for viewing projects and contacting the developer. -->
                <div style="display: flex; gap: 20px; justify-content: center;">
                    <a href="index.php?page=projects" class="mini-repo-btn" style="text-decoration: none;"><i class="fa-solid fa-code"></i> VIEW REPOSITORIES</a>
                    <a href="index.php?page=contact" class="mini-repo-btn" style="text-decoration: none; border-color: var(--neon-magenta); color: var(--neon-magenta);"><i class="fa-solid fa-link"></i> CONTACT ME</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured System Architectures Section -->
    <div style="margin-top: 4rem; padding-bottom: 60px;">
        <h3 style="font-family: 'Orbitron', sans-serif; color: var(--neon-cyan); letter-spacing: 3px; font-size: 1.2rem; text-transform: uppercase; margin-bottom: 2rem;">FEATURED SYSTEM ARCHITECTURES</h3>

        <!-- Grid layout for showcasing featured projects with adaptive spacing. -->
        <div class="bottom-showcase-layout" style="display: grid; grid-template-columns: 280px 1fr 280px; gap: 40px; align-items: stretch;">
            <div class="hologram-podium-container left-podium" style="display: flex; flex-direction: column; align-items: center; justify-content: flex-end;">
                <div class="hover-scan-wrapper" style="position: relative; width: 100%; display: flex; flex-direction: column; align-items: center;">
                    
                <!-- Hologram image popup that appears on hover over the left podium. -->
                    <style>
                        .hover-scan-wrapper:hover .hologram-image-popup {
                            opacity: 1 !important;
                            visibility: visible !important;
                        }
                    </style>

                    <!-- Hologram image popup that appears on hover over the left podium. -->
                    <div class="hologram-image-popup" style="
                        position: absolute;
                        bottom: 120px;
                        left: 50%;
                        transform: translateX(-50%);
                        width: 240px;
                        height: 280px;
                        background: rgba(4, 9, 20, 0.98);
                        border: 2px solid var(--neon-cyan);
                        border-radius: 8px;
                        opacity: 0;
                        visibility: hidden;
                        transition: opacity 0.3s ease;
                        z-index: 100;
                        pointer-events: none;
                        padding: 10px;
                        box-shadow: 0 0 20px rgba(0, 240, 255, 0.4);">
                        <img src="assets/Me.jpeg" alt="Profile" style="width: 100%; height: 210px; object-fit: cover; border-radius: 4px;">
                        <div style="color: var(--neon-cyan); font-family: 'Fira Code', monospace; font-size: 0.7rem; text-align: center; margin-top: 10px;">[IDENTITY_CONFIRMED]</div>
                    </div>

                    <!-- Left podium with a hologram effect and a user icon representing the developer's profile. -->
                    <div class="podium-project-screen" style="transform: perspective(500px) rotateY(12deg); background: rgba(6, 12, 24, 0.75); border: 1px solid var(--neon-cyan); padding: 20px; border-radius: 8px; width: 100%; cursor: pointer;">
                        <div class="podium-screen-inner" style="text-align: center;">
                            <div class="scanner-node" style="width: 80px; height: 80px; border-radius: 50%; border: 2px solid var(--neon-cyan); display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">
                                <i class="fa-solid fa-user-gear" style="font-size: 2rem; color: var(--neon-cyan);"></i>
                            </div>
                            <span class="podium-label" style="font-family: 'Orbitron'; font-size: 0.95rem;">USER_PROG</span>
                        </div>
                    </div>
                </div>

                <!-- Hologram beam effect for the left podium. -->
                <div class="hologram-beam"></div>
                <div class="podium-base">
                    <div class="podium-ring ring-1"></div>
                    <div class="podium-ring ring-2"></div>
                </div>
            </div>

            <!-- Right podium with a hologram effect and a database icon representing the Clinic Database System project. -->
            <div style="display: flex; flex-direction: column; gap: 24px;">
                <div class="mini-project-box" style="display: flex; flex-direction: column; gap: 15px; padding: 25px; background: var(--bg-card); border: 1px solid rgba(0,240,255,0.15); border-radius: 8px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">

                        <!-- Project 1: PennyWise Budgeting App with a brief description and a link to the GitHub repository. -->
                        <h4 style="font-family: 'Orbitron', sans-serif; font-size: 1.25rem; color: var(--text-primary);"><i class="fa-solid fa-wallet"></i> PennyWise Budgeting App</h4>
                        <span class="mini-tag" style="font-size: 0.7rem;"><i class="fa-brands fa-android"></i> Android Studio</span>
                    </div>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">
                        A smart, personal financial expense tracking application for Android, built within Android Studio using Kotlin and Java.
                    </p>
                    <a href="https://github.com/FadingPandaa/PennyWise-Budgeting-App" target="_blank" style="color: var(--neon-cyan); font-family: 'Fira Code', monospace; font-size: 0.85rem; text-decoration: none;"><i class="fa-solid fa-code-commit"></i> View Repository</a>
                </div>

                <!-- Project 2: Clinic Database System with a brief description and a link to the GitHub repository. -->
                <div class="mini-project-box" style="display: flex; flex-direction: column; gap: 15px; padding: 25px; background: var(--bg-card); border: 1px solid rgba(0,240,255,0.15); border-radius: 8px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <h4 style="font-family: 'Orbitron', sans-serif; font-size: 1.25rem; color: var(--text-primary);"><i class="fa-solid fa-file-medical"></i> Clinic Database System</h4>
                        <span class="mini-tag" style="font-size: 0.7rem;"><i class="fa-solid fa-database"></i> MySQL</span>
                    </div>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">
                        A high-integrity database system built using MySQL and SQL Server Management Studio (SSMS 20) to coordinate patient records at clinics.
                    </p>
                    <a href="https://github.com/FadingPandaa/Clinic-Database-System-CDS-" target="_blank" style="color: var(--neon-cyan); font-family: 'Fira Code', monospace; font-size: 0.85rem; text-decoration: none;"><i class="fa-solid fa-code-commit"></i> View Repository</a>
                </div>
            </div>

            <!-- Right podium with a hologram effect and a system core status display. -->
            <div class="hologram-podium-container right-podium" style="display: flex; flex-direction: column; align-items: center; justify-content: flex-end;">
                <div class="podium-project-screen" style="transform: perspective(500px) rotateY(-12deg); background: rgba(6, 12, 24, 0.75); border: 1px solid var(--neon-magenta); padding: 20px; border-radius: 8px;">
                    <div class="podium-screen-inner" style="text-align: center;">

                        <!-- System core status display with a hologram effect and a label indicating the active state. -->
                        <div style="display: flex; flex-direction: column; gap: 4px; align-items: center; margin-bottom: 15px;">
                            <span style="height: 3px; width: 30px; background: var(--neon-magenta); display: block;"></span>
                            <span style="height: 3px; width: 30px; background: var(--neon-magenta); display: block;"></span>
                        </div>
                        <span class="podium-label" style="font-family: 'Orbitron', sans-serif; font-size: 0.95rem; display: block; margin-bottom: 5px; color: var(--text-primary);">SYS_CORE</span>
                        <span style="font-family: 'Fira Code', monospace; font-size: 0.75rem; color: var(--neon-magenta); letter-spacing: 1px;">READY TO LAUNCH</span>
                    </div>
                </div>

                <!-- Hologram beam effect for the right podium. -->
                <div class="hologram-beam"></div>
                <div class="podium-base">
                    <div class="podium-ring ring-1"></div>
                    <div class="podium-ring ring-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>