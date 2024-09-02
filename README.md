**Overview**
- File Management System for ECoR Internship

## Prerequisites
What things you need to install the software and how to install them.

- [XAMPP](https://www.apachefriends.org/index.html) or any server environment that supports PHP and MySQL
- Web browser (e.g., Chrome, Firefox)

## Installation
A step-by-step guide to get a development environment running.

1. **Clone the repository**
    ```sh
    git clone https://github.com/railwayinterns2024/fms.git
    cd railwayinterns2024/fms
    ```

2. **Set up the Database**
    - Open XAMPP Control Panel and start Apache and MySQL.
    - exported sql database is in fms folder named "file_management(1)"
    - Open phpMyAdmin (http://localhost/phpmyadmin/).
    - Create a new database called `your_database_name`.
    - Import the provided SQL file to set up the tables.
      ```sql
      -- Example SQL command
      CREATE DATABASE your_database_name;
      USE your_database_name;
      SOURCE path/to/your_database.sql;
      ```

3. **Configure the Application**
    - Open the project in a code editor.
    - Update the database configuration in `config.php` (or wherever your database config is located).
      ```php
      <?php
      $dbHost = 'localhost';
      $dbName = 'your_database_name';
      $dbUser = 'root';
      $dbPass = '';
      ?>
      ```

4. **Run the Application**
    - Open your browser and go to `http://localhost/your_project_folder`.

## Usage
Instructions on how to use your application.

- **Admin Panel**
  - Login with admin credentials to access the admin panel.
  - Upload/delete files, manage categories, etc.
- **User Page**
  - Login with user credentials to access files and other features.

## License
Include the license for your project if you have one.

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.


**Additional Instruction**
- Paste the vendor file both in FMS and in railway-final folder from https://drive.google.com/drive/folders/1T_mSuniC6jIKNnn5oyynjFSfDmfMmV5U?usp=drive_link
- Make sure to COPY the file FMS in XAMPP/htdocs.
- The databases codes like downlaod, login, logout, delete, connection, and all the necessary files are in the FMS folder.
- All the frontend files are also in the FMS files and FMS/railway-final
- The railway-final folder contains USER-SIDE codes and FMS contains ADMIN-SIDE
- The website is hosted on localhost, and the first page is splash.php
