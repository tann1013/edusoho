<?php

namespace Topxia\Service\Question\Dao;

interface QuestionDao
{
    public function getQuestion($id);

    public function findQuestionsByIds(array $ids);

    public function findQuestionsByParentId($id);

    public function findQuestionsByParentIds(array $ids);

    public function findQuestionsByCopyIdAndLockedTarget($copyId, array $lockedTargets);

    public function findQuestionsbyTypes(array $types, $start, $limit);

    public function findQuestionsByTypesAndExcludeUnvalidatedMaterial(array $types, $start, $limit);
    
    public function findQuestionsByTypesAndSourceAndExcludeUnvalidatedMaterial(array $types, $start, $limit, $questionSource, $courseId, $lessonId);

    public function findQuestionsCountbyTypes(array $types);

    public function findQuestionsCountbyTypesAndSource($types,$questionSource,$courseId,$lessonId);

    public function searchQuestions($conditions, $sort, $start, $limit);

    public function searchQuestionsCount($conditions);

    public function findQuestionsCountByParentId($parentId);

    public function addQuestion($fields);

    public function updateQuestion($id, $fields);

    public function deleteQuestion($id);

    public function deleteQuestionsByParentId($id);

    public function updateQuestionCountByIds($ids, $status);

    public function getQuestionCountGroupByTypes($conditions);

    public function findQuestionsByTarget($target);

    public function findQuestionsByCopyIds(array $copyIds);
}