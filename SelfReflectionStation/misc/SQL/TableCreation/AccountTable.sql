--Create Tables for Accounts
CREATE TABLE Accounts (
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    Name varchar(255) NOT NULL,
    Age INT NOT NULL,
    Email varchar(100) NOT NULL, 
    Psswrd varchar(100) NOT NULL,
    GeneralAnxietyTestAVR INT,
    AlcoholAddictionTestAVR INT,
    DrugAddictionTestAVR INT,
    ShoppingAddictionTestAVR INT,
    GamblingAddictionTestAVR INT
);
CREATE TABLE AnxietyTestResults (
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    RecordedResult INT NOT NULL,
    Email varchar(100) NOT NULL, 
    DateAndTimeOfRecord DATETIME NOT NULL
);
CREATE TABLE AlcoholAddictionTestResults (
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    RecordedResult INT NOT NULL,
    Email varchar(100) NOT NULL, 
    DateAndTimeOfRecord DATETIME NOT NULL
);
CREATE TABLE DrugAddictionTestResults (
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    RecordedResult INT NOT NULL,
    Email varchar(100) NOT NULL, 
    DateAndTimeOfRecord DATETIME NOT NULL
);
CREATE TABLE ShoppingAddictionTestResults (
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    RecordedResult INT NOT NULL,
    Email varchar(100) NOT NULL,
    DateAndTimeOfRecord DATETIME NOT NULL
);
CREATE TABLE Gambling_Addiction_Test_Results (
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    RecordedResult INT NOT NULL,
    Email varchar(100) NOT NULL,
    DateAndTimeOfRecord DATETIME NOT NULL
);
