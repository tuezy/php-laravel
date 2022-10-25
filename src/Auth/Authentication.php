<?php
namespace Tuezy\Auth;

interface Authentication{
    public function login();
    public function logout();
}