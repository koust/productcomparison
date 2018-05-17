<?php namespace Project\Controllers;

use DB,Import,Converter;

class Home extends Controller
{
    /**
     * Home::main
     * 
     * Loads opening page.
     * Location: Views/Home/main.wizard.php
     */
    public function main(String $params = NULL)
    {  
   
        # Sending data to the view page.
        //View::pageTitle('ZN')->pageSubtitle('"Simplicity is the ultimate sophistication" - Da Vinci');
    } 


    public function getProductList($groupId){
        Masterpage::headPage('Sections/head')
                  ->bodyPage('Home/getProductList');
          $data = [];
          foreach (Product::getProductList($groupId) as $key ) {
          $data2 = [];
            foreach (Product::getProductFeaturesList($key['productid']) as $list) {
                array_push($data2,  $list['featuresname']);
            }

            array_push($data,array(
                'productname' => $key['productname'],
                'productprice' => Converter::money($key['productprice'],'₺'),
                'productimage' => $key['productimage'] , 
                'featuresname' => $data2));
          }
          print_r($data);
          View::productList($data);
          View::featuresList(Product::getFeaturesName());
    }
    /**
     * Home::s404
     * 
     * Loads show 404 page.
     * Location: Views/Home/s404.wizard.php
     */
    public function s404()
    {
        # Sets masterpage title.
        Masterpage::title($title = '404');

        # Sending data to the view page.
        View::pageTitle($title)->pageSubtitle('The page you searched for was not found!');
    }
}