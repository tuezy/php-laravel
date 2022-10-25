<?php
namespace Tuezy\Auth;

use Tuezy\Auth\Entities\Users;

interface Authorization{
    public function has(Users $user);
}