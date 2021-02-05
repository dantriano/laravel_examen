<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{

    private $products;
    private $_filters;
    private $showBanner = false;
    private $product;

    public function __construct()
    {
        /**
         * Filters (name=>value) format to show in the view
         * Write the content of the stars
         */
        $this->_filters = (object)array(
            'category' => array('Categori1' => 'cat1', 'Categori2' => 'cat3', 'Categori3' => 'cat3'),
            'stars' => array()
        );

        $this->product = new Product();
    }
    /**
     * Method to list all the products
     */
    public function all()
    {
        $this->showBanner = true;
        $products=$this->product->all();
        return view('examenViews/products')->with('showBanner',$this->showBanner)->with('products',$products);
    }

    /**
     * Method to list the products filtered by category
     */
    public function category()
    {
    }

    /**
     * Method to list the products filtered by stars
     */
    public function stars()
    {
    }
}
