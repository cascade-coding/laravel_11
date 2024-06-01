-- ! A JOIN clause is used to combine rows from two or more tables, based on a related column between them.

-- * The CROSS JOIN keyword returns all records from both tables (table1 and table2).

-- ! Note: CROSS JOIN can potentially return very large result-sets!

-- ! CROSS JOIN Syntax
-- SELECT column_name(s) FROM table1 CROSS JOIN table2;
-- SELECT column_name(s) FROM table1, table2;


-- ! Examples
-- SELECT * FROM customers CROSS JOIN orders;
-- SELECT * FROM customers, orders;