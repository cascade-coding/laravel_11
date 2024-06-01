-- ! Many-to-Many Relationship
-- * Definition: Each record in Table A can be associated with multiple records in Table B, and vice versa.
-- * Setup: Create an intermediate table (also known as a junction or linking table) that contains foreign keys referencing both related tables.
-- * For example: Tables students and courses, where each student can enroll in multiple courses, and each course can have multiple students.
-- books <-> authors
-- posts <-> tags

CREATE TABLE
    students (
        id INT AUTO_INCREMENT,
        student_name VARCHAR(50),
        PRIMARY KEY (id)
    );

CREATE TABLE
    courses (
        id INT AUTO_INCREMENT,
        course_name VARCHAR(50),
        PRIMARY KEY (id)
    );

CREATE TABLE
    student_courses (
        student_id INT,
        course_id INT,
        PRIMARY KEY (student_id, course_id),
        FOREIGN KEY (student_id) REFERENCES students (id),
        FOREIGN KEY (course_id) REFERENCES courses (id)
    );