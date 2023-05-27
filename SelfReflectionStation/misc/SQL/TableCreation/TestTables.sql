--Create Table for the Test 
CREATE TABLE QuestionCategory(
    id INT AUTO_INCREMENT NOT NULL,
    Category VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);
CREATE TABLE AnswersTable(
    id INT AUTO_INCREMENT NOT NULL,
    AnswerType VARCHAR(255) NOT NULL,
    AnswerValues JSON NOT NULL,
    PRIMARY KEY (id)
);
CREATE TABLE QuestionsTable(
    id INT AUTO_INCREMENT NOT NULL,
    Question VARCHAR(255) NOT NULL,
    CategoryID INT NOT NULL,
    AnswersID INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (CategoryID) REFERENCES QuestionCategory(id), 
    FOREIGN KEY (AnswersID) REFERENCES AnswersTable(id)
);
CREATE TABLE WebLinksTable(
    id INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY (id),
    Website VARCHAR(255) NOT NULL,
    URL VARCHAR(255) NOT NULL,
    CategoryID INT NOT NULL,
    FOREIGN KEY (CategoryID) REFERENCES QuestionCategory(id)
);
CREATE TABLE AdvicesTable(
    id INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY (id),
    advice VARCHAR(255) NOT NULL,
    details VARCHAR(255) NOT NULL,
    CategoryID INT NOT NULL,
    FOREIGN KEY (CategoryID) REFERENCES QuestionCategory(id)
);
