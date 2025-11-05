create database blogif;

use blogif;

create table user(
    id int primary key auto_increment,
    social_name varchar(100),
    first_name varchar(100),
    last_name varchar(100),
    phone_number varchar(100),
    birth_day date,
    email varchar(100) unique,
    password varchar(100),
    create_at timestamp,
    updated_at timestamp
);

create table post(
    id int primary key auto_increment,
    author int,
    create_at timestamp,
    content longtext,
    title varchar(100),
    summary varchar(100)
);

create table comment(
    id int primary key auto_increment,
    author int,
    id_post int,
    content varchar(200),
    create_at timestamp
);