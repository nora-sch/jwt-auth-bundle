<?php

namespace Auth0\JWTAuthBundle\Security\Core;

use stdClass;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * @author german
 */
interface JWTUserProviderInterface extends UserProviderInterface
{
    /**
     * Loads the user for the given decoded JWT.
     *
     * This method must throw JWTInfoNotFoundException if the user is not
     * found.
     *
     * @param stdClass $jwt The decoded Json Web Token
     *
     * @return UserInterface
     *
     * @throws AuthenticationException if the user is not found
     */
    public function loadUserByJWT($jwt);

    /**
     * Returns an anonymous user.
     *
     * This can return a JWTInfoNotFoundException exception if you don't want
     * to handle anonymous users.
     *
     * It is recommended to return a user with the role IS_AUTHENTICATED_ANONYMOUSLY
     *
     * @return UserInterface
     *
     * @throws AuthenticationException
     */
    public function getAnonymousUser();
}
