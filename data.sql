CREATE DATABASE planner;

USE planner;

CREATE TABLE tasks(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL,
    description VARCHAR(750) NOT NULL,
    day DATE NOT NULL,
    deadline DATE NOT NULL,
    complete BOOLEAN DEFAULT 0 NOT NULL,
    prioritiy INT NOT NULL
    )
INSERT INTO tasks
(title,description,day,deadline,complete)
VALUES
("zvetēt sievu","ar mietu", "2023-05-14", "2023-05-15",0),
("slānīt bērnus", "ar siksnu", "2023-05-14", "2023-05-16",0);
