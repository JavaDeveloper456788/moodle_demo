Install Docker

Create .env file. Example of .env file: 
  ````
MYSQL_ROOT_PASSWORD=admin
MYSQL_DATABASE=moodle
MYSQL_USER=moodle
MYSQL_PASSWORD=moodle

  ````
Run docker compose up --build

Run in the browser http://localhost:8080/moodle/

Follow the instructions to setup your moodle site

Database setup: 

select MySQL

 Connection settings:

- hostname: mysql
- port: 3306
- user,database name and password: same as in .env file (non root user)
