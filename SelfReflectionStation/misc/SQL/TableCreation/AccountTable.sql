--Create Tables for Accounts
CREATE TABLE Accounts (
    id UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    Name VARCHAR(255) NOT NULL,
    Age INT NOT NULL,
    Email VARCHAR(100) NOT NULL, --should be encrypted by PHP
    Password VARCHAR(100) NOT NULL, --should be encrypted by PHP
    GeneralAnxietyTestAVR INT NOT NULL,
    AlcoholAddictionTestAVR INT NOT NULL,
    DrugAddictionTestAVR INT NOT NULL,
    ShoppingAddictionTestAVR INT NOT NULL,
    GamblingAddictionTestAVR INT NOT NULL
);
CREATE TABLE AnxietyTestResults (
    id UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    RecordedResult INT NOT NULL,
    Email VARCHAR(100) NOT NULL, --should be encrypted by PHP
    DateAndTimeOfRecord DATETIME NOT NULL
);
CREATE TABLE AlcoholAddictionTestResults (
    id UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    RecordedResult INT NOT NULL,
    Email VARCHAR(100) NOT NULL, --should be encrypted by PHP
    DateAndTimeOfRecord DATETIME NOT NULL
);
CREATE TABLE DrugAddictionTestResults (
    id UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    RecordedResult INT NOT NULL,
    Email VARCHAR(100) NOT NULL, --should be encrypted by PHP
    DateAndTimeOfRecord DATETIME NOT NULL
);
CREATE TABLE ShoppingAddictionTestResults (
    id UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    RecordedResult INT NOT NULL,
    Email VARCHAR(100) NOT NULL, --should be encrypted by PHP
    DateAndTimeOfRecord DATETIME NOT NULL
);
CREATE TABLE Gambling_Addiction_Test_Results (
    id UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    RecordedResult INT NOT NULL,
    Email VARCHAR(100) NOT NULL, --should be encrypted by PHP
    DateAndTimeOfRecord DATETIME NOT NULL
);
