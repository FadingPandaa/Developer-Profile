<h1 align="center">Developer Portfolio</h1>

My personal developer portfolio built with a cyber-industrial visual theme, neon accents, terminal style UI, and hologram project displays. Built with PHP for modular page routing CSS/JS for all interactivity.

---
## Features

- **Terminal-style hero section** — landing page greeting rendered with a typewriter effect inside a mock terminal window.
- **Hologram project podiums** — interactive, hover-reactive project showcases with image popups.
- **Secure Transmission Portal** — a styled contact form with drag-and-drop file upload and a simulated upload prcentage counter.
- **Voltage Core theme switcher** — toggle between "Cyan Nominal" and "Red Voltage Overload" color themes, persisted via the CORE_STATE button on the top right.
- **Diagnostic status UI** — console-style status messages and a preloader on page load
- **PHP-based routing** — a single entry point (`index.php`) includes the correct page based on a `page` query parameter

---
## Tech Stack

| Layer | Technology |
|---|---|
| Backend / Routing | PHP |
| Structure & Styling | HTML5, custom CSS3 |
| Interactivity | Vanilla JavaScript |


## Project Structure

```
Developer Profile/
├── index.php              # Entry point / page router
├── home-content.php        # Home page content
├── about.php                # About / skills page
├── projects.php             # Project showcase page
├── contact.php               # Contact form page
├── success.php                # Contact form success page
├── includes/
│   ├── header.php               # Shared header, nav, and theme toggle
│   └── footer.php                # Shared footer and social links
├── css/
│   └── style.css                  # All styling, including theme variables
├── js/
│   └── main.js                     # Form handling, typewriter effect, theme toggle
└── assets/                          # Project thumbnails and profile image
```

## Pages

- **Home** — hero introduction with typewriter animation and featured projects. Hover abouve the [USER_PROG] to view image.
   <img width="952" height="506" alt="Homepage" src="https://github.com/user-attachments/assets/d78f4ed4-febc-4c64-a2ef-66d87c685c4b" />

- **About** — Breif intro of myself, skills, languages/frameworks, tools/IDEs, and personal intrests.
  <img width="954" height="503" alt="About" src="https://github.com/user-attachments/assets/7bceb4f7-5d69-4110-b53b-1012bf3a47a9" />

- **Projects** — showcase of featured builds, each linking to its GitHub repository. Hover above the projects to view the project thumbnail.
  <img width="960" height="505" alt="Projects" src="https://github.com/user-attachments/assets/05560ac8-b0f0-4c5e-85c8-7a8068267ca7" />

- **Contact** — a form for sending a message, with the option to attachment a file.
<img width="950" height="500" alt="Contact" src="https://github.com/user-attachments/assets/bdae434e-bffd-4b70-8f4b-4a0a825551ce" />


## Featured Projects

- **[PennyWise](https://github.com/FadingPandaa/PennyWise-Budgeting-App)** — expense tracking app built with Kotlin/Java in Android Studio.
- **[Clinic Database System](https://github.com/FadingPandaa/Clinic-Database-System-CDS-)** — relational database system for clinical administration, built with MySQL/SSMS.
- **CyberBot** — a C# automation built in Visual Studio 2022 to help people them know what cybersecurity is at a basic level.
- **[PASTIMES](https://github.com/FadingPandaa/PASTIMES)** — a e-Commerce platform to buy, and sell clothes, built with PHP, MariaDB, and HTML/CSS.

---
## Getting Started

### Prerequisites

- PHP 7.4 or higher
- A local PHP server (built-in server, XAMPP, MAMP, etc.)

### Running Locally

1. Clone the repository:
   ```bash
   git clone https://github.com/FadingPandaa/<repo-name>.git
   cd "Developer Profile"
   ```
2. Start a local PHP server from the project root:
   ```bash
   php -S localhost:8000
   ```
3. Open `http://localhost:8000` in your browser.

## Roadmap

- [ ] Multi-page navigation with hash-based routing and page transitions
- [ ] Skeleton loading screens
- [ ] Animated SVG character on the Contact page
- [ ] Centralized site configuration (`config.php`)

## Author

**Keabetswe Masole**
- GitHub: [@FadingPandaa](https://github.com/FadingPandaa)
- LinkedIn: [keabetswe-masole](https://linkedin.com/in/keabetswe-masole)
