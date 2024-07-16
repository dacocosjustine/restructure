CREATE TABLE events (
  event_id INT AUTO_INCREMENT,
  orgId INT, 
  title VARCHAR(255) NOT NULL,
  description TEXT,
  start_date DATE NOT NULL,
  end_date DATE NOT NULL,
  venue VARCHAR(255),
  start_time TIME,
  end_time TIME,
  approval_letter LONGBLOB,
  approval_letter_filename VARCHAR(255), -- New field added
  status VARCHAR(50), 
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (event_id),
  FOREIGN KEY (orgId) REFERENCES organization(id) 
);



CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    student_number VARCHAR(20) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL DEFAULT 'student',
    orgId INT, -- Define orgId as a column in users
    FOREIGN KEY (orgId) REFERENCES Organization(id), -- Foreign key constraint
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Create Department table
CREATE TABLE Department (
    id INT PRIMARY KEY,
    deptName VARCHAR(100) NOT NULL,
    acronym VARCHAR(20),
    logo MEDIUMBLOB 
);


INSERT INTO Department (id, deptName, acronym) VALUES
(1, 'College of Arts and Sciences', 'CAS'),
(2, 'College of Business, Accountancy and Administration', 'CBAA'),
(3, 'College of Computing Studies', 'CCS'),
(4, 'College of Education', 'COED'),
(5, 'College of Engineering', 'COE'),
(6, 'College of Health and Allied Sciences', 'CHAS');

-- Create Organization table
CREATE TABLE Organization (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    orgName VARCHAR(100) NOT NULL,
    program VARCHAR(100),
    acronym VARCHAR(20),
    deptId INT,
    status VARCHAR(50),
    renewDate DATE,
    logoPic MEDIUMBLOB, 
    FOREIGN KEY (deptId) REFERENCES Department(id)
);

INSERT INTO Organization (id, orgName, program, acronym, deptId, status) VALUES
(1, 'Samahan ng Sikolohiyang Pilipino', 'BS in Psychology', 'SSP', 1, 'Not Renewed'),
(2, 'Junior Financial Executives', 'BS in Business Administration Major in Financial Management', 'JFINEX', 2, 'Not Renewed'),
(3, 'Junior Marketing Association', 'BS in Business Administration Major in Marketing Management', 'JMA', 2, 'Not Renewed'),
(4, 'Junior Philippine Institute of Accountants', 'BS in Accountancy', 'JPIA', 2, 'Not Renewed'),
(5, 'Association of Computer Science Students', 'BS in Computer Science', 'ACSS', 3, 'Not Renewed'),
(6, 'Society of Information Technology Students', 'BS in Information Technology', 'SITES', 3, 'Not Renewed'),
(7, 'Alibata', 'BA in Secondary Education Major in Filipino', NULL, 4, 'Not Renewed'),
(8, 'English-Era', 'BA in Secondary Education Major in English', NULL, 4, 'Not Renewed'),
(9, 'Mathematics Society', 'BA in Secondary Education Major in Mathematics', 'MATHSOC', 4, 'Not Renewed'),
(10, 'General Education Society', 'BA in Elementary Education', NULL, 4, 'Not Renewed'),
(11, 'Social Science Society', 'BA in Secondary Education Major in Social Studies', 'SOCSCI', 4, 'Not Renewed'),
(12, 'Association of Computer Engineers Students', 'BS in Computer Engineering', 'ACOES', 5, 'Not Renewed'),
(13, 'Certified Industrial Engineering Students'' Organization', 'BS in Industrial Engineering', 'CIESO', 5, 'Not Renewed'),
(14, 'Organization of Electronics and Communication Engineering Students', 'BS in Electronics Engineering', 'OECES', 5, 'Not Renewed'),
(15, 'Nightingale Society', 'BS in Nursing', 'NS', 6, 'Not Renewed');

-- ALTER TABLE Organization MODIFY COLUMN id INT AUTO_INCREMENT;

-- Alter events table
-- ALTER TABLE events
-- ADD COLUMN orgId INT AFTER event_id,
-- ADD CONSTRAINT fk_org_event
-- FOREIGN KEY (orgId) REFERENCES organization(id);

-- ALTER TABLE events
-- ADD COLUMN status VARCHAR(50) AFTER approval_letter;

-- Alter Organization
-- ALTER TABLE Organization
-- MODIFY COLUMN logoPic MEDIUMBLOB;

-- Alter Department
-- ALTER TABLE Department
-- MODIFY COLUMN logo MEDIUMBLOB;