CREATE DATABASE planner;

USE planner;

CREATE TABLE tasks(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL,
    description VARCHAR(750) NOT NULL,
    day DATE NOT NULL,
    deadline DATE NOT NULL,
    complete BOOLEAN DEFAULT 0 NOT NULL,

    )
INSERT INTO tasks
(title,description,day,deadline,complete, priority)
VALUES
("zvetēt sievu","ar mietu", "2023-05-14", "2023-05-15",0, ),
("slānīt bērnus", "ar siksnu", "2023-05-14", "2023-05-16",0);

CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(50) UNIQUE NOT NULL,
    Password VARCHAR(100) NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL
);







ALTER TABLE planner
ADD COLUMN user_id INT,
ADD FOREIGN KEY (user_id) REFERENCES users(id);