-- ! The UNIQUE constraint ensures that all values in a column are different.
-- * Both the UNIQUE and PRIMARY KEY constraints provide a guarantee for uniqueness for a column or set of columns.
-- * A PRIMARY KEY constraint automatically has a UNIQUE constraint.

-- ! Examples
-- CREATE TABLE
--     users (
--         name VARCHAR(120) NOT NULL,
--         eamil VARCHAR(255) NOT NULL UNIQUE,
--         password VARCHAR(120) NOT NULL
--     );

-- CREATE TABLE
--     users (
--         name VARCHAR(120) NOT NULL,
--         eamil VARCHAR(255) NOT NULL,
--         password VARCHAR(120) NOT NULL,
--         UNIQUE (eamil)
--     );

-- CREATE TABLE Teachers (
--     ID int NOT NULL,
--     name varchar(255) NOT NULL,
--     address varchar(255),
--     Age int,
--     CONSTRAINT name_address UNIQUE (name,address)
-- );