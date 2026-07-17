<div class="contact-page">
    <section class="contact-hero">
        <h1 class="neon-title">GET IN TOUCH</h1>
        <p class="status-transmission-label">SYSTEM STATUS: TRANSMISSION</p>
    </section>

    <!-- Bottom Showcase Section -->
    <div class="bottom-showcase-layout">
        <div class="hologram-podium-container left-podium">
            <div class="podium-project-screen">
                <div class="podium-screen-inner">
                    <i class="fa-solid fa-link podium-icon" style="font-size:36px;color:var(--neon-cyan);"></i>
                    <span class="podium-label">LINK_SYS</span>
                    <div class="podium-stats-bar"><span>PORT: 443</span><span>SECURE</span></div>
                </div>
            </div>
            <div class="hologram-beam"></div>
            <div class="podium-base"><div class="podium-ring ring-1"></div><div class="podium-ring ring-2"></div></div>
        </div>

        <!-- Transmission Portal Section -->
        <div class="transmission-portal-wrapper profile-dossier-wrapper">
            <h2 class="portal-header-title">SECURE TRANSMISSION PORTAL</h2>

            <form id="contactForm" class="secure-transmission-portal" enctype="multipart/form-data">
                <div class="portal-form-row">
                    <div class="portal-group">
                        <label for="name">YOUR NAME AND SURNAME</label>
                        <input id="name" name="name" type="text" placeholder="Your Name" required>
                    </div>
                    <div class="portal-group">
                        <label for="email">EMAIL ADDRESS</label>
                        <input id="email" name="email" type="email" placeholder="Email Address" required>
                    </div>
                </div>

                <div class="portal-group">
                    <label for="message">WHAT DO YOU WANT TO SAY?</label>
                    <textarea id="message" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="file-drop-zone" id="dropZone">
                    <input type="file" name="fileUpload" id="fileUpload" hidden multiple>
                    <label for="fileUpload" id="dropLabel"><i class="fa-solid fa-cloud-arrow-up"></i> Drag and Drop file here OR <br> Click to Upload</label>
                    <!-- Progress Bar -->
                    <div class="progress-wrap">
                        <div class="progress-track" aria-hidden="true">
                            <div id="uploadProgress" class="progress-bar" style="width:0%;"></div>
                        </div>
                        <span id="uploadPercent">0%</span>
                    </div>
                </div>
                <div id="fileName" style="margin-top: 10px; color: var(--neon-magenta); min-height:20px;"></div>

                <button type="submit" class="portal-submit-btn">SUBMIT</button>

                <!-- Console Status Diagnostics -->
                <div class="console-status-diagnostics" style="margin-top:18px;">
                    <p>[SYS] establishing link...</p>
                    <p>[DATA] ready for transmission...</p>
                    <p class="status-glow">[STATUS] online</p>
                </div>
            </form>

            <!-- Success Message Section -->
            <div id="successMessage" class="success-screen" style="display:none; padding:40px;">
                <h2 style="color:var(--neon-cyan); font-family: 'Orbitron', sans-serif; text-align:center;">TRANSMISSION COMPLETE</h2>
                <p style="color:var(--text-muted); margin-top:10px; text-align:center;">Your mail has been successfully sent.</p>
                <div style="text-align:center; margin-top:18px;">
                    <a href="index.php?page=home" class="mini-repo-btn success-return">RETURN TO MAIN STATION</a>
                </div>
            </div>
        </div>

        <!-- Right Podium Section -->
        <div class="hologram-podium-container right-podium">
            <div class="podium-project-screen">
                <div class="podium-screen-inner">
                    <i class="fa-solid fa-key podium-icon" style="font-size:36px;color:var(--neon-magenta);"></i>
                    <span class="podium-label">SSL_CERT</span>
                    <div class="podium-stats-bar"><span>EST: 2026</span><span>ACTIVE</span></div>
                </div>
            </div>
            <!-- Hologram Beam -->
            <div class="hologram-beam"></div>
            <div class="podium-base"><div class="podium-ring ring-1"></div><div class="podium-ring ring-2"></div></div>
        </div>
    </div>
</div>