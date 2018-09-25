<?php

namespace Disasterdrop\GuzzleJwt;

/**
 * @author Guillaume Cavana <guillaume.cavana@gmail.com>
 */
class JwtToken
{
    /**
     * $token.
     *
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $refreshToken;

    /**
     * @var \DateTime
     */
    private $expiration;

    /**
     * JwtToken constructor.
     * @param $accessToken
     * @param $refreshToken
     * @param \DateTime|null $expiration
     */
    public function __construct($accessToken, \DateTime $expiration = null)
    {
        $this->accessToken = $accessToken;
        $this->expiration = $expiration;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        if (!$this->expiration) {
            return false;
        }

        return (new \DateTime()) < $this->expiration;
    }
}
