# 5CS045_FULL-STACK-DEV

A simple full-stack web application (PHP + MySQL) for managing a games list — created as part of the 5CS045 Full-Stack Development coursework. It includes basic CRUD operations, search, and a contact form. The project is intended for learning and demonstration purposes.

## Features
- Add, list, view details, search and delete games
- Simple contact form
- Modular templates folder for shared UI components
- Example weekly exercise pages (week01.php, week02.php)

## Tech stack
- PHP (server-side)
- MySQL (database)
- HTML/CSS (front-end)
- Plain PHP templates (templates/)

## Repository structure
- add-game.php — Form and handler to add a new game
- delete-game.php — Delete a game by ID
- game-details.php — View details for a specific game
- list-games.php — List all games
- search-games.php — Search games by title/other fields
- contact-us.php — Simple contact form
- db.php — Database connection (update with your DB credentials)
- templates/ — Shared header/footer or other UI components
- week01.php, week02.php — Course exercise pages

## Getting started

Prerequisites
1. PHP 7.x or 8.x
2. MySQL / MariaDB
3. A local web server environment (XAMPP, MAMP, WAMP, LAMP) or a PHP-enabled host

1. Clone the repository
   git clone https://github.com/Hthapa-A/5CS045_FULL-STACK-DEV.git
   cd 5CS045_FULL-STACK-DEV

2. Place the project in your web server document root (e.g., htdocs for XAMPP) or configure your vhost.

3. Create the database and tables
   Example SQL schema (create a new database named `games_db` or choose your own name):

   CREATE DATABASE games_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   USE games_db;

   CREATE TABLE games (
     id INT AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR(255) NOT NULL,
     platform VARCHAR(100),
     genre VARCHAR(100),
     release_year YEAR,
     description TEXT,
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   CREATE TABLE contacts (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(255) NOT NULL,
     email VARCHAR(255) NOT NULL,
     message TEXT NOT NULL,
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

4. Configure database connection
   - Open db.php and update the hostname, username, password and database name to match your environment.
   - Alternatively implement environment-based configuration if deploying to a remote host.

5. Open in browser
   - list-games.php — view all games
   - add-game.php — add a new game
   - game-details.php?id=<game_id> — view details
   - search-games.php — search games
   - contact-us.php — contact form

## Security & Notes
- The codebase is designed for learning. Before using in production:
  - Use prepared statements (PDO or mysqli with bound parameters) to prevent SQL injection.
  - Validate and sanitize all user inputs.
  - Protect file uploads (if added) and escape output to prevent XSS.
  - Use proper error handling and avoid exposing DB credentials.
- db.php currently contains the DB connection — consider moving credentials to environment variables.

## Customization ideas
- Replace raw SQL with PDO and prepared statements.
- Add user authentication (login / admin panel) for protected operations.
- Add pagination for list-games.php.
- Improve UI with Bootstrap or another CSS framework.
- Add server-side validation and client-side form validation.

## Contributing
This repository is a coursework/demo project. If you want to suggest improvements:
- Fork the repo
- Create a feature branch
- Open a pull request with a clear description of changes

If you want me to:
- Convert the project to use PDO prepared statements
- Add a database import SQL file
- Add simple styling with Bootstrap
say which option and I’ll prepare the changes.

## License
This project does not include an explicit license. If you want an open-source license, consider adding an MIT or Apache-2.0 LICENSE file.

## Contact
If you need help setting up the project locally, tell me:
- Your operating system
- Which webserver stack you use (XAMPP, LAMP, etc.)
- Any errors you encounter
and I’ll guide you through the fix.# 5CS045_FULL-STACK-DEV
