<?php
    class Flasher {
        public static function setFlash ($message, $action, $alert) {
            $_SESSION['flash'] = array(
                "message" => $message,
                "action" => $action,
                "alert" => $alert
            );
        }
    }
?>