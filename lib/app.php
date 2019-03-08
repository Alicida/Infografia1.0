<?php

    use Philo\Blade\Blade;

    class App {

        private static $singleton;
        public static $router;
        public static $base_path;
        private static $match;

        private static $action;
        private static $controller;

        private function __construct() {
        }

        public static function Singleton() {
            if (!self::$singleton instanceof self) {
                self::$singleton = new self;
                self::setup();
            }
            return self::$singleton;
        }

        public static function setup() {
            self::$router = new AltoRouter();
            self::$router->setBasePath("");
            if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
                $base_path = "/infografia";
            } else {
                // $base_path = "/produccion/asepxia/CO";
                $base_path = "/infografia";
            }
            self::$router->setBasePath($base_path);
            self::$base_path = (isset($_SERVER["HTTPS"]) ? "http://" : "http://") . $_SERVER['HTTP_HOST'] . $base_path;
            $GLOBALS['blade'] = new Blade(['./resources/views'], 'cache');
        }

        public function addRoute($method, $route, $target, $name) {
            self::$router->map($method, $route, $target, $name);
        }

        public function start() {
            self::$match = self::$router->match();
            $this->executeRoute();
        }

        private function getController($name) {
            return 'App\\Controllers\\' . $name;
        }

        private function error_404() {
            $Controller = self::getController('StaticsController');
            self::$controller = new $Controller;
            self::$action = "error_404";
            header('HTTP/1.0 404 Not Found', true, 404);
        }

        private function executeRoute() {
            if (self::$match) {
                list($controller, self::$action) = explode("#", self::$match['target']);
                $Controller = self::getController($controller);

                if (is_callable(array($Controller, self::$action))) {
                    self::$controller = new $Controller();
                }
            }
            if (!isset(self::$controller)) self::error_404();
            call_user_func_array(array(self::$controller, self::$action), array(self::$match['params']));
        }
    }
