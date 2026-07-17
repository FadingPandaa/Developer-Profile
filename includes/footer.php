    </div>
</main>

<!-- Footer Section -->
<footer class="main-footer">
    <div class="container footer-content">
        <p class="copyright-text">&copy; <?php echo date('Y'); ?> Keabetswe Masole. All Rights Reserved.</p>
        <div class="social-links">
            <a href="https://github.com/FadingPandaa" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-github"></i></a>
            <a href="https://linkedin.com/in/keabetswe-masole" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>
</footer>

<!-- JavaScript Files -->
<script>
    window.addEventListener('load', function() {
        const preloader = document.getElementById('cyber-preloader');
        setTimeout(function() {
            if (preloader) {
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
            }
            document.body.classList.add('page-visible');
        }, 800);
    }, { once: true });
</script>

<!-- Main JavaScript File -->
<script src="js/main.js"></script>

</body>
</html>