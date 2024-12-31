# PHP Project with DVWA Integration

This project consists of three PHP files: `index.php`, `vuln.php`, and `anti.php`. It integrates with the **Damn Vulnerable Web Application (DVWA)** database to demonstrate different request handling techniques.

## File Overview

1. **`index.php`**  
   This is the main page where users can select the destination of their request. It acts as a routing interface between the `vuln.php` and `anti.php` files.

2. **`vuln.php`**  
   This file simulates a vulnerable request handling mechanism. It is designed to showcase potential security flaws for learning purposes.

3. **`anti.php`**  
   This file demonstrates a secure approach to request handling. It includes protections against common vulnerabilities like SQL injection, CSRF, and XSS.

## Prerequisites

- **DVWA Database**: Ensure that DVWA is set up and the database is running on your local or remote server.
- PHP >= 7.4
- MySQL/MariaDB
- Web server (e.g., Apache or Nginx)

## Setup Instructions

1. Clone this repository to your server's root directory:
   ```
   git clone https://github.com/your-repo/php-dvwa-project.git
   ```

2. Configure the database connection in each file (vuln.php and anti.php) to match your DVWA database settings:
```
$db_host = 'localhost'; // Change if needed
$db_user = 'root';      // Update with your username
$db_pass = 'password';  // Update with your password
$db_name = 'dvwa';      // Confirm your DVWA database name
```
3. Start your web server and open index.php in your browser.
4. Select where you want to send the request (vulnerable or secure).

## Security Notice
This project is for educational purposes only. Do not deploy this setup on a production server.
Always follow best practices for securing PHP applications.

## License
This project is licensed under the MIT License. Feel free to use it for learning and personal development.
