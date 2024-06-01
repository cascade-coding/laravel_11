-- ! Renaming table and columns


-- ! Syntax
-- RENAME TABLE current_table_name TO new_table_name
-- ALTER TABLE old_table RENAME new_table;

-- ALTER TABLE table_name RENAME COLUMN current_col_name TO new_col_name;
-- ALTER TABLE table_name CHANGE COLUMN current_col_name new_col_name datatype;

-- ! Examples
-- * RENAME TABLE people TO users;
-- * ALTER TABLE users RENAME people;

--  * ALTER TABLE users RENAME COLUMN name TO username;
--  ! ALTER TABLE people CHANGE COLUMN name username VARCHAR(120); 