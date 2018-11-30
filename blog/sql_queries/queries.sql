CREATE TABLE users (
   id INT(10) NOT NULL AUTO_INCREMENT,
   first_name VARCHAR(225) NOT NULL,
   last_name VARCHAR(225) NOT NULL,
   username VARCHAR(225) NOT NULL,
   email VARCHAR(225) NOT NULL,
   password VARCHAR(225) NOT NULL,
   role VARCHAR(10),
   PRIMARY KEY (ID),
);

CREATE TABLE posts (
   id INT NOT NULL AUTO_INCREMENT,
   title VARCHAR(255),
   content TEXT,
   created_at TIMESTAMP,
   date TIMESTAMP,
   PRIMARY KEY (ID),
   FOREIGN KEY (user_id) REFERENCES users(id),
);

CREATE TABLE categories (
   id INT(10) NOT NULL AUTO_INCREMENT,
   name VARCHAR(225),
   PRIMARY KEY (ID),
);

CREATE TABLE posts_categories (
   id INT NOT NULL AUTO_INCREMENT,
   post_id INT NOT NULL,
   category_id INT NOT NULL,
   PRIMARY KEY (ID),
   FOREIGN KEY (post_id) REFERENCES posts(id),
   FOREIGN KEY (category_id) REFERENCES categories(id)
);