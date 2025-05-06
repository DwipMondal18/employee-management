
# Employee Management System

This is a web-based Employee Management System built using the CodeIgniter PHP framework. The system provides functionality for managing employees, including authentication, CRUD operations, and session management.

---

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [License](#license)

---

## Overview

The Employee Management System is designed to simplify the management of employee records. It includes features such as user authentication, employee CRUD operations, and secure session handling. The project follows the MVC (Model-View-Controller) architecture provided by CodeIgniter.

---

## Features

- **Authentication**: Secure login and logout functionality.
- **Employee Management**: Add, edit, view, and delete employee records.
- **Session Management**: Secure session handling using CodeIgniter's session library.
- **File Uploads**: Upload employee pictures securely.
- **MVC Architecture**: Organized code structure for scalability and maintainability.

---

## Project Structure

The project is organized as follows:

```
c:\xampp\htdocs\employee-management
├── application/
│   ├── config/          # Configuration files (e.g., database, routes)
│   ├── controllers/     # Controllers (e.g., Auth.php, Employee.php)
│   ├── models/          # Models (e.g., Login_model.php, Employee_model.php)
│   ├── views/           # Views (e.g., login_view.php, employee_form.php)
│   ├── helpers/         # Helper functions
│   ├── libraries/       # Custom libraries
│   ├── hooks/           # Custom hooks
│   ├── language/        # Language files for localization
│   ├── logs/            # Log files
│   ├── cache/           # Cache files
│   └── core/            # Custom core classes
├── system/              # CodeIgniter core framework files
├── uploads/             # Directory for uploaded files (e.g., employee pictures)
├── index.php            # Entry point for the application
└── .htaccess            # Apache configuration file
```

---

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-repo/employee-management.git
   ```
2. Set up a local server (e.g., XAMPP, WAMP, or LAMP).
3. Place the project in the server's root directory (e.g., `htdocs` for XAMPP).
4. Import the database:
   - Create a database named `employee_management`.
   - Import the SQL file provided in the `database` folder.
5. Configure the database connection in `application/config/database.php`.

---

## Configuration

### Base URL
Set the base URL in `application/config/config.php`:
```php
$config['base_url'] = 'http://localhost/employee-management/';
```

### Database
Update the database credentials in `application/config/database.php`:
```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'employee_management',
    'dbdriver' => 'mysqli',
    ...
);
```

---

## Usage

1. Start your local server.
2. Open the application in your browser:
   ```
   http://localhost/employee-management/
   ```
3. Log in using valid credentials.
4. Manage employees through the dashboard.

---

## Key Files and Folders

### `application/controllers/`
- **`Auth.php`**: Handles user authentication (login, logout).
- **`Employee.php`**: Manages employee CRUD operations.

### `application/models/`
- **`Login_model.php`**: Handles database queries for user authentication.
- **`Employee_model.php`**: Handles database queries for employee management.

### `application/views/`
- **`login_view.php`**: Login page.
- **`employee_form.php`**: Employee management dashboard.

### `uploads/`
- Stores uploaded employee pictures.

---

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.
```

This `README.md` provides a comprehensive overview of your project, including its structure, features, and setup instructions. You can customize it further based on your specific requirements.