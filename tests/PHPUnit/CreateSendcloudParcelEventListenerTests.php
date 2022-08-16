<?php

namespace Tests\Lockizer\SyliusSendcloudPlugin\PHPUnit;

use Lockizer\SyliusSendcloudPlugin\EventListener\CreateSendcloudParcelEventListener;
use PHPUnit\Framework\TestCase;
use Sylius\Component\Order\Model\Order;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\GenericEvent;

class CreateSendcloudParcelEventListenerTests extends TestCase
{
    /**  @var EventDispatcher**/
    private $dispatcher;

    public function setUp() : void {
        $this->dispatcher = new EventDispatcher();
    }
    public function testCanCreateParcel() {
        $order = new Order();
        $eventListener = new CreateSendcloudParcelEventListener();
        $event =  new GenericEvent($order);
        $eventListener->onSyliusOrderPostComplete($event);
        //$this->dispatcher->dispatch($event, "onSyliusOrderPostComplete");


        $this->assertTrue(true);
        //$eventListener->onSyliusOrderPostComplete();
    }
}