INSERT INTO QuestionCategory(Category)
VALUES
	('General Anxiety Test'),
	('Alcohol Addiction Test'),
	('Drug Addiction Test'),
    ('Shopping Addiction Test'),
    ('Gambling Addiction Test');

INSERT INTO AnswersTable(AnswerType,AnswerValues)
VALUES
	('5 Part Probability Range', '{"0":"Never","1":"Not Likely","2":"Neutral","3":"Likely","4":"Most Likely"}'),
    ('5 Part Agreement Range', '{"0":"Strongly Disagree","1":"Disagree","2":"Neutral","3":"Agree","4":"Strongly Agree"}'),
    ('3 Part Probability Range', '{"0":"Not Likely","1":"Neutral","2":"Most Likely"}'),
    ('3 Part Agreement Range', '{"0":"Agree","1":"Neutral","2":"Agree"}'),
	('Yes and No', '{"0":"No","1":"Yes"}');