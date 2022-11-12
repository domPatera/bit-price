<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BitcoinController extends AbstractController {

    public function index(): Response {

        $api_url = $this->getParameter('bitcoin.api_url');
        $content = json_decode(file_get_contents($api_url));

        return $this->render('bitcoin/index.html.twig', [
            'priceUSD' => $content->bpi->USD->rate_float,
            'priceEUR' => $content->bpi->EUR->rate_float
        ]);
    }
}