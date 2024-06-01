-- ! string functions
-- * https://www.w3schools.com/sql/func_mysql_ascii.asp
-- * https://dev.mysql.com/doc/refman/8.0/en/string-functions.html

\! cls

-- ! CONCAT and CONCAT_WS function
-- * The CONCAT() function adds two or more expressions together.
-- * The CONCAT_WS() function adds two or more expressions together with a separator.

-- * Syntax
-- CONCAT(expression1, expression2, expression3,...)

-- * Syntax
-- CONCAT_WS(separator, expression1, expression2, expression3,...)

-- ! Examples
-- SELECT CONCAT("this ", "is ", "awesome");
-- SELECT CONCAT("this ", "is ", "awesome") AS Result;
-- * SELECT title, CONCAT(author_fname, " ", author_lname) AS "Full Name" FROM books;
-- SELECT title, CONCAT_WS("-", author_fname, author_lname) AS "Full Name" FROM books;
-- * SELECT title, CONCAT_WS(" ", author_fname, author_lname) AS "Full Name" FROM books;



-- ! **************************** ****************************** -- 


-- ! The SUBSTRING() function extracts a substring from a string (starting at any position).

-- ! Note: The SUBSTR() and MID() functions equals to the SUBSTRING() function.

-- ! Syntax
-- SUBSTRING(string, start, length)
-- * OR
-- SUBSTRING(string FROM start FOR length)

-- ! Examples
-- SELECT SUBSTRING("This is Awesome", 1, 5) AS Message;
-- SELECT SUBSTRING("This is Awesome", 8) AS Message;
-- SELECT SUBSTRING("This is Awesome", -4) AS Message;
-- * SELECT SUBSTRING(title, 1, 10) AS Title FROM books;
-- * SELECT CONCAT(SUBSTRING(title, 1, 15), '....') AS Title FROM books;

-- * SELECT SUBSTRING("this is awesome" FROM 1 FOR 5) AS Message;


-- ! **************************** ****************************** -- 

-- ! The REPLACE() function replaces all occurrences of a substring within a string, with a new substring.

-- ! Note: This function performs a case-sensitive replacement.

-- ! Syntax
-- REPLACE(string, from_string, new_string)

-- ! Example
-- SELECT REPLACE("http://google.com", "http", "https");
-- SELECT REPLACE("this is fucking not cool", "fucking", "*#*#")
-- SELECT REPLACE(title, " ", "-") AS Title FROM books;


-- ! **************************** ****************************** -- 

-- ! The REVERSE() function reverses a string and returns the result.

-- ! Syntax
-- REVERSE(string)

-- ! Examples
-- SELECT REVERSE("This is Cool");
-- SELECT REVERSE(title) AS Title FROM books;


-- ! **************************** ****************************** -- 

-- ! The CHAR_LENGTH() function return the length of a string (in characters).

-- ! Note: This function is equal to the CHARACTER_LENGTH() function.

-- ! Syntax
-- CHAR_LENGTH(string)


-- ! Examples
-- SELECT CHAR_LENGTH("This is awesome") AS Text;
-- SELECT CHAR_LENGTH(title) AS Title FROM books;
-- * SELECT title FROM books WHERE CHAR_LENGTH(title) <= 15;


-- ! **************************** ****************************** -- 

-- ! The UPPER() function converts a string to upper-case.

-- ! Note: This function is equal to the UCASE() function.

-- ! Syntax
-- UPPER(text)

-- ! Examples
-- SELECT UPPER("This is cool");
-- SELECT UPPER(title) AS Title FROM books;


-- ! **************************** ****************************** -- 


-- ! The LOWER() function converts a string to lower-case.

-- ! Note: The LCASE() function is equal to the LOWER() function.

-- ! Syntax
-- LOWER(text)

-- ! Example
-- SELECT LOWER("This is Cool");
-- SELECT LOWER(title) AS Title FROM books;


-- ! **************************** ****************************** -- 


-- ! The INSERT() function inserts a string within a string at the specified position and for a certain number of characters.

-- ! Syntax
-- INSERT(string, position, number, string2)

-- ! Examples
-- SELECT INSERT("W3Schools.com", 11, 3, "no");
-- SELECT INSERT("google.com", 1, 6, "yahoo");
-- SELECT INSERT ("Hello world", 6, 0, " This crazy");


-- ! **************************** ****************************** -- 


-- ! The LEFT() function extracts a number of characters from a string (starting from left).


-- ! Syntax
-- * LEFT(string, number_of_chars)


-- ! The RIGHT() function extracts a number of characters from a string (starting from right).

-- ! Syntax
-- * RIGHT(string, number_of_chars)


-- ! Examples
-- * SELECT LEFT("SQL is really easy", 3); 

-- SELECT RIGHT("SQL is really easy", 4); 


-- ! **************************** ****************************** -- 


-- ! The REPEAT() function repeats a string as many times as specified.

-- ! Syntax
-- REPEAT(string, number)

-- ! Example
-- SELECT REPEAT("Cool ", 5);


-- ! **************************** ****************************** -- 

-- ! The TRIM() function removes leading and trailing spaces and prefixes or suffixes from a string.

-- ! Syntax
-- TRIM(string)

-- ! Examples
-- SELECT TRIM("  A crazy world   ");

-- SELECT TRIM('  bar   ');
-- SELECT TRIM(LEADING 'x' FROM 'xxxbarxxx');
-- SELECT TRIM(BOTH 'x' FROM 'xxxbarxxx');
-- SELECT TRIM(TRAILING 'xyz' FROM 'barxxyz');

-- SELECT TRIM(LEADING "Mr. " FROM "Mr. David")


-- ! **************************** ****************************** -- 
