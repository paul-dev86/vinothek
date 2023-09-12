<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Company;
use App\Entity\Region;
use App\Entity\Vine;
use App\Form\CategoryType;
use App\Form\CompanyType;
use App\Form\RegionType;
use App\Form\VineType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductPropertiesController extends AbstractController
{
    /**
     * @return Response
     */
    public function index(): Response
    {

        return $this->render('product_properties/index.html.twig', [
            'controller_name' => 'ProductPropertiesController',
        ]);
    }

    /**
     * @param Request $request
     * @param ManagerRegistry $doctrine
     * @return Response
     */
    public function createCategory(Request $request, ManagerRegistry $doctrine): Response
    {
        $category = new Category();
        $categoryForm = $this->createForm(CategoryType::class, $category);
        $categoryForm->handleRequest($request);

        if ($categoryForm->isSubmitted())
        {
            $eManager = $doctrine->getManager();
            $eManager->persist($category);
            $eManager->flush();

            return $this->redirect($this->generateUrl('create-category'));
        }

        return $this->render('product_properties/create-category.html.twig', [
            'createCategory' => $categoryForm->createView()
        ]);
    }

    public function createCompany(Request $request, ManagerRegistry $doctrine): Response
    {
        $company = new Company();
        $companyForm = $this->createForm(CompanyType::class, $company);
        $companyForm->handleRequest($request);

        if ($companyForm->isSubmitted())
        {
            $eManager = $doctrine->getManager();
            $eManager->persist($company);
            $eManager->flush();

            return $this->redirect($this->generateUrl('create-company'));
        }

        return $this->render('product_properties/create-company.html.twig', [
            'createCompany' => $companyForm->createView()
        ]);
    }

    public function createRegion(Request $request, ManagerRegistry $doctrine): Response
    {
        $region = new Region();
        $regionForm = $this->createForm(RegionType::class, $region);
        $regionForm->handleRequest($request);

        if ($regionForm->isSubmitted())
        {
            $eManager = $doctrine->getManager();
            $eManager->persist($region);
            $eManager->flush();

            return $this->redirect($this->generateUrl('create-region'));
        }

        return $this->render('product_properties/create-region.html.twig', [
            'createRegion' => $regionForm->createView()
        ]);
    }

    public function createVineGrape(Request $request, ManagerRegistry $doctrine): Response
    {
        $vineGrape = new Vine();
        $vineGrapeForm = $this->createForm(VineType::class, $vineGrape);
        $vineGrapeForm->handleRequest($request);

        if ($vineGrapeForm->isSubmitted())
        {
            $eManager = $doctrine->getManager();
            $eManager->persist($vineGrape);
            $eManager->flush();

            return $this->redirect($this->generateUrl('create-vine-grape'));
        }

        return $this->render('product_properties/create-vineGrape.html.twig', [
            'createVineGrape' => $vineGrapeForm->createView()
        ]);
    }
}
