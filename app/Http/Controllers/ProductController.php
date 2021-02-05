<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{    
   
    private $products;
    private $_filters;
    private $showBanner=false;

    public function __construct()
    {
        /**
         * Filters (name=>value) format to show in the view
         * Write the content of the stars
         */
        $this->_filters=(object)array(
            'category'=>array('Categori1'=>'cat1','Categori2'=>'cat3','Categori3'=>'cat3'),
            'stars'=>array()
        );
    }
    /**
     * Method to list all the products
     */
    public function all()
    {   
        $this->showBanner=true;
        return view('examenViews/products');
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