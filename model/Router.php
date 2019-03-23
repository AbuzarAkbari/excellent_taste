<?php
/**
 * Router class
 */
class Router {
    /**
     * the constructor
     */
    public function __construct()
    {
        $requestUri = trim($_SERVER['REQUEST_URI']);
        $path = explode('?', $requestUri)[0];
        $items = explode('/', $path);
        // Weet niet waarom maar de eerste item is altijd leeg, dus vandaar deze lijn
        array_shift($items);
        $this->determineDestination($items);
    }

    /**
     *
     * determines the dest
     *
     * @param $items
     * @return void
     * @throws Exception
     */
    public function determineDestination($packets){
        $classname = "home";
        $method = "home";
        if(isset($packets[0]) && !empty($packets[0]))
            $classname = $packets[0];
        if(isset($packets[1]) && !empty($packets[1]))
            $method = $packets[1];
        $classname = ucfirst($classname);
        $this->sendToDestination($classname, $method, array_slice($packets, 2));
    }

    /**
     *
     * @param string $classname name of the class
     * @param string $method name of the method
     * @param array $params params for the method
     *
     * @param void
     * @throws Exception
     */
    public function sendToDestination($classname, $method, $params) {
        $class = APP_DIR . '/controller/' . $classname . '.php';

        if (! file_exists($class)) {
            throw new Exception('Class [' . $class . '] bestaat niet');
        }

        require_once $class;

        $obj = new $classname();

        call_user_func_array(array($obj, $method),$params);
        exit;
    }
}
?>