<?php 

    class RootDir{



        public static function getRealPath(){
            return realpath($_SERVER["DOCUMENT_ROOT"]) . "php07/LibrarySystem";
        }
    }

?>
