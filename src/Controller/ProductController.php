<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product/{id}', name: 'app_product_details')]
    public function details(Product $product): Response
    {
//        $product = $productRepository->find($id);

        return $this->render('product/details.html.twig', [
            'product' => $product,
        ]);
    }
}
