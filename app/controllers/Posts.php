<?php

namespace App\Controllers;

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
        echo 'Hello from the index action in the Posts controller!';
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
