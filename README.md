# PHP & MySQL CRUD App with Authentication

A lightweight PHP CRUD (Create, Read, Update, Delete) application built with pure PHP, MySQL, and PDO.
The project includes a simple authentication system using PHP sessions and demonstrates backend fundamentals such as database operations, session management, and form handling.

---

## 🚀 Features

* User Authentication & Session Management
* Create, Read, Update, Delete (CRUD) Operations
* Secure Database Access using PDO Prepared Statements
* Login & Logout System
* Clean and Beginner-Friendly Code Structure
* Responsive UI
* MySQL Database Integration

---

## 🛠 Technologies Used

* PHP 8.x
* MySQL
* PDO
* HTML5
* CSS3
* Bootstrap 5

---

## 📂 Project Structure

```txt
PHP-CRUD/
│── create.php
│── db.php
│── delete.php
│── edit.php
│── index.php
│── login.php
│── logincontroller.php
│── logout.php
│── store.php
│── update.php
│── README.md
```

---

## ⚡ Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/your-username/php-crud.git
```

### 2. Navigate to the project folder

```bash
cd php-crud
```

### 3. Configure Database

Update your database credentials inside `db.php`.

Example:

```php
$host = "localhost";
$dbname = "crud_app";
$username = "root";
$password = "";
```

---

## 🗄 Database Setup

Create a database:

```sql
CREATE DATABASE crud_app;
```

Example users table:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## ▶️ Run the Project

Start the PHP built-in server:

```bash
php -S localhost:8000
```

Then open:

```txt
http://localhost:8000
```

---

## 🔐 Security Notes

This project is made for learning purposes.
Before deploying to production, make sure to:

* Use `password_hash()` and `password_verify()`
* Validate and sanitize user input
* Protect against SQL Injection and CSRF
* Move database credentials to environment variables (`.env`)

---

## 📌 Recommended GitHub Topics

```txt
php mysql pdo crud authentication session-management bootstrap beginner-friendly
```

---

## 📄 License

This project is licensed under the MIT License.

---

## 👨‍💻 Author

Developed by Kero 🚀
