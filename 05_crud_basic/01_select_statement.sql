

-- ! The SELECT statement is used to select data from a database.

-- ! Syntax
-- SELECT column1, column2, ...
-- FROM table_name;

-- * If you want to return all columns, without specifying every column name, you can use the SELECT * syntax:
-- SELECT * FROM Customers;


-- SELECT CustomerName, City FROM Customers;

-- * 2. If you are adding values for all the columns of the table, you do not need to specify the column names in the SQL query. However, make sure the order of the values is in the same order as the columns in the table. Here, the INSERT INTO syntax would be as follows:
-- INSERT INTO table_name
-- VALUES (value1, value2, value3, ...);

USE play_sql_1;

-- * INSERT INTO people (name, email) VALUES ("Jhon", "jhon@gmail.com");
-- * INSERT INTO people VALUES ("joe", "joe@gmail.com");

-- ! insert multiple rows
-- INSERT INTO people (name, email) VALUES 
-- ("david", "david@gmail.com"), 
-- ("tom", "tom@gmail.com"), 
-- ("jake", "jake@gmail.com");