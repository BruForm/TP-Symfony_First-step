<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Repository\BrandRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrandController extends AbstractController
{
    #[Route('/brands', name: 'app_brands')]
    public function displayBrands(BrandRepository $brandRepository): Response
    {
        $brands = $brandRepository->findAll();
        return $this->render('brand/brands.html.twig', [
            'brands' => $brands,
        ]);
    }

    #[Route('/brand/{id}/details', name: 'app_brand_details')]
    public function displayBrandDetails(Brand $brand): Response
    {
        return $this->render('brand/brandDetails.html.twig', [
            'brand' => $brand,
        ]);
    }
}
