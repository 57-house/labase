<?php

namespace App\Controllers;

use Database\Connection;

class Controller
{

    protected $db;

    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function index()
    {
        $req = $this->db->getPDO()->query('SELECT * FROM posts');
        $posts = $req->fetchAll();

        return $this->view('default.index', compact('posts'));
    }

    public function show(int $id)
    {
        $stm = $this->db->getPDO()->prepare('SELECT * FROM posts WHERE id = ?');
        $stm->execute([$id]);
        $post = $stm->fetch();
        return $this->view('default.show',compact('post'));
    }


    public function view(string $path, array $params = null)
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';
        if ($params) {
            $params = extract($params);
        }
        $content = ob_get_clean();
        require VIEWS . 'layout.php';
    }
}
