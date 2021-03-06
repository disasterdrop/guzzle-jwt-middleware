<?php

namespace Musterhaus\GuzzleJwt\Tests;

use Musterhaus\GuzzleJwt\JwtToken;

class JwtTokenTest extends \PHPUnit_Framework_TestCase
{
    public function testTokenShouldNotBeValidIfExpirationIsInThePast()
    {
        $token = new JwtToken('foo', new \DateTime('now - 5 minutes'));

        $this->assertFalse($token->isValid());
    }

    public function testTokenShouldNotBeValidIfExpirationIsNow()
    {
        $token = new JwtToken('foo', new \DateTime('now'));

        $this->assertFalse($token->isValid());
    }

    public function testTokenShouldBeValidIfExpirationIsInTheFuture()
    {
        $token = new JwtToken('foo', new \DateTime('now + 5 minutes'));

        $this->assertTrue($token->isValid());
    }
}
