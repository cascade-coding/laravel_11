-- ! A JOIN clause is used to combine rows from two or more tables, based on a related column between them.

-- * The INNER JOIN keyword selects records that have matching values in both tables. 

-- * INNER JOIN is the most common join

-- ! INNER JOIN Syntax
-- SELECT column_name(s) FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name;
-- SELECT column_name(s) FROM table1 JOIN table2 ON table1.column_name = table2.column_name;


-- ! Examples
-- * SELECT * FROM customers INNER JOIN orders ON customers.id = orders.customer_id;
-- * SELECT f_name, email, order_date, amount FROM customers INNER JOIN orders ON customers.id = orders.customer_id;

-- * SELECT * FROM orders INNER JOIN customers ON orders.customer_id = customers.id;
-- * SELECT f_name, order_date, amount FROM orders INNER JOIN customers ON orders.customer_id = customers.id;

-- * SELECT f_name, order_date, amount FROM orders INNER JOIN customers ON orders.customer_id = customers.id ORDER BY f_name;

-- * SELECT f_name, order_date, SUM(amount) AS total  FROM orders INNER JOIN customers ON orders.customer_id = customers.id GROUP BY f_name, l_name; 

-- * SELECT f_name, order_date, SUM(amount) AS total  FROM orders INNER JOIN customers ON orders.customer_id = customers.id GROUP BY f_name, l_name ORDER BY orders.id DESC; 



