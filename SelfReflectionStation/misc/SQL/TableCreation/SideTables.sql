INSERT INTO QuestionCategory(Category)
VALUES
	('General Anxiety Test'),
	('Alcohol Addiction Test'),
	('Drug Addiction Test'),
    ('Shopping Addiction Test'),
    ('Gambling Addiction Test');

INSERT INTO AnswersTable(AnswerType,AnswerValues)
VALUES
	('5 Part Frequency Range', '{"0":"Never","1":"Not Frequent","2":"Sometimes","3":"Frequent","4":"Very Frequent"}'),
    ('5 Part Agreement Range', '{"0":"Strongly Disagree","1":"Disagree","2":"Neutral","3":"Agree","4":"Strongly Agree"}'),
    ('5 Part Probability Range', '{"0":"Never","1":"Unlikely","2":"50/50","3":"Likely","4":"Most Likely"}'),
    ('3 Part Agreement Range', '{"0":"Disagree","1":"Neutral","2":"Agree"}'),
	('Yes and No', '{"0":"No","1":"Yes"}');