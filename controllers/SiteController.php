<?php

    namespace app\controllers;

    class SiteController 
    {
        public function contact()
        {
            return 'Show contact form.'; 
        }

        public function handleContact()
        {
            return 'Handling submitted data';
        }

        public function phpInfo()
        {
            return phpinfo();
        }
    }
?>