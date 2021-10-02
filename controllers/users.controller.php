<?php

class ControllerUsers{

    /*=============================================
    USER LOGIN
    =============================================*/

    static public function ctrUserLogin(){

        if (isset($_POST["loginUser"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginUser"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginPass"])) {

                $table = 'users';

                $item = 'user';
                $value = $_POST["loginUser"];

                $answer = UsersModel::MdlShowUsers($table, $item, $value);

                // var_dump($answer);

                if($answer["user"] == $_POST["loginUser"] && $answer["password"] == $_POST["loginPass"]){

                    $_SESSION["loggedIn"] = "ok";

                    echo '<script>

						window.location = "home";

					</script>';

                }else{

                    echo '<br><div class="alert alert-danger">User or password incorrect</div>';

                }
            }
        }
    }
}