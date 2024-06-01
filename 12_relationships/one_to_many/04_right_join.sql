-- ! A JOIN clause is used to combine rows from two or more tables, based on a related column between them.

-- * The RIGHT JOIN keyword returns all records from the right table (table2), and the matching records (if any) from the left table (table1). 

-- ! RIGHT JOIN Syntax
-- SELECT column_name(s) FROM table1 RIGHT JOIN table2 ON table1.column_name = table2.column_name; 
 
-- ! Examples
-- SELECT * FROM customers RIGHT JOIN orders ON customers.id = orders.customer_id;

