-- ! Sql operators

-- ! Not equal operator
-- * <>, != 

-- ! Negation of simple pattern matching	
-- * NOT LIKE

-- ! Greater than operator	
-- * >

-- ! Less than operator	
-- * <

-- ! Greater than or equal operator	
-- * >=

-- ! Less than or equal operator	
-- * <=

-- ! Logical AND	
-- * AND, &&

-- ! Logical OR
-- * OR, ||

-- ! Whether a value is within a range of values
-- * BETWEEN ... AND ...

-- ! Whether a value is not within a range of values
-- * NOT BETWEEN ... AND ...

-- ! use CAST() for casting type
-- * SELECT CAST("2020-04-11" AS DATE);
-- * SELECT * FROM people WHERE YEAR(birth_date) > 2020;
-- * SELECT * FROM people WHERE birth_date > CAST("2005-01-01" AS DATE);


-- ! Whether a value is within a set of values	
-- * IN()
-- * SELECT title, author_lname FROM books WHERE author_lname IN("Greene", "Holiday", "Manson");

-- ! Whether a value is not within a set of values
-- * NOT IN()


-- ! ********************** ***********************--


-- ! Case operator	
-- SELECT OrderID, Quantity,
-- CASE
--     WHEN Quantity > 30 THEN 'The quantity is greater than 30'
--     WHEN Quantity = 30 THEN 'The quantity is 30'
--     ELSE 'The quantity is under 30'
-- END AS QuantityText
-- FROM OrderDetails;

-- SELECT title, stock_quantity,
-- CASE 
--     WHEN stock_quantity BETWEEN 0 AND 50 THEN "*"
--     WHEN stock_quantity BETWEEN 51 AND 100 THEN "**"
--     ELSE "***"
-- END as Stock
-- FROM books;


-- ! NULL value test	
-- * IS NULL

-- ! NOT NULL value test
-- * IS NOT NULL