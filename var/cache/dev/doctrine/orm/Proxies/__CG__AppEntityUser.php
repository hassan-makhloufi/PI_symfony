<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'comments' => [parent::class, 'comments', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'firstname' => [parent::class, 'firstname', null],
        "\0".parent::class."\0".'forums' => [parent::class, 'forums', null],
        "\0".parent::class."\0".'fromRequestTrades' => [parent::class, 'fromRequestTrades', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'isAdmin' => [parent::class, 'isAdmin', null],
        "\0".parent::class."\0".'lastname' => [parent::class, 'lastname', null],
        "\0".parent::class."\0".'likes' => [parent::class, 'likes', null],
        "\0".parent::class."\0".'livraisons' => [parent::class, 'livraisons', null],
        "\0".parent::class."\0".'notifications' => [parent::class, 'notifications', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'products' => [parent::class, 'products', null],
        "\0".parent::class."\0".'reclamations' => [parent::class, 'reclamations', null],
        "\0".parent::class."\0".'toRequestTrades' => [parent::class, 'toRequestTrades', null],
        'comments' => [parent::class, 'comments', null],
        'confirmPassword' => [parent::class, 'confirmPassword', null],
        'email' => [parent::class, 'email', null],
        'firstname' => [parent::class, 'firstname', null],
        'forums' => [parent::class, 'forums', null],
        'fromRequestTrades' => [parent::class, 'fromRequestTrades', null],
        'id' => [parent::class, 'id', null],
        'isAdmin' => [parent::class, 'isAdmin', null],
        'lastname' => [parent::class, 'lastname', null],
        'likes' => [parent::class, 'likes', null],
        'livraisons' => [parent::class, 'livraisons', null],
        'notifications' => [parent::class, 'notifications', null],
        'password' => [parent::class, 'password', null],
        'products' => [parent::class, 'products', null],
        'reclamations' => [parent::class, 'reclamations', null],
        'toRequestTrades' => [parent::class, 'toRequestTrades', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
