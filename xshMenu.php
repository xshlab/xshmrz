<?php
    class xshMenu
    {
        public $get;
        public function setInclude($get)
        {
            if (!empty($get)):
                $this->get = explode(":", $get);
                if (isset($this->get[0])) {
                    $folder = $this->get[0];
                }
                if (isset($this)) {
                    $file = $this->get[1];
                }
                return __DIR__.$folder . "/" . $file;
            else:
                return __DIR__."/app.contact.html";
            endif;
        }
    }
    $xshMenu = new xshMenu();
    include $xshMenu->setInclude("");
?>