<?php

    // namespace app\controllers;
    namespace app\core\Application;

    class SiteController 
    {
        public static function contact()
        {
            return 'Show contact form.'; 
        }

        public static function handleContact()
        {
            return 'Handling submitted data';
        }

        public function phpInfo()
        {
            return phpinfo();
        }
    }
?>