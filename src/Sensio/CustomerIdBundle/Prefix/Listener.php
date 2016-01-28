<?php

namespace Sensio\CustomerIdBundle\Prefix;

use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class Listener
{
    /**
     * @var Router
     */
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        if ($id = $event->getRequest()->attributes->get('customer_id')) {
            $this->router->getContext()->setParameter('customer_id', $id);
        }
        else {
            // maybe redirect by passing a RedirectResponse to $event->setResponse()
        }
    }
}
