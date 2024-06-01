-- ! The GROUP BY statement groups rows that have the same values into summary rows, like "find the number of customers in each country".

-- * The GROUP BY statement is often used with aggregate functions (COUNT(), MAX(), MIN(), SUM(), AVG()) to group the result-set by one or more columns.

-- ! Syntax
-- SELECT column_name(s)
-- FROM table_name
-- WHERE condition
-- GROUP BY column_name(s)
-- ORDER BY column_name(s);


-- ! Examples
-- SELECT author_fname, author_lname , COUNT(*) as Total_books FROM books GROUP BY author_lname;
-- SELECT author_fname, author_lname , COUNT(*) as Total_books FROM books GROUP BY author_lname ORDER BY Total_books DESC;

-- SELECT released_year , COUNT(*) Books_Published FROM books GROUP BY released_year ORDER BY Books_Published DESC;

-- SELECT author_fname, author_lname, COUNT(*) FROM books GROUP BY author_lname, author_fname;

-- SELECT CONCAT(author_fname, " ", author_lname) AS Author, COUNT(*) FROM books GROUP BY Author;

-- SELECT author_fname, MIN(released_year) oldest_book FROM books GROUP BY author_lname, author_fname;
-- SELECT author_fname, MIN(released_year) oldest_book, MAX(released_year) latest_book FROM books GROUP BY author_lname, author_fname;





