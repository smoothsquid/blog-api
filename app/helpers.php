<?php

declare(strict_types=1);

use App\Models\User\User;

if (!function_exists('helpers_are_loaded')) {
    function helpers_are_loaded(): true
    {
        return true;
    }

    /**
     * Get the currently authenticated user.
     * auth()->user() 와 동일하지만 App\Models\User\User 타입의 인스턴스를 반환합니다.
     *
     * @return User currently authenticated user
     */
    function authUser(): User
    {
        /** @var User $user */
        $user = auth()->user();
        return $user;
    }
}

