<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProductController extends AbstractController
{

    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    public function createProduct(Request $request, ManagerRegistry $doctrine): Response
    {
        $product = new Product();
        $productForm = $this->createForm(ProductType::class, $product);
        $productForm->handleRequest($request);

        if ($productForm->isSubmitted())
        {
            $eManager = $doctrine->getManager();
            $eManager->persist($product);
            $eManager->flush();

            return $this->redirect($this->generateUrl('product'));
        }

        return $this->render('product/create-product.html.twig', [
            'createProduct' => $productForm->createView()
        ]);
    }
}
