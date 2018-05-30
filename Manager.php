<?php

class Manager
{
     /**
     * @param array List complete des articles
     * @return $article
     */
    public function getAll()
    {
        $req = $this->getPDO()->query('SELECT * FROM articles');
        $req->execute();
        while ($data = $req->fetch()) {
            $article = new Article($title);
        }
        return $article;

    }
}
