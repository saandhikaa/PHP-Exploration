<?php
    class Flasher {
        public static function setFlash ($message, $action, $alert) {
            $_SESSION['flash'] = array(
                "message" => $message,
                "action" => $action,
                "alert" => $alert
            );
        }
        
        public static function flash() {
            if (isset($_SESSION['flash'])) {
                echo '<div class="alert alert-' . $_SESSION['flash']['alert'] . ' alert-dismissible fade show" role="alert">
                        ' . $_SESSION['flash']['message'] . '<strong> ' . $_SESSION['flash']['action'] . '</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                unset($_SESSION['flash']);
            }
        }
    }
?>