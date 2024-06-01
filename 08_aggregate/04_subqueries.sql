-- ! subqueries
-- * The main advantages of subqueries are:
-- * They allow queries that are structured so that it is possible to isolate each part of a statement.
-- * They provide alternative ways to perform operations that would otherwise require complex joins and unions.
-- * Many people find subqueries more readable than complex joins or unions. Indeed, it was the innovation of subqueries that gave people the original idea of calling the early SQL “Structured Query Language.”

-- ! Syntax
-- SELECT * FROM t1 WHERE column1 = (SELECT column1 FROM t2);
-- SELECT MAX(column_name)
-- FROM table_name
-- WHERE condition;

-- ! Examples
-- SELECT title , pages FROM books ORDER BY pages DESC LIMIT 1;

-- SELECT title , pages FROM books WHERE pages = (SELECT MAX(pages) FROM books);

-- * find the oldest book
-- SELECT title, released_year FROM books WHERE released_year = (SELECT MIN(released_year) FROM books);
