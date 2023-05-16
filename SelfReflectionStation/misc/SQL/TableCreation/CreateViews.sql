CREATE VIEW GeneralAnxietyTest AS
SELECT QuestionsTable.Question, QuestionCategory.Category, AnswersTable.AnswerValues FROM QuestionsTable
    LEFT JOIN QuestionCategory ON QuestionsTable.CategoryID=QuestionCategory.id
    LEFT JOIN AnswersTable ON QuestionsTable.AnswersID=AnswersTable.id
    WHERE CategoryID = 1 
;
CREATE VIEW AlcoholAddictionTest AS
SELECT QuestionsTable.Question, QuestionCategory.Category, AnswersTable.AnswerValues FROM QuestionsTable
    LEFT JOIN QuestionCategory ON QuestionsTable.CategoryID=QuestionCategory.id
    LEFT JOIN AnswersTable ON QuestionsTable.AnswersID=AnswersTable.id
    WHERE CategoryID = 2 
;
CREATE VIEW DrugAddictionTest AS
SELECT QuestionsTable.Question, QuestionCategory.Category, AnswersTable.AnswerValues FROM QuestionsTable
    LEFT JOIN QuestionCategory ON QuestionsTable.CategoryID=QuestionCategory.id
    LEFT JOIN AnswersTable ON QuestionsTable.AnswersID=AnswersTable.id
    WHERE CategoryID = 3 
;
CREATE VIEW ShoppingAddictionTest AS
SELECT QuestionsTable.Question, QuestionCategory.Category, AnswersTable.AnswerValues FROM QuestionsTable
    LEFT JOIN QuestionCategory ON QuestionsTable.CategoryID=QuestionCategory.id
    LEFT JOIN AnswersTable ON QuestionsTable.AnswersID=AnswersTable.id
    WHERE CategoryID = 4 
;
CREATE VIEW GamblingAddictionTest AS
SELECT QuestionsTable.Question, QuestionCategory.Category, AnswersTable.AnswerValues FROM QuestionsTable
    LEFT JOIN QuestionCategory ON QuestionsTable.CategoryID=QuestionCategory.id
    LEFT JOIN AnswersTable ON QuestionsTable.AnswersID=AnswersTable.id
    WHERE CategoryID = 5 
;