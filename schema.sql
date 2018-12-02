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
id INT PRIMARY KEY AUTO_INCREMENT,
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

INSERT INTO Users (email, password) VALUES
("admin", "password123");

INSERT INTO Jobs (company_name, job_title, category, date_posted) VALUES
('Jamaica Gleaner', 'Production Marketing Manager', 'Sales & Marketing', '2018-11-03'),
('UWI - MITS', 'Software Engineer', 'Programming', '2018-11-02'),
('NCB', 'Business Analyst - Scrum Master', 'Business & Management', '2018-11-01'),
('Jamaica Yellow Pages', 'UX/UI Designer', 'Design', '2018-10-20'),
('UWI - Busary', 'Director Customer Support', 'Customer Support', '2018-10-20'),
('Sagicor Bank', 'Senior Systems Engineer', 'DevOps & Sysadmin', '2018-10-20');
('Basecamp', 'Software Engineer', 'Programming', '2018-05-01');