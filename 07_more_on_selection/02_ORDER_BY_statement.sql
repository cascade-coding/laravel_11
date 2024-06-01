-- ! The ORDER BY keyword is used to sort the result-set in ascending or descending order.

-- * The ORDER BY keyword sorts the records in ascending order by default. To sort the records in descending order, use the DESC keyword.

-- ! Syntax
-- SELECT column1, column2, ...
-- FROM table_name
-- ORDER BY column1, column2, ... ASC|DESC;

-- ! Examples
-- SELECT book_id, title FROM books ORDER BY book_id;
-- SELECT book_id, title FROM books ORDER BY book_id DESC;
-- SELECT book_id, title FROM books ORDER BY title;
-- SELECT book_id, title, pages FROM books ORDER BY pages DESC;

-- SELECT book_id, title, pages FROM books ORDER BY 3 DESC;

-- SELECT book_id, title FROM books WHERE released_year <= 2000 ORDER BY pages;

-- SELECT book_id, title, pages FROM books ORDER BY title ASC, pages DESC;

-- SELECT book_id, CONCAT_WS(" ", author_fname, author_lname) AS "Full Name", released_year FROM books ORDER BY author_lname, released_year DESC;


