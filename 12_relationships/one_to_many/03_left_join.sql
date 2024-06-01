-- ! A JOIN clause is used to combine rows from two or more tables, based on a related column between them.

-- * The LEFT JOIN keyword returns all records from the left table (table1), and the matching records (if any) from the right table (table2).


-- ! LEFT JOIN Syntax
-- SELECT column_name(s) FROM table1 LEFT JOIN table2 ON table1.column_name = table2.column_name;

-- ! Examples
-- SELECT * FROM customers LEFT JOIN orders ON customers.id = orders.customer_id;
-- SELECT f_name, SUM(amount) AS total FROM customers LEFT JOIN orders ON customers.id = orders.customer_id GROUP BY f_name, l_name;

-- SELECT f_name, IFNULL(SUM(amount), 0) AS total FROM customers LEFT JOIN orders ON customers.id = orders.customer_id GROUP BY f_name, l_name; 

