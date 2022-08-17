<?php

$query1 = "CREATE table IF NOT EXISTS company_info (
	id int unsigned not null auto_increment,
	primary key (id),
	name varchar(250) null,
	logo_ref text null,
	website varchar(250) null,
	email varchar(250) null,
	phone varchar(15) null,
	address varchar(250) null,
	other text null,
	slider text DEFAULT NULL,
	branches text
)";

$query2 = "CREATE table if not exists roles (
	roleid int unsigned not null auto_increment,
	primary key (roleid),
	transcid varchar(50),
	rolename varchar(255),
	roledesc text DEFAULT NULL,
	clientid int
)";

$query3 = "CREATE table if not exists activitylog (
	id int(11) unsigned not null auto_increment,
	primary key (id),
	user_id int(50),
	action varchar(250),
	type varchar(10) default 'admin',
	location varchar(250),
	location_id varchar(50),
	description varchar(250),
	date DATETIME NULL DEFAULT CURRENT_TIMESTAMP
)";

$query4 = "CREATE table if not exists users (
	id int unsigned not null auto_increment,
	primary key (id),
	first_name varchar(50) default null,
	last_name varchar(50) default null,
	account_type varchar(50) default null,
	account_number varchar(50) default null,
	account_currency varchar(50) default null,
	next_of_kin varchar(50) default null,
	rltxhp_next_of_kin varchar(50) default null,
	account_pin varchar(50) default null,
	iban_number varchar(50) default null,
	swift_code varchar(50) default null,
	date_of_birth varchar(50) default null,
	email varchar(50) default null,
	picture_ref varchar(250) default null,
	username varchar(50) default null,
	city varchar(250) default null,
	state varchar(250) default null,
	country varchar(250) default null,
	zip_code varchar(15) default null,
	phone varchar(15) default null,
	password text not null,
	gender varchar(2) default null,
	wallet varchar(250) default null,
	type tinyint default 0,
	status tinyint default 0,
	lock_account tinyint default 0,
	roleId tinyint default 0,
	accessLevel tinyint default 0,
	total_account_balance varchar(50) NOT NULL,
    total_deposit_amount varchar(50) NOT NULL,
    total_withdrawal_amount varchar(50) NOT NULL,
	date DATETIME NULL DEFAULT CURRENT_TIMESTAMP
)";


$query5 = "CREATE TABLE IF NOT EXISTS transaction (
 id int(10) NOT NULL AUTO_INCREMENT,
 user_id int(11) NOT NULL DEFAULT 0,
 tx_no varchar(250) NULL,h
 tx_type varchar(50) NULL,h
 fullname varchar(250) NULL,
 account_number varchar(50) NOT NULL,
 account_type varchar(50) NOT NULL,
 select_bank varchar(50) NOT NULL,
 bank_address varchar(250) NOT NULL,
 description varchar(250) NOT NULL,
 total_account_balance varchar(50) NOT NULL,
 total_deposit_amount varchar(50) NOT NULL,
 total_withdrawal_amount varchar(50) NOT NULL,
 swift_code varchar(50) NOT NULL,
 iban_code varchar(50) NOT NULL,
 amount varchar(50) NOT NULL,
 tx_details varchar(250) NOT NULL,
 status int(10) NOT NULL DEFAULT 0,
 date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (id)
)";

$query6 = "CREATE TABLE IF NOT EXISTS bank_details (
	id int(10) NOT NULL AUTO_INCREMENT,
	account_number varchar(50) default null,
	account_holder varchar(70) default null,
	iban_number varchar(50) default null,
	swift_code varchar(50) default null,
	date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
   )";

$query7 = "CREATE TABLE IF NOT EXISTS loan (
	id int(10) NOT NULL AUTO_INCREMENT,
	user_id int(11) NOT NULL DEFAULT 0,
	tx_no varchar(250) NULL,
	loan_type varchar(250) NULL,
	fullname varchar(250) NULL,
	duration varchar(250) NULL,
	firstname varchar(250) NULL,
	lastname varchar(250) NULL,
	zip_code varchar(250) NULL,
	city varchar(250) NULL,
	state varchar(250) NULL,
	country varchar(250) NULL,
	account_number varchar(50) NOT NULL,
	description varchar(250) NOT NULL,
	swift_code varchar(50) NOT NULL,
	iban_code varchar(50) NOT NULL,
	amount varchar(50) NOT NULL,
	tx_details varchar(250) NOT NULL,
	status int(10) NOT NULL DEFAULT 0,
	swift_code_approval int(10) NOT NULL DEFAULT 0,
	date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
   )";

// $query5 = "CREATE table if not exists content (
// 	id int unsigned not null auto_increment,
// 	primary key (id),
// 	title varchar(250),
// 	body longtext DEFAULT NULL,
// 	image text DEFAULT NULL,
// 	url varchar(250),
// 	unique key (url),
// 	category varchar(250),
// 	parent varchar(250),
// 	label varchar(250),
// 	business varchar(250),
// 	auto varchar(250),
// 	view varchar(250),
// 	product varchar(250),
// 	product_desc text,
// 	type text DEFAULT NULL,
// 	status int(11) default 0,
// 	no_of_views int(11) default 0,
// 	user_id int(50) default 0,
// 	author int(50) NULL,
// 	date_uploaded DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
// 	date_updated DATETIME NULL DEFAULT CURRENT_TIMESTAMP
// )";

?>
