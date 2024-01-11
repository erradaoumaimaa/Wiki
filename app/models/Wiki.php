<?php
class Wiki
{
    private $db;

    public function __construct()
    {
        $this->db= Database::getInstance();
    }

    public function getAll()
    {
        $this->db->query("SELECT wikis.*, categories.title AS category, users.fname AS fname, users.lname AS lname
            FROM wikis
            INNER JOIN categories ON categories.id = wikis.category_id
            INNER JOIN users ON users.id = wikis.user_id
            WHERE wikis.deleted = 0 AND wikis.archived = 0
            ORDER BY wikis.created_at DESC");
        return $this->db->resultSet();
    }
    public function Add($wiki)
    {
        try {
            $this->db->query("INSERT INTO Wikis(title, content, user_id, category_id) VALUES( :title, :content, :user_id ,:category_id)");
            $this->db->bind(':title', $wiki['title']);
            $this->db->bind(':content', $wiki['content']);
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $this->db->bind(':category_id', $wiki['category_id']);

            $this->db->execute();
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Update($wiki)
    {
        try {
            $this->db->query("UPDATE wikis SET title = :title, content = :content, category_id = :category_id");
            $this->db->bind(':title', $wiki->title);
            $this->db->bind(':content', $wiki->content);
            $this->db->bind(':category_id', $wiki->category_id);

            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Delete($Wiki_ID)
    {
        try {
            $this->db->query("DELETE FROM wikis WHERE id = :Wiki_ID");
            $this->db->bind(':Wiki_ID', $Wiki_ID);
            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function attachTag($wiki_id, $tag_id)
    {
        $this->db->query("INSERT INTO tag_wiki(tag_id, wiki_id) VALUES(:tag_id,:wiki_id)");
        $this->db->bind(':wiki_id', $wiki_id);
        $this->db->bind(':tag_id', $tag_id);
        $this->db->execute();
    }
}
