<?php namespace OtherTribe;


class Router {

    private $config = array(
        'template_path' => 'templates/',
        'layout'        => 'layout.php'
    );

    protected $get = array();
    protected $post = array();

    private $params = array();
    private $temp_layout = null;

    private $prefix = null;

    public function __construct($config = array())
    {
        // TODO: Check $params is correct format

        $this->config = array_merge($this->config, $config);
    }

    // Adds
    public function group($prefix, $callback)
    {
        $this->prefix = $prefix;

        call_user_func($callback);

        $this->prefix = null;

        return;
    }

    public function get($route, $callback)
    {
        if (is_array($route))
        {
            foreach ($route as $r)
            {
                $this->setRoute('get', $r, $callback);
            }
        } else
        {
            $this->setRoute('get', $route, $callback);
        }

        return;
    }

    public function post($route, $callback)
    {
        $this->setRoute('post', $route, $callback);

        return;
    }

    // Allow routes to be called by GET or POST
    // - a little bit like the 'any' flag in Laravel
    public function get_post($route, $callback)
    {
        $this->setRoute('get', $route, $callback);
        $this->setRoute('post', $route, $callback);

        return;
    }

    private function setRoute($type, $route, $callback)
    {
        $routes =& $this->$type;

        $routes[$this->prefix . $route] = $callback;

        return;
    }

    // Temporarily set a new template for a single call
    public function layout($layout)
    {
        $this->temp_layout = $layout;

        // Method is chainable, so...
        return $this;

    }

    public function view($view, $data = array(), $return = false, $use_layout = true)
    {
        $view = $this->config['template_path'] . $view;

        if (! is_file($view) || ! is_readable($view))
        {
            exit('View file not found');
        }

        if (! empty($data) && is_array($data))
        {
            extract($data, EXTR_OVERWRITE);
        }

        if ($use_layout)
        {
            $layout = (! empty($this->temp_layout)) ? $this->config['template_path'] . $this->temp_layout : $this->config['template_path'] . $this->config['layout'];

            $this->temp_layout = null;

            if (! is_file($layout) || ! is_readable($layout))
            {
                exit('Layout file not found');
            }

            // TODO: abstract this out into another method
            ob_start();

            include $view;

            // $content is used within the $layout includes below
            $content = ob_get_clean();

            if ($return)
            {
                ob_start();

                include $layout;

                return ob_get_clean();
            } else
            {
                include $layout;

                exit();
            }
        } else
        {
            if ($return)
            {
                // TODO: abstract this out into another method
                ob_start();

                include $view;

                return ob_get_clean();
            } else
            {
                include $view;

                exit();
            }
        }

        return;
    }

    public function launch()
    {
        $path = $_SERVER['REQUEST_URI'];

        $path = strpos($path, '/index.php') === 0 ? substr($path, 10) : $path;

        // If there are any GET variables strip them off the end
        if (strpos($path, '?') !== 0)
        {
            $parts = explode('?', $path);

            $path = $parts[0];

            // TODO: store the GET variables for use later on - maybe...
        }

        $type = isset($_SERVER['REQUEST_METHOD']) ? strtolower($_SERVER['REQUEST_METHOD']) : 'cli';
        $routes =& $this->$type;

        if (! isset($routes[$path]))
        {
            exit('Route not found');
        }

        // TODO: do something with the POST variables - maybe...

        call_user_func($routes[$path]);

        exit();
    }
}

?>