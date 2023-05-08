

--Create Table for the Test 
CREATE TABLE Question_Category (
    id UNSIGNED NOT NULL AUTO_INCREMENT,
    Category VARCHAR(255) NOT NULL,
);
CREATE Table Answers_Table (
    id UNSIGNED NOT NULL AUTO_INCREMENT,
    AnswerType VARCHAR(255) NOT NULL,
    AnswerValues JSON NOT NULL
)

CREATE TABLE Question_Table (
    id UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Question VARCHAR(255) NOT NULL,
    CategoryID INT FOREIGN KEY REFERENCES Question_Category(id),
    AnswersID INT FOREIGN KEY REFERENCES Answers_Table(id)
);

