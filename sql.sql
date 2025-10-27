create database blogif;

create table user(
    id int primary key auto_increment,
    name varchar(100),
    email varchar(100) unique,
    password varchar(100),
    create_at timestamp,
    updated_at timestamp
);

create table post(
    id int primary key auto_increment,
    author int,
    create_at timestamp,
    content varchar(600),
    title varchar(100)
)