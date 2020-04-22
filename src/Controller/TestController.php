<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Jogurty;


class TestController
{
    public function index()
    {
        
        return new Response(
            '<html><body>Hello World</body></html>'
        );

        $entityManager = $this->getDoctrine()->getManager();

        $produkt = new Jogurty();
        $produkt->SetNazwa("fajny jogurt");

        $entityManager->persist($produkt);
        $entityManager->flush();

    }
}
?>