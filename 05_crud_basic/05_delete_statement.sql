
-- ! The DELETE statement is used to delete existing records in a table.


-- ! Syntax
-- DELETE FROM table_name WHERE condition;

-- ! Note: Be careful when deleting records in a table! Notice the WHERE clause in the DELETE statement. The WHERE clause specifies which record(s) should be deleted. If you omit the WHERE clause, all records in the table will be deleted!

-- ! Examples
-- DELETE FROM people; -- ! will delete all the rows
-- DELETE FROM people WHERE id = 5;
