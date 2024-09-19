Form Subbmission Application in PHP
Overview
This is a simple CRUD (Create, Read, Update, Delete) web application built with PHP and MySQL. The application demonstrates how to manage records in a database, offering functionalities to create new records, view existing records, update them, and delete unwanted ones.

Features
Create: Add new records to the database.
Read: View all records from the database.
Update: Edit and update existing records.
Delete: Remove unwanted records.
Prerequisites
To run this project, you will need:


MySQL: For database management.
Apache Server: Recommended to use XAMPP or WAMP for local development.
Installation
Clone the repository or download the zip file.


Move the project to your web server's root directory (e.g., htdocs for XAMPP or www for WAMP).

Create a MySQL database named crud_db or use an existing one.

Import the provided crud_db.sql file into your MySQL database to create the required tables.



│
├── config.php           # Database connection
├── create.php           # Form to create new records
├── index.php            # Display all records
├── update.php           # Edit records
├── delete.php           # Delete records
├── style.css            # Basic styling
└── crud_db.sql          # Database dump
Usage
Adding a Record
Go to create.php.
Fill out the form with the necessary data.
Click the "Submit" button to add the record to the database.
Viewing Records
Go to index.php.
The list of records stored in the database will be displayed in a table format.
Editing a Record
On the main list page (index.php), click the "Edit" link next to a record you wish to update.
You'll be redirected to update.php, where you can modify the record's data.
Deleting a Record
On the main list page (index.php), click the "Delete" link next to the record you want to remove.
The record will be permanently removed from the database.
Screenshots
1. Home Page (View all records)

2. Create Record

3. Edit Record

Technologies Used
PHP: Backend development
MySQL: Database
HTML/CSS: Frontend
Contributing
Contributions are welcome! Please fork the repository and submit a pull request for any changes or improvements.



Contact
For any inquiries or issues, please reach out to me at [ritiktiwarilive@gmail.com].

