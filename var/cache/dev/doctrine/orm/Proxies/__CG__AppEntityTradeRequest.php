<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TradeRequest extends \App\Entity\TradeRequest implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'fromProduct' => [parent::class, 'fromProduct', null],
        "\0".parent::class."\0".'fromQuantity' => [parent::class, 'fromQuantity', null],
        "\0".parent::class."\0".'fromUser' => [parent::class, 'fromUser', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'state' => [parent::class, 'state', null],
        "\0".parent::class."\0".'toProduct' => [parent::class, 'toProduct', null],
        "\0".parent::class."\0".'toQuantity' => [parent::class, 'toQuantity', null],
        "\0".parent::class."\0".'toUser' => [parent::class, 'toUser', null],
        'fromProduct' => [parent::class, 'fromProduct', null],
        'fromQuantity' => [parent::class, 'fromQuantity', null],
        'fromUser' => [parent::class, 'fromUser', null],
        'id' => [parent::class, 'id', null],
        'state' => [parent::class, 'state', null],
        'toProduct' => [parent::class, 'toProduct', null],
        'toQuantity' => [parent::class, 'toQuantity', null],
        'toUser' => [parent::class, 'toUser', null],
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