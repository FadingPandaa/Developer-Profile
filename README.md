# K_MASOLE.SYS — Developer Portfolio

A personal developer portfolio built with a cyber-industrial visual theme — neon accents, terminal-style UI, and hologram-inspired project displays. Built with PHP for modular page routing and vanilla CSS/JS for all interactivity.

**Live demo:** _add your deployed URL here_

![Status](https://img.shields.io/badge/status-active-00f0ff)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)

## Features

- **Terminal-style hero section** — landing page greeting rendered with a typewriter effect inside a mock terminal window
- **Hologram project podiums** — interactive, hover-reactive project showcases with image popups
- **Secure Transmission Portal** — a styled contact form with drag-and-drop file upload and a simulated upload progress bar
- **Voltage Core theme switcher** — toggle between "Cyan Nominal" and "Red Voltage Overload" color themes, persisted via `localStorage`
- **Diagnostic status UI** — console-style status messages and a preloader on page load
- **PHP-based routing** — a single entry point (`index.php`) includes the correct page based on a `page` query parameter

## Tech Stack

| Layer | Technology |
|---|---|
| Backend / Routing | PHP |
| Structure & Styling | HTML5, custom CSS3 |
| Interactivity | Vanilla JavaScript |
| Fonts | [Fira Code](https://fonts.google.com/specimen/Fira+Code), [Orbitron](https://fonts.google.com/specimen/Orbitron), [Rajdhani](https://fonts.google.com/specimen/Rajdhani) (Google Fonts) |
| Icons | [Font Awesome 6](https://fontawesome.com/) |

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

- **Home** — hero introduction with typewriter animation and featured projects
- **About** — skills, languages/frameworks, and tools/IDEs
- **Projects** — showcase of featured builds, each linking to its GitHub repository
- **Contact** — a form for sending a message, with optional file attachment

## Featured Projects

- **[PennyWise](https://github.com/FadingPandaa/PennyWise-Budgeting-App)** — expense tracking app built with Kotlin/Java in Android Studio
- **[Clinic Database System](https://github.com/FadingPandaa/Clinic-Database-System-CDS-)** — relational database system for clinical administration, built with MySQL/SSMS
- **CyberBot** — a C# automation utility built in Visual Studio 2022
- **[PASTIMES](https://github.com/FadingPandaa/PASTIMES)** — a social platform for event coordination, built with PHP, MariaDB, and HTML/CSS

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

## License

No license specified yet. Consider adding one (e.g. [MIT](https://choosealicense.com/licenses/mit/)) if you intend for others to reuse this code.
