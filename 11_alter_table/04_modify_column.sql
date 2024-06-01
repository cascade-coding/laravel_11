-- ! The ALTER TABLE statement is used to add, delete, or modify columns in an existing table.

-- * The ALTER TABLE statement is also used to add and drop various constraints on an existing table.

-- ! ALTER TABLE - MODIFY Column


-- ! Syntax
-- ALTER TABLE table_name MODIFY COLUMN column_name datatype;

-- ! Examples
-- * ALTER TABLE users MODIFY COLUMN username VARCHAR(60) NOT NULL UNIQUE;