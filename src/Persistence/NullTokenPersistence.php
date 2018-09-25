<?php

namespace Disasterdrop\GuzzleJwt\Persistence;

use Disasterdrop\GuzzleJwt\JwtToken;

/**
 * Class NullTokenPersistence
 * @package Disasterdrop\GuzzleJwt\Persistence
 */
class NullTokenPersistence implements TokenPersistenceInterface
{
    public function saveToken(JwtToken $token)
    {
        return;
    }

    public function restoreToken()
    {
        return null;
    }

    public function deleteToken()
    {
        return;
    }

    public function hasToken()
    {
        return false;
    }
}