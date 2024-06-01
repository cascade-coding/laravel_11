-- ! The CHECK constraint is used to limit the value range that can be placed in a column.

-- * If you define a CHECK constraint on a column it will allow only certain values for this column.

-- * If you define a CHECK constraint on a table it can limit the values in certain columns based on values in other columns in the row.


-- ! Examples
-- * CREATE TABLE users (name VARCHAR(120), age TINYINT CHECK(age >= 18));
-- * CREATE TABLE users (name VARCHAR(120), age TINYINT, CHECK(age >= 18));
-- * CREATE TABLE users (name VARCHAR(120), age TINYINT, CONSTRAINT under_age_not_allowed CHECK(age >= 18));

-- CREATE TABLE Persons (
--     ID int NOT NULL,
--     LastName varchar(255) NOT NULL,
--     FirstName varchar(255),
--     Age int,
--     City varchar(255),
--     CONSTRAINT CHK_Person CHECK (Age>=18 AND City='Sandnes')
-- );