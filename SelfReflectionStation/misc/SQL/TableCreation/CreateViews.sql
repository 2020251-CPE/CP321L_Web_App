CREATE VIEW GeneralAnxietyTest AS
SELECT ROW_NUMBER() OVER(ORDER BY  QuestionsTable.Question) AS id, QuestionsTable.Question, QuestionCategory.Category, AnswersTable.AnswerValues FROM QuestionsTable
    LEFT JOIN QuestionCategory ON QuestionsTable.CategoryID=QuestionCategory.id
    LEFT JOIN AnswersTable ON QuestionsTable.AnswersID=AnswersTable.id
    WHERE CategoryID = 1 
;
CREATE VIEW AlcoholAddictionTest AS
SELECT ROW_NUMBER() OVER(ORDER BY  QuestionsTable.Question) AS id, QuestionsTable.Question, QuestionCategory.Category, AnswersTable.AnswerValues FROM QuestionsTable
    LEFT JOIN QuestionCategory ON QuestionsTable.CategoryID=QuestionCategory.id
    LEFT JOIN AnswersTable ON QuestionsTable.AnswersID=AnswersTable.id
    WHERE CategoryID = 2 
;
CREATE VIEW DrugAddictionTest AS
SELECT ROW_NUMBER() OVER(ORDER BY  QuestionsTable.Question) AS id, QuestionsTable.Question, QuestionCategory.Category, AnswersTable.AnswerValues FROM QuestionsTable
    LEFT JOIN QuestionCategory ON QuestionsTable.CategoryID=QuestionCategory.id
    LEFT JOIN AnswersTable ON QuestionsTable.AnswersID=AnswersTable.id
    WHERE CategoryID = 3 
;
CREATE VIEW ShoppingAddictionTest AS
SELECT ROW_NUMBER() OVER(ORDER BY  QuestionsTable.Question) AS id, QuestionsTable.Question, QuestionCategory.Category, AnswersTable.AnswerValues FROM QuestionsTable
    LEFT JOIN QuestionCategory ON QuestionsTable.CategoryID=QuestionCategory.id
    LEFT JOIN AnswersTable ON QuestionsTable.AnswersID=AnswersTable.id
    WHERE CategoryID = 4 
;
CREATE VIEW GamblingAddictionTest AS
SELECT ROW_NUMBER() OVER(ORDER BY  QuestionsTable.Question) AS id, QuestionsTable.Question, QuestionCategory.Category, AnswersTable.AnswerValues FROM QuestionsTable
    LEFT JOIN QuestionCategory ON QuestionsTable.CategoryID=QuestionCategory.id
    LEFT JOIN AnswersTable ON QuestionsTable.AnswersID=AnswersTable.id
    WHERE CategoryID = 5 
;