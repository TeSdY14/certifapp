<?php
namespace App\Controller;

use Exception;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{

    /**
     * @Route("/lucky/number")
     * @return Response
     * @throws Exception
     */
    public function getNumber(): Response
    {
        $randomInt = random_int(1, 50);

        return new Response(
            '<html lang="fr"><body><h1>Bonjour petit con ' . $randomInt . '</h1></body></html>'
        );
    }

}