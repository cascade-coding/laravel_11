-- ! The AVG() function returns the average value of a numeric column.

-- * Note: NULL values are ignored.

-- ! Syntax
-- SELECT AVG(column_name)
-- FROM table_name
-- WHERE condition;

-- ! Examples
-- SELECT AVG(pages) FROM books;

SELECT author_fname, AVG(pages) FROM books GROUP BY author_fname, author_lname;