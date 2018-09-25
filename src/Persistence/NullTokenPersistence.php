<?php

namespace Musterhaus\GuzzleJwt\Persistence;

use Musterhaus\GuzzleJwt\JwtToken;

/**
 * Class NullTokenPersistence
 * @package Musterhaus\GuzzleJwt\Persistence
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