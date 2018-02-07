CREATE SCHEMA `phonebook` DEFAULT CHARACTER SET utf8;
CREATE USER 'phonebook'@'localhost';
GRANT ALL PRIVILEGES ON phonebook.* To 'phonebook'@'localhost' IDENTIFIED BY 'ph0n3b00k';

