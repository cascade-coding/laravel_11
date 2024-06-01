-- ! The SUM() function returns the total sum of a numeric column.



-- ! Syntax
-- SELECT SUM(column_name)
-- FROM table_name
-- WHERE condition;


-- ! Examples
-- SELECT SUM(pages) AS Total_pages FROM books;

SELECT CONCAT(author_fname, " ", author_lname) as "Full Name", SUM(pages) Total_pages_written FROM books GROUP BY author_lname, author_fname ORDER BY Total_pages_written DESC;