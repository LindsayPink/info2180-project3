DROP DATABASE IF EXISTS scheme;
CREATE DATABASE scheme;
USE scheme;

CREATE TABLE Users(
id  INT PRIMARY KEY AUTO_INCREMENT,
firstname VARCHAR(32) DEFAULT NULL,
lastname VARCHAR(32) DEFAULT NULL,
password VARCHAR(16) DEFAULT NULL,
telephone CHAR(10),
email VARCHAR(32) DEFAULT NULL,
date_joined DATE
);

CREATE TABLE Jobs(
id INT PRIMARY KEY,
job_title VARCHAR(32) DEFAULT NULL,
job_description TEXT DEFAULT NULL,
category VARCHAR(32) DEFAULT NULL,
company_name VARCHAR(100) DEFAULT NULL,
company_location VARCHAR(100) DEFAULT NULL,
date_posted DATE
);

CREATE TABLE JobsAppliedFor(
id INT PRIMARY KEY AUTO_INCREMENT,
job_id  INT,
user_id  INT,
date_applied DATE
);