<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 06.07.18
 * Time: 18:03
 */

class Session
{
    function setName($name) {
        if ($this->sessionExists()) {
            throw new Exception ('Session alresdy started');
        }
        $this->name = $name;
        session_name($name);
        return $this;
    }
    function getName() {}
    function getId() {}
    function setId($id) {}
    function cookieExists() {}
    function sessionExists() {}
    function start() {
        session_start();
    }
    function destroy() {
        session_destroy();
    }
    function setSavePath($path) {}
    function set($value) {}
    function get() {}
    function contains($key) {}
    function delete($key) {}
}