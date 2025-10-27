create database blogif;

create table user(
    id int primary key auto_increment,
    name varchar(100),
    email varchar(100) unique,
    password varchar(100),
    create_at timestamp,
    updated_at timestamp
);