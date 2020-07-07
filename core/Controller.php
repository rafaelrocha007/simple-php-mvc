<?php

namespace Core;

abstract class Controller
{
    /** 
     * Parameters from the matched route
     * @var array
     */
    protected $routeParams = [];

    /** 
     * Class constructor
     * 
     * @param array $routeParams 
     * 
     * @return void
     */
    public function __construct($routeParams)
    {
        $this->routeParams = $routeParams;
    }

    public function __call($name, $args)
    {
        $method = $name . 'Action';

        if (method_exists($this, $method)) {
            if ($this->before() !== false) {
                call_user_func_array([$this, $method], $args);
                $this->after();
            }
        } else {
            echo "Method $method not found in controller " . get_class($this);
        }
    }

    protected function before()
    {
    }

    protected function after()
    {
    }
}
