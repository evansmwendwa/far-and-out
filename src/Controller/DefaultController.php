<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
    * @Route("/")
    */
    public function home()
    {
        return new Response(
            '<html><body>Far&amp;Out Studio</body></html>'
        );
    }
}
