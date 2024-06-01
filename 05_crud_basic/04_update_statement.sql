
-- ! The UPDATE statement is used to modify the existing records in a table.

-- ! Note: Be careful when updating records in a table! Notice the WHERE clause in the UPDATE statement. The WHERE clause specifies which record(s) that should be updated. If you omit the WHERE clause, all records in the table will be updated!


-- ! Syntax
-- UPDATE table_name
-- SET column1 = value1, column2 = value2, ...
-- WHERE condition;


-- ! Examples
-- UPDATE employees SET salary = '10000K' -- ! updates all the rows
-- UPDATE people SET name = 'thomas' WHERE id = 1;
-- UPDATE people SET age = 23, eamil = 'shared@gmail.com' WHERE age = 22;

