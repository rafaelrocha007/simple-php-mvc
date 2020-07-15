<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Post;

/** 
 * Posts controller
 */
class Posts extends \Core\Controller
{
    /** 
     * @return void
     */
    public function indexAction()
    {
        $posts = Post::getAll();
        View::renderTemplate('Posts/index.html.twig', ['posts' => $posts]);
    }

    /** 
     * @return void
     */
    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }

    public function editAction()
    {
        echo htmlspecialchars(print_r($this->routeParams, true));
    }
}
