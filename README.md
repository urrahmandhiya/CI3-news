# CodeIgniter 3 with Laragon

This is a simple project built using **CodeIgniter 3** and **Laragon** as the local development environment. The setup instructions and usage guidelines for running this project locally are provided below.

## Requirements

- [Laragon](https://laragon.org/) (or XAMPP/WAMP, but this setup assumes Laragon)
- PHP 7.x or 8.x (depending on your CodeIgniter 3 version)
- MySQL or MariaDB
- Composer (optional, if additional packages are used)
- Git

## Getting Started

### 1. Clone the Repository

Start by cloning this repository to your local machine:

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
```

2. Install Laragon
If you haven't installed Laragon, download and install it from Laragon.org. Once installed, start Laragon.

3. Set Up the Database
Open Laragon and start the services (Apache/Nginx and MySQL).
Open phpMyAdmin by navigating to http://localhost/phpmyadmin or using Laragon's "Database" menu.

4. Configure CodeIgniter
Navigate to the application/config/database.php file and configure your database settings:

```
$db['default'] = array(
    'dsn'      => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'ci3_db',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```
If you want to enable pretty URLs (remove index.php), follow CodeIgniter URL Setup and make sure to update the .htaccess file as required.

5. Run the Project
After configuring the database, visit http://localhost/your-repo-name in your browser.
You should now see the home page of your CodeIgniter 3 project.
