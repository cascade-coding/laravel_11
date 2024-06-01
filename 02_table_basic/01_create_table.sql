
-- ! data types 
-- * https://dev.mysql.com/doc/refman/8.0/en/data-types.html
-- * https://www.w3schools.com/sql/sql_datatypes.asp


-- ! Syntax
-- CREATE TABLE table_name (
--     column1 datatype,
--     column2 datatype,
--     column3 datatype,
--    ....
-- );

USE play_sql_1;

CREATE TABLE contacts (
    name VARCHAR(120),
    age INT,
    email VARCHAR(255),
    phone VARCHAR(120)
);


