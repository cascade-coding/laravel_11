-- ! MIN() and MAX() Functions

-- ! The MIN() function returns the smallest value of the selected column.

-- ! The MAX() function returns the largest value of the selected column.

-- ! Syntax
-- SELECT MIN(column_name)
-- FROM table_name
-- WHERE condition;

-- SELECT MAX(column_name)
-- FROM table_name
-- WHERE condition;


-- ! Examples
-- SELECT MIN(pages) FROM books;
-- SELECT MAX(pages) FROM books;

-- SELECT author_lname , MAX(pages) biggest_book FROM books GROUP BY author_lname ORDER BY biggest_book DESC;




