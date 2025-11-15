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
    tags varchar(255)
    FOREIGN KEY (id_user) REFERENCES users(id)
);