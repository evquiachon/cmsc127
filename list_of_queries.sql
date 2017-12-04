CREATE TABLE senator (
	senator_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(256),
	party VARCHAR(256),
	province VARCHAR(256),
	position VARCHAR(256)
);

CREATE TABLE house_member (
	house_member_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(256),
	party_list VARCHAR(256),
	province VARCHAR(256),
	district INT
);

CREATE TABLE senate_bill (
	senate_bill_no INT NOT NULL PRIMARY KEY,
	title VARCHAR(999),
	status VARCHAR(256),
	date_filed DATE,
	senator_filed_id INT
);

CREATE TABLE house_bill (
	house_bill_no INT NOT NULL PRIMARY KEY,
	title VARCHAR(999),
	status VARCHAR(256),
	date_filed DATE,
	house_member_filed_id INT NOT NULL
);