-- ! The FOREIGN KEY constraint is used to prevent actions that would destroy links between tables.
-- * A FOREIGN KEY is a field (or collection of fields) in one table, that refers to the PRIMARY KEY in another table.
-- * The table with the foreign key is called the child table, and the table with the primary key is called the referenced or parent table.

-- ! Syntax
-- [CONSTRAINT [symbol]] FOREIGN KEY
--     [index_name] (col_name, ...)
--     REFERENCES tbl_name (col_name,...)
--     [ON DELETE reference_option]
--     [ON UPDATE reference_option]

-- reference_option:
--     RESTRICT | CASCADE | SET NULL | NO ACTION | SET DEFAULT

-- ! Examples
-- CREATE TABLE
--     customers (
--         id INT AUTO_INCREMENT,
--         f_name VARCHAR(120) NOT NULL,
--         l_name VARCHAR(120) NOT NULL,
--         email VARCHAR(255) NOT NULL UNIQUE,
--         PRIMARY KEY (id)
--     );

-- CREATE TABLE
--     orders (
--         id INT AUTO_INCREMENT,
--         order_date DATE NOT NULL,
--         amount DECIMAL(8, 2),
--         customer_id INT,
--         PRIMARY KEY (id),
--         FOREIGN KEY (customer_id) REFERENCES customers (id)
--     );

-- CREATE TABLE
--     orders (
--         id INT AUTO_INCREMENT,
--         order_date DATE NOT NULL,
--         amount DECIMAL(8, 2),
--         customer_id INT,
--         PRIMARY KEY (id),
--         FOREIGN KEY (customer_id) REFERENCES customers (id) ON DELETE CASCADE
--     );

-- ALTER TABLE Orders ADD FOREIGN KEY (PersonID) REFERENCES Persons (PersonID);










-- INSERT INTO customers (first_name, last_name, email) 
-- VALUES ('Boy', 'George', 'george@gmail.com'),
--        ('George', 'Michael', 'gm@gmail.com'),
--        ('David', 'Bowie', 'david@gmail.com'),
--        ('Blue', 'Steele', 'blue@gmail.com'),
--        ('Bette', 'Davis', 'bette@aol.com');
       
       
-- INSERT INTO orders (order_date, amount, customer_id)
-- VALUES ('2016-02-10', 99.99, 1),
--        ('2017-11-11', 35.50, 1),
--        ('2014-12-12', 800.67, 2),
--        ('2015-01-03', 12.50, 2),
--        ('1999-04-11', 450.25, 5);