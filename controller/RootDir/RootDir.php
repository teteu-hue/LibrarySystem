<?php 

    class RootDir{



        public static function getRealPath(){
            return $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]) . "/LibrarySystem";
        }
    }

?>