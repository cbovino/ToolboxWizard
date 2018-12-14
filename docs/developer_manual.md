# 377 developer manual

### File Structure:
We choose a file structure that separates files by their functionality and location on site. The first thing you are presented with is our script for our MySQL database, “public_html” which is what holds most of the site, a README file, and a docs folder with a user manual and developers manual. The structure inside the public_html goes as followed:

1. CSS
   - This folder holds all the cascade styling sheets for the different pages and features of the site. Every one of the files is separated by page, except for nav. We created a NAV file that contains the code for a nav bar we shared individually across pages.
2. Login
   - This folder holds everything responsible for displaying the login page and required for working with the server. First, the dbinfo.php is more of a resource that is used throughout the project. Home.html is the home page after a user logs in. Index.php is the form that the user create an account with and signs into the site. Register.php is the php file used to send and receive the correct information on the server.
3. Progress
   - The folder holds everything responsible for displaying the progress page and also required for working with the server. The progress.php is how we communicated with the server and displays the progress table to the user.
4. Videos   
   - This folder holds everything responsible for displaying the videos page and the communication between this page and the server. The page responsible for the front end of the site is the VideoPage.html. Through AJAX and JQuery, information is passed and received from this page and other files in this folder like callPHP.js, poststatus.php, retrieveprogress.php. These three files are responsible for communication with our server and helps get user information specifically about completed videos.


### Necessary Software/Libraries and System Environments:
1. HTML and CSS
   - No extra libraries needed
   - Image files are needed for site, but are in the github
2. JS
   - JQuery and AJAX is needed for the site. However, within our code, we used an online library offered by Google.
3. PHP
   - One must be able to run a PHP apache server. We recommend downloading AMPPS, which has PHP, Apache and MySQL.
4. MySQL
   - One must be able to run a MySQL server. Again, we recommend AMPPS.
5. Browser
   - We recommend using Google Chrome because that is how we developed. A secondary browser like Safari, is also handy for testing the site.

### Database Structure:
#### We structured the DB with four total tables - Progress, Subjects, Users, and Youtube:

1. Progress
   - We made some changes to this table multiple times throughout our development. In this table, we store data for the user’s status for every single video. Each user has one entry for each video on our page. So on our site, we pull from this table to get user information like status of completion.
2. Subjects
   - This table stores information like the subject names and their corresponding subject IDs.
3. Users
   - This table stores all the data we collect about users. For example, on registration and login, we use this table to figure out the Users who belong to the site. We also use the user table to work with progress to see what user has completed what progress.
4. Youtube
   - This table was not used for information on the site, but more so for tracking how information is being stored in the Progress table. For example, the Youtube table gives a primary key to each video inside the progress table.
