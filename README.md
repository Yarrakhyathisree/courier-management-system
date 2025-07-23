# courier-management-system
Courier Management System
📦 Features
•	🚚 User Registration & Login
•	🔐 Secure Password Reset
•	💾 MySQL Database Integration
•	📘 Session Management
•	🚪 Logout Functionality
📁 Project Structure
File	Purpose
index.php	Homepage or login interface
register.php	User registration page
reset.php	Password reset request form
resetpswd.php	Form to set a new password
logout.php	Ends the user session
session.php	Handles session validation and access control
dbconnection.php	Establishes connection with MySQL database
🛠️ Setup Instructions
1.	Clone the Project:
  git clone https://github.com/Yarrakhyathisree/courier-management-system
2.	Database Setup:
  - Create a MySQL database (e.g., courier_db)
  - Create required tables (e.g., users)
  - Update dbconnection.php with your DB credentials
3.	Run the Application:
  - Place the project files in the htdocs folder (if using XAMPP)
  - Start Apache and MySQL via XAMPP
  - Visit: http://localhost/courier-management-system/index.php
💡 Requirements
•	PHP 7.x or newer
•	MySQL/MariaDB
•	Apache Server (XAMPP, WAMP, or LAMP)
🔐 Security Practices
•	Uses prepared statements to prevent SQL Injection
•	Passwords should be hashed using password_hash() (ensure implementation)
•	Session management for secure access
✅ To-Do (Optional Features)
•	Admin Panel for managing deliveries
•	Courier tracking functionality
•	Email/SMS notification for delivery updates
•	Role-based access for admin and staff
📄 License
This project is open-source and free to use under the MIT License.

Author: Yarra Khyathisree
Project: Courier Management System
