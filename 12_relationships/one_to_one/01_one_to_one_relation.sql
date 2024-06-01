-- ! One-to-One Relationship

-- * Definition: Each record in Table A is associated with one and only one record in Table B, and vice versa.
-- * Setup: Include a foreign key in one of the tables that references the primary key of the other table.
-- * For example: Tables users and user_profiles, where each user has a single corresponding profile.

-- ! Examples
CREATE TABLE
    users (
        id INT AUTO_INCREMENT,
        username VARCHAR(50),
        PRIMARY KEY (id)
    );

CREATE TABLE
    user_profiles (
        id INT AUTO_INCREMENT,
        user_id INT UNIQUE,
        profile_picture VARCHAR(255),
        country VARCHAR(255),
        PRIMARY KEY(id),
        FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
    );