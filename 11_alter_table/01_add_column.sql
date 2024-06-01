-- ! The ALTER TABLE statement is used to add, delete, or modify columns in an existing table.

-- * The ALTER TABLE statement is also used to add and drop various constraints on an existing table.

-- ! ALTER TABLE - ADD Column


-- ! Syntax
-- ALTER TABLE table_name ADD column_name datatype;
-- ALTER TABLE table_name ADD COLUMN column_name datatype;

-- ! Examples
-- * ALTER TABLE Customers ADD Email varchar(255);
-- * ALTER TABLE Customers ADD COLUMN age INT;