-- ! DEFAULT Constraint
-- * The DEFAULT constraint is used to set a default value for a column.

-- * The default value will be added to all new records, if no other value is specified.


-- ! The DEFAULT constraint can also be used to insert system values, by using functions like GETDATE():

-- CREATE TABLE Orders (
--     ID int NOT NULL,
--     OrderNumber int NOT NULL,
--     OrderDate date DEFAULT GETDATE()
-- );


-- ! Example
-- * CREATE TABLE people (name VARCHAR(120) DEFAULT 'Jhon doe', email VARCHAR(255) NOT NULL);

-- * CREATE TABLE people (name VARCHAR(120) NOT NULL DEFAULT 'Jhon doe', age INT);
