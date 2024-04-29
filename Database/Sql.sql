CREATE DATABASE IF NOT EXISTS cloud;
USE cloud;

CREATE TABLE IF NOT EXISTS Student (
    FirstName varchar(255) NOT NULL,
    LastName varchar(255) NOT NULL,
    ID varchar(255) NOT NULL unique,
    Age int,
    CGPA float DEFAULT 0.0,
    PRIMARY KEY (ID)
);
