-- ! PRIMARY Constraint
-- * The PRIMARY KEY constraint uniquely identifies each record in a table.

-- * Primary keys must contain UNIQUE values, and cannot contain NULL values.

-- * A table can have only ONE primary key; and in the table, this primary key can consist of single or multiple columns (fields).

-- ! Example
-- * CREATE TABLE people (id INT NOT NULL, name VARCHAR(120) NOT NULL, age INT NOT NULL, PRIMARY KEY (id));
-- * CREATE TABLE people (id INT, name VARCHAR(120) NOT NULL, age INT NOT NULL, PRIMARY KEY (id));
-- ! with auto_increment
-- * CREATE TABLE people (id INT AUTO_INCREMENT, name VARCHAR(120) NOT NULL, age INT NOT NULL, PRIMARY KEY (id));

-- ! By default, the starting value for AUTO_INCREMENT is 1, and it will increment by 1 for each new record.
-- ! To let the AUTO_INCREMENT sequence start with another value, use the following SQL statement:
-- * ALTER TABLE people AUTO_INCREMENT=100;


-- ******************** ******************* --

-- ! To allow naming of a PRIMARY KEY constraint, and for defining a PRIMARY KEY constraint on multiple columns, use the following SQL syntax:
-- CREATE TABLE Persons (
--     ID int NOT NULL,
--     LastName varchar(255) NOT NULL,
--     FirstName varchar(255),
--     Age int,
--     CONSTRAINT PK_Person PRIMARY KEY (ID,LastName)
-- );
