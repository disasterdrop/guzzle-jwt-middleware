<?php

namespace Disasterdrop\GuzzleJwt\Persistence;

use Disasterdrop\GuzzleJwt\JwtToken;

/**
 * Interface TokenPersistenceInterface
 * @package Disasterdrop\GuzzleJwt\Persistence
 */
interface TokenPersistenceInterface
{

    /**
     * Restore the token data into the give token.
     *
     * @return JwtToken Restored token
     */
    public function restoreToken();

    /**
     * Save the token data.
     *
     * @param JwtToken $token
     */
    public function saveToken(JwtToken $token);

    /**
     * Delete the saved token data.
     */
    public function deleteToken();

    /**
     * Returns true if a token exists (although it may not be valid)
     *
     * @return bool
     */
    public function hasToken();

}