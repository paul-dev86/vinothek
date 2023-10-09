<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProductController extends AbstractController
{

    public function index(ProductRepository $productRepo): Response
    {
        $products = $productRepo->findAll();

        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    public function editProduct($id, ProductRepository $productRepo): Response
    {
        return $this->render('product/edit-product.html.twig', [
            'selectedProduct' => $productRepo->find($id),
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
