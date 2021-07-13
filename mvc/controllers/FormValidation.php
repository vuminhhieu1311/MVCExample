<?php
class FormValidation extends Controller
{
    function check_email()
    {
        $email = $_POST['email'];
        $emailError = "";

        $signup = $this->model("SignUpModel"); // tao doi tuong login
        if (empty($email)) {
            $emailError = "Email can not be empty.";
        } else if ($signup->check_email($email) != 0) {
            $emailError = "This email had already been used.";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email.";
        }
        echo $emailError;
    }

    function check_password()
    {
        $passwordError = "";
        $password = $_POST['password'];

        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $password);

        if (empty($password)) {
            $passwordError = "Password can not be empty.";
        } else if (strlen($password) < 6) {
            $passwordError = "Your password must contain at least 6 characters.";
        } else if(!$uppercase || !$lowercase || !$number || !$specialChars) {
            $passwordError = "Your password should include at least one upper case letter, one number, and one special character.";
        }
        echo $passwordError;
    }

    function check_confirm_password() {
        $password = $_POST['password'];
        $cPassword = $_POST['cPassword'];
        $cPasswordError = "";
        if($password != $cPassword) {
            $cPasswordError = "Passwords do not match";
        }
        echo $cPasswordError;
    }
}
