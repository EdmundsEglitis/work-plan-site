CREATE DATABASE planner;

USE planner;

CREATE TABLE Tasks (
    id INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    Title VARCHAR(100) NOT NULL,
    Deadline DATE,
    Status ENUM('done', 'not done') DEFAULT 'not done',
    FOREIGN KEY (UserID) REFERENCES Users(id),
);



CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(50) UNIQUE NOT NULL,
    Password VARCHAR(100) NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL
);

