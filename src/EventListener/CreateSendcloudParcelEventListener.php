<?php

namespace Lockizer\SyliusSendcloudPlugin\EventListener;

use JouwWeb\SendCloud\Client;
use JouwWeb\SendCloud\Model\Address;
use JouwWeb\SendCloud\Model\ParcelItem;
use Sylius\Component\Order\Model\OrderInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Webmozart\Assert\Assert;

class CreateSendcloudParcelEventListener
{
    public function __construct()
    {
    }

    public function onSyliusOrderPostComplete(GenericEvent $event) {
        $order = $event->getSubject();
        Assert::isInstanceOf($order, OrderInterface::class);

        $sendCloudClient = new Client('bda132369598472582db9ff9ecb2aa08', '50184009b11743bfb6474ca3b6e86bd5');

        $shipmentAddress = new Address('Wessel', 'test', 'Markenweg', '11', 'Varsseveld', '7051 HS ', 'NL', 'wesselslot@gmail.com');
        $item = new ParcelItem('test', '1', '1', '1');
        $sendCloudClient->createParcel($shipmentAddress, null, '0001', '1', '00001', null, array($item), null);

        return "bla";

    }
}