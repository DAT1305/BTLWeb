CREATE table IF NOT EXISTS users(
	id TNT AUTO_INCREMENT PRIMARY KEY,
    username varchar(100) NOT NULL,
    password varchar(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS posts(
	id INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    title varchar(200) NOT NULL,
	post_image varchar(255),
    noi_dung TEXT ,
    post_date DATETIME ,
    views INT ,
    likes INT ,
    comments INT ,
    tags varchar(255),
    FOREIGN KEY (id_user) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS comments(
	id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT NOT NULL ,
    user_id INT NOT NULL ,
    comment_text TEXT NOT NULL ,
    data_comment DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES posts(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
    
);
CREATE TABLE IF NOT EXISTS likes(
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL ,
post_id INT NOT NULL,
islike BOOLEAN NOT NULL,
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (post_id) REFERENCES posts(id)
    

);
CREATE TABLE IF NOT EXISTS follow(
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
follow_user_id INT NOT NULL,
isfollowing INT ,
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (follow_user_id) REFERENCES users(id)
    
);
CREATE TABLE IF NOT EXISTS groups (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    groupname varchar(100) NOT NULL ,
    title text NOT NULL ,
    image varchar(50),
    admin_id INT NOT NULL ,
    FOREIGN KEY (admin_id) REFERENCES users(id)

);
