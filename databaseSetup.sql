# Creates the database
CREATE DATABASE snowplow;
USE snowplow;

# Creates the table
CREATE TABLE houses (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    address VARCHAR(20) NOT NULL,
    status VARCHAR(20) NOT NULL,
);

# Creates the user
CREATE USER 'user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON mcatchat.chat TO 'user'@'localhost';
FLUSH PRIVILEGES;