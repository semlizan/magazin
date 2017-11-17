<?php
class Controller_User extends Controller {

    function action_registr() {

        $this->view->generate('registr');
    }

    function action_vxod() {

        $this->view->generate('vxod');
    }

    function action_LK() {

        $this->view->generate('LK');
    }
    function action_history() {

        $this->view->generate('history');
    }
    function action_history_2() {

        $this->view->generate('history_2');
    }
    function action_basket() {

        $this->view->generate('basket');
    }
}