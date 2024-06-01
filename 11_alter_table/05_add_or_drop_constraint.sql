-- ! The ALTER TABLE statement is used to add, delete, or modify columns in an existing table.

-- * The ALTER TABLE statement is also used to add and drop various constraints on an existing table.

-- ! ALTER TABLE - Add and Drop CONSTRAINT

-- ! Examples
-- * ALTER TABLE users ADD CONSTRAINT under_age CHECK(age >= 18);
-- * ALTER TABLE users ADD UNIQUE (username);

-- ! ALTER TABLE users DROP CONSTRAINT under_age;
-- ! ALTER TABLE users DROP CONSTRAINT username; 