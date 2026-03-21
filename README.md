# Symphony Encyclopedia - Phase 3

Symphony is a web application that showcases beautiful musical instruments. Initially a static HTML site, it has been updated to include full backend capabilities using PHP and MySQL.

## Features
- **Instrument Encyclopedia:** Browse history, mechanics, and families of instruments.
- **User Authentication:** Secure user registration and login functionality using PHP sessions and password hashing.
- **Member Dashboard:** A protected area showing all cataloged instruments from the database.
- **Contact Form:** Send queries that are recorded securely in the database.

## System Requirements
- PHP 7.4 or higher
- MySQL / MariaDB (via XAMPP/WAMP)
- Web Server (Apache)

## Setup Steps

### 1. Database Setup
1. Start the **Apache** and **MySQL** services in your XAMPP/WAMP control panel.
2. Open [phpMyAdmin](http://localhost/phpmyadmin) in your web browser.
3. If necessary, create a new database named `symphony`.
4. Click on the `symphony` database, then navigate to the **Import** tab.
5. Choose the `database.sql` file located in the root directory of this project.
6. Click **Go** to execute the import. This will create the `users`, `messages`, and `instruments` tables and populate them with the default instrument data.

### 2. Running the Project
1. Place the entire `Symphony` project folder into your local server root directory (e.g., `C:\xampp\htdocs\Symphony` or WAMP's `www` folder).
2. Ensure your XAMPP/WAMP server is running.
3. Open a web browser and navigate to: `http://localhost/Symphony/`
4. You can now use the website, register a new account, log in, browse the protected dashboard, and use the contact form.

## Submission Details
- **Theme:** Musical Instruments
- **Tables:** `users` (auth), `messages` (contact form), `instruments` (theme data)
- **Database Dump:** `database.sql` included in the root folder.
