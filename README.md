## The Qube
GogBot 2020 - Quantum social platform

This project was made as an installations within the Have Fun & Play! project. In this project, first years’ students Creative Technology develop interactive installations for the GOGBOT multimedia art festival.
The aim of this years' GOGBOT was to make visitors aware of the coming Quantum Supremacy. This installation tries to show possible advancements in AI when Quantum Computers are introduced into our society, by showcasing different social media platforms that may emerge with quantum computers as users.

**See the installation**

The installation is currently hosted on the Have Fun & Play! project-website. You can see this installation by visiting: https://group10.mod4.nl/.
If the project-website is no longer available, see below for local-deployment instructions.

**Technical Details**

The website is built upon a Apache server, combined with a MySQL database for the user-posts and media. The front-end is written in plain HTML5, styled in plain CSS4. There are some client-side scripts in JavaScript but the majority of the pages is dynamically loaded with server-sided processing in PHP7. The database can be accessed through low-level SQL commands as well as a top-level GUI named PHPMyAdmin.

**Remarks**

Not all video files are included due to Github file size limitation.

**Installation for local deployment**:
- Install XAMPP (https://www.apachefriends.org/index.html)
- Configure Apache to use different ports
  * At Apache, click on Config > Apache (httpd.conf)
  * Find *Listen 80* and change it to *Listen 8080*
  * Find *ServerName localhost:80* and change it to *ServerName localhost:8080* (*localhost* may be a IP-adress, then change it to *localhost*)
  * Save and close the httpd.conf file
  * Click on Config > Service and Port Settings in the main window
  * Change the Main Port of Apache configuration from *80* to *8080*
- Start the Apache and MySQL service with the Start Button
- Pull the http files (PHP_cms) and place them in the */xampp/htdocs* folder
- Pull the database files (cms) and place them in the */xampp/mysql/data* folder
- Navigate to the website by going to *localhost/[filepath]/index.php* in the browser
