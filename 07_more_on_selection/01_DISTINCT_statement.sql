-- ! The SELECT DISTINCT statement is used to return only distinct (different) values.
-- * Inside a table, a column often contains many duplicate values; and sometimes you only want to list the different (distinct) values.
-- ! Syntax
-- SELECT DISTINCT column1, column2, ...
-- FROM table_name;
-- ! Examples
-- SELECT author_lname FROM books;
-- SELECT DISTINCT author_lname FROM books;
-- SELECT released_year FROM books;
-- SELECT DISTINCT released_year FROM books;

-- SELECT author_fname, author_lname FROM books;

-- SELECT
--     DISTINCT CONCAT_WS (" ", author_fname, author_lname) AS "Full Name"
-- FROM
--     books;

-- SELECT DISTINCT author_fname, author_lname AS "Full Name" FROM books;

