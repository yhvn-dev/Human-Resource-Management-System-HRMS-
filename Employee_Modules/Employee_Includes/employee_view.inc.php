<?php

function check_editem_for_errors() {
    if (isset($_SESSION['update_errors'])) {
        foreach ($_SESSION['update_errors'] as $error) {
            echo '<div class="error_div">
                     <p class="form_error">' . htmlspecialchars((string)$error) . '</p>
                     <span class="error_x_button remove_error_prompt">x</span>
                  </div>';
        }
        unset($_SESSION['update_errors']);
    }



    if (isset($_SESSION['update_emp_success'])) {
        $successMessage = $_SESSION['update_emp_success'];

        if (is_array($successMessage)) {
            foreach ($successMessage as $message) {
                echo '<div class="success_div">
                         <p class="form_success">' . htmlspecialchars((string)$message) . '</p>
                         <span class="success_x_button remove_success_button_prompt">x</span>
                      </div>';
            }
        } else {
            echo '<div class="success_div">
                     <p class="form_success">' . htmlspecialchars((string)$successMessage) . '</p>
                     <span class="success_x_button remove_success_button_prompt">x</span>
                  </div>';
        }

        unset($_SESSION['update_emp_success']);
    }
}