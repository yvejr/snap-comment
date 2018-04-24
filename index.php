<?php
class Comment {
    private $commentSaltiness;
    private $commentText;
    private $commentUsername;

    /**
     * @return mixed
     */
    public function getCommentText() {
        return $this->commentText;
    }

    /**
     * @return mixed
     */
    public function getCommentUsername() {
        return $this->commentUsername;
    }

    /**
     * @return mixed
     */
    public function getCommentSaltiness() {
        return $this->commentSaltiness;
    }

    /**
     * @param mixed $commentText
     */
    public function setCommentText($commentText) {
        $this->commentText = $commentText;
    }

    /**
     * @param mixed $commentUsername
     */
    public function setCommentUsername($commentUsername) {
        $this->commentUsername = $commentUsername;
    }

    /**
     * @param mixed $commentSaltiness
     */
    public function setCommentSaltiness($commentSaltiness) {
        $this->commentSaltiness = $commentSaltiness;
    }
new Comment = $comment1;
$comment1->commentSaltiness = '1';
$comment1->commentText = 'Some text that is probably salty.';
$comment1->commentUsername = 'iheartllamas';

echo $comment1->commentSaltiness . " " . $comment1->commentText . " " . $student1->commentUsername . "<br />";
}