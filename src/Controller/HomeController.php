<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
//    #[Route('/home', name: 'app_home')]
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $products = [
            '3ddc0c8e-2b21-4245-b6bf-f83521dc8286' => [
                'id' => '3ddc0c8e-2b21-4245-b6bf-f83521dc8286',
                'name' => 'Produit 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officia impedit adipisci eum eligendi necessitatibus sunt assumenda deserunt porro sed alias quos doloribus excepturi dignissimos perspiciatis consectetur, aspernatur repellat cum.',
                'price' => 99.99,
            ],
            '2b5f9984-c10b-48f4-af24-7ba6ce0d493c' => [

                'id' => '2b5f9984-c10b-48f4-af24-7ba6ce0d493c',
                'name' => 'Produit 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde corporis pariatur voluptate iusto sit animi voluptatum, nam nesciunt eveniet cumque assumenda necessitatibus natus neque molestias delectus aliquam cum minus. Officia.',
                'price' => 73.99,
            ],
            '7c8864b4-3a23-48bc-b748-51cc6e7a66a3' => [

                'id' => '7c8864b4-3a23-48bc-b748-51cc6e7a66a3',
                'name' => 'Produit 3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat debitis, ut doloribus eum quidem adipisci sunt quia eius voluptatum, voluptas ad distinctio, fugit sed corrupti voluptatem architecto. Eos, eaque libero.',
                'price' => 85.00,
            ],
            '7be2d0e5-af60-4cae-a92b-3aabda73365d' => [

                'id' => '7be2d0e5-af60-4cae-a92b-3aabda73365d',
                'name' => 'Produit 4',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quidem, incidunt totam harum repellendus eos, quia ab optio enim quo saepe quos qui dignissimos cumque at temporibus quas suscipit alias?',
                'price' => 64.50,
            ],
            '04321ca8-d8fe-4561-8996-a48825c983c1' => [

                'id' => '04321ca8-d8fe-4561-8996-a48825c983c1',
                'name' => 'Produit 5',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis quam saepe, repellendus nesciunt possimus alias dicta officiis nam deleniti rerum ad sequi modi pariatur nisi aliquam ex odit dolorum eius?',
                'price' => 64.50,
            ],
            'd2ba863a-cde2-4929-b01f-4e9d9bd11762' => [

                'id' => 'd2ba863a-cde2-4929-b01f-4e9d9bd11762',
                'name' => 'Produit 6',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eligendi voluptates ad aut. Animi modi est numquam quam nam odio culpa quasi iure quas provident. Perferendis amet in temporibus iure?',
                'price' => 30.45,
            ],
            'e1c60f8c-4939-4c45-81fe-81834c7029b6' => [

                'id' => 'e1c60f8c-4939-4c45-81fe-81834c7029b6',
                'name' => 'Produit 7',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur magnam consequuntur eligendi minima soluta amet veritatis, sed eaque blanditiis nulla culpa, quia repellendus! Quos accusantium, itaque voluptas voluptatum veniam quis!',
                'price' => 45.99,
            ],
            '1c29d656-7afd-4112-be18-f5c757701dca' => [

                'id' => '1c29d656-7afd-4112-be18-f5c757701dca',
                'name' => 'Produit 8',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum beatae sit quis nisi, vitae eaque possimus labore adipisci fugiat error quidem officiis dignissimos dolores cum iusto id exercitationem voluptatibus dolorum?',
                'price' => 10.30,
            ],
            '1c29d656-7afd-4112-be18-f5c757701dcb' => [

                'id' => '1c29d656-7afd-4112-be18-f5c757701dcb',
                'name' => 'Produit 9',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum beatae sit quis nisi, vitae eaque possimus labore adipisci fugiat error quidem officiis dignissimos dolores cum iusto id exercitationem voluptatibus dolorum?',
                'price' => 12.30,
            ],
            '1c29d656-7afd-4112-be18-f5c757701dcc' => [

                'id' => '1c29d656-7afd-4112-be18-f5c757701dcc',
                'name' => 'Produit 10, quel merveilleux appareil',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum beatae sit quis nisi, vitae eaque possimus labore adipisci fugiat error quidem officiis dignissimos dolores cum iusto id exercitationem voluptatibus dolorum?',
                'price' => 14.69,
            ],
        ];

        return $this->render('home/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'controller_name' => 'HomeController',
            'title' => 'Page about',
        ]);
    }
}
