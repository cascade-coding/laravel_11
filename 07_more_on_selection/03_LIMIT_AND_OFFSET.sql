-- ! The LIMIT clause is used to specify the number of records to return.

-- * The LIMIT clause is useful on large tables with thousands of records. Returning a large number of records can impact performance.

-- ! Syntax
-- SELECT column_name(s)
-- FROM table_name
-- WHERE condition
-- LIMIT number;

-- ! Examples
-- SELECT book_id, title FROM books LIMIT 10; 
-- SELECT book_id, title FROM books ORDER BY pages LIMIT 10; 
-- SELECT book_id, title FROM books ORDER BY book_id LIMIT 0, 5; 

-- SELECT book_id, title FROM books ORDER BY book_id LIMIT 5, 5; 

-- SELECT book_id, title FROM books ORDER BY book_id LIMIT 5 OFFSET 5; 
-- SELECT book_id, title FROM books ORDER BY book_id LIMIT 3 OFFSET 5; 