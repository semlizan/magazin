<?php
class Controller_Admin extends Controller {

    function action_admin_zakaz() {

        $this->view->generate('admin_zakaz');
    }

    function action_zakaz2() {

        $this->view->generate('zakaz2');
    }
    function action_admin_tovar() {

        $this->view->generate('admin_tovar');
    }
}