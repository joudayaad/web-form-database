# web-form-database
## Project Description
This project connects a web interface to a MySQL database using PHP. The website allows commands to be sent and stored in the database.

## Steps
1. Created a MySQL database using InfinityFree.
2. Created the required table in phpMyAdmin.
3. Updated the PHP files with the correct database connection information.
4. Uploaded the HTML/PHP, CSS, and JavaScript files to the server.
5. Connected the web interface to the database using PHP.
6. Tested the website and verified that the commands were updated successfully in the database.

## Problem and Solution
The PHP connection initially did not work correctly because the database configuration needed to match the InfinityFree database information.

The problem was fixed by updating the database hostname, username, password, and database name in the PHP code. After correcting the configuration and uploading the updated files to the server, the connection worked successfully.

## Testing
The project was tested through the hosted website. The buttons successfully sent commands, and the database was checked using phpMyAdmin to confirm that the values were updated correctly.
