-- ! The COUNT() function returns the number of rows that matches a specified criterion.

-- ! https://dev.mysql.com/doc/refman/8.0/en/aggregate-functions.html

-- ! Syntax
-- SELECT COUNT(column_name)
-- FROM table_name
-- WHERE condition;


-- ! Examples
-- SELECT COUNT(*) FROM books;
-- SELECT COUNT(author_fname) FROM books;
-- SELECT COUNT(DISTINCT author_fname) FROM books;
-- SELECT COUNT(DISTINCT author_fname, author_lname) FROM books;
-- SELECT COUNT(*) FROM books WHERE title LIKE "%the%";

