<?php
namespace App\Controller;

// ...
use App\Entity\Catalog;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class ProductController
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
        $category = new Catalog();
        $category->setName('Computer Peripherals');

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(19.99);
        $product->setDescription('Ergonomic and stylish!');

        // relates this product to the category
        $product->setCatalog($catalog);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->persist($product);
        $entityManager->flush();

        return new Response(
            'Saved new product with id: '.$product->getId()
            .' and new category with id: '.$category->getId()
        );
    }
}