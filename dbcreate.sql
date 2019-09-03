CREATE TABLE author(
	author_id INT NOT NULL AUTO_INCREMENT,
	author_name VARCHAR(256),
	profile_pic VARCHAR(256),
	author_category VARCHAR(256),
	PRIMARY KEY(author_id)

);

CREATE TABLE picture(
	pic_id INT NOT NULL AUTO_INCREMENT,
	author_name VARCHAR(256),
	pic_path VARCHAR(256),
	pic_category VARCHAR(256),
	PRIMARY KEY(pic_id)

);

CREATE TABLE orders(
	order_id INT NOT NULL AUTO_INCREMENT,
	member_id INT,
	author_name VARCHAR(256),
	order_information VARCHAR(256),
	price INT,
	email VARCHAR(256),
	request VARCHAR(256),
	PRIMARY KEY(order_id)

);

CREATE TABLE afterword(
	afterword_num INT NOT NULL AUTO_INCREMENT,
	afterword_id VARCHAR(256),
	contents VARCHAR(256),
	PRIMARY KEY(afterword_num)

);

CREATE TABLE members(
	member_num INT NOT NULL AUTO_INCREMENT,
	member_id VARCHAR(256),
	member_pw VARCHAR(256),
	PRIMARY KEY(member_num)

);