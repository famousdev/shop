    <?php

    class Router {

        private $routes;

        public function __construct() {
            $routesPath = ROOT.'/config/routes.php';
            $this->routes = include($routesPath);
        }
        /**
         * returns request string
         */
        private function getURI() {
            if (!empty($_SERVER['REQUEST_URI'])) {
                return trim($_SERVER['REQUEST_URI'], '/');
                }
        }

        public function run() {
        // Получить строку запроса
            $uri = $this->getURI();
        
        // Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            //сравниваем $uriPattern и $path
            if (preg_match("~$uriPattern~", $uri)) {
                /**
                 * определить какой контроллер и экшн
                 * обрабатывает запрос
                 */
                $iternalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $iternalRoute);
                
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                
                $actionName = 'action' . ucfirst(array_shift($segments));
                
                $parameters = $segments;

        // Подключить файл класса контроллера
                $controllerFile = ROOT . '/controllers/' . 
                        $controllerName . '.php';
                
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

        // Создать объектб вызвать метод (action)
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array( $controllerObject, $actionName), $parameters);
                if($result != null) {
                    break;
                }
            }
        } 
    }
}



