-- ! The LIKE operator is used in a WHERE clause to search for a specified pattern in a column.

-- ! There are two wildcards often used in conjunction with the LIKE operator:
--  * The percent sign % represents zero, one, or multiple characters
--  * The underscore sign _ represents one, single character

-- ! Syntax
-- SELECT column1, column2, ...
-- FROM table_name
-- WHERE columnN LIKE pattern;

-- ! Examples
-- SELECT title FROM books WHERE author_fname = 'da';
-- SELECT title, author_fname FROM books WHERE author_fname LIKE 'da';
-- SELECT title, author_fname FROM books WHERE author_fname LIKE '%da%';
-- SELECT title, author_fname FROM books WHERE author_fname LIKE '%n';
-- SELECT title, author_fname FROM books WHERE title LIKE '%:%';
-- SELECT title, author_fname FROM books WHERE author_fname LIKE '____';
-- SELECT title, author_fname FROM books WHERE author_fname LIKE 'Da_e';
-- SELECT title, author_fname FROM books WHERE author_fname LIKE 'Da_';

-- SELECT title, author_fname FROM books WHERE title LIKE '%\%%'; -- ! with escape char
-- SELECT title, author_fname FROM books WHERE title LIKE '%\_%'; -- ! with escape char
