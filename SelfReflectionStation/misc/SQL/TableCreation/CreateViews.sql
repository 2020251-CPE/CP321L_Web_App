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


CREATE VIEW GeneralAnxietyAdvices AS
SELECT ROW_NUMBER() OVER(ORDER BY  AdvicesTable.advice) AS id, AdvicesTable.advice, AdvicesTable.details FROM AdvicesTable
    LEFT JOIN QuestionCategory ON AdvicesTable.CategoryID=QuestionCategory.id
    WHERE CategoryID = 1
;
CREATE VIEW GeneralAddictionAdvices AS
SELECT ROW_NUMBER() OVER(ORDER BY  AdvicesTable.advice) AS id, AdvicesTable.advice, AdvicesTable.details FROM AdvicesTable
    LEFT JOIN QuestionCategory ON AdvicesTable.CategoryID=QuestionCategory.id
    WHERE CategoryID = 2
;

CREATE VIEW GeneralAnxietyOnlineResource AS
SELECT ROW_NUMBER() OVER(ORDER BY  WebLinksTable.Website) AS id, WebLinksTable.Website, WebLinksTable.URL, WebLinksTable.Details, QuestionCategory.Category FROM WebLinksTable
    LEFT JOIN QuestionCategory ON  WebLinksTable.CategoryID=QuestionCategory.id
    WHERE CategoryID = 1
;
CREATE VIEW AlcoholAddictionOnlineResource AS
SELECT ROW_NUMBER() OVER(ORDER BY  WebLinksTable.Website) AS id, WebLinksTable.Website, WebLinksTable.URL, WebLinksTable.Details, QuestionCategory.Category FROM WebLinksTable
    LEFT JOIN QuestionCategory ON  WebLinksTable.CategoryID=QuestionCategory.id
    WHERE CategoryID = 2
;
CREATE VIEW DrugAddictionOnlineResource AS
SELECT ROW_NUMBER() OVER(ORDER BY  WebLinksTable.Website) AS id, WebLinksTable.Website, WebLinksTable.URL, WebLinksTable.Details, QuestionCategory.Category FROM WebLinksTable
    LEFT JOIN QuestionCategory ON  WebLinksTable.CategoryID=QuestionCategory.id
    WHERE CategoryID = 3
;
CREATE VIEW ShoppingAddictionOnlineResource AS
SELECT ROW_NUMBER() OVER(ORDER BY  WebLinksTable.Website) AS id, WebLinksTable.Website, WebLinksTable.URL, WebLinksTable.Details, QuestionCategory.Category FROM WebLinksTable
    LEFT JOIN QuestionCategory ON  WebLinksTable.CategoryID=QuestionCategory.id
    WHERE CategoryID = 4
;
CREATE VIEW GamblingAddictionOnlineResource AS
SELECT ROW_NUMBER() OVER(ORDER BY  WebLinksTable.Website) AS id, WebLinksTable.Website, WebLinksTable.URL, WebLinksTable.Details, QuestionCategory.Category FROM WebLinksTable
    LEFT JOIN QuestionCategory ON  WebLinksTable.CategoryID=QuestionCategory.id
    WHERE CategoryID = 5
;