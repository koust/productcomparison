<?php namespace Project\Controllers;

use DB,Import;

class Product extends Controller
{
    /**
     * Home::main
     * 
     * Loads opening page.
     * Location: Views/Home/main.wizard.php
     */
    public function main(String $params = NULL)
    {  
        Import::view('home');
      
        # Sending data to the view page.
        //View::pageTitle('ZN')->pageSubtitle('"Simplicity is the ultimate sophistication" - Da Vinci');
    } 


    public static function getProductList($groupId)
    {

        $group = DB::where('product.groupId',$groupId)->get('product');

        //output($group->result());
      return $group->resultArray();
    }


    public static function getProductFeaturesList($productId)
    {
        $group = DB::orderBy('isproductfeatures.productfeaturesid', 'ASC')->innerJoin('productfeatures.productfeaturesid','isproductfeatures.productfeaturesid')->where('isproductfeatures.productid',$productId)->get('isproductfeatures');

       return $group->resultArray();
   
    }

    public static function getFeaturesName()
    {
        $featuresName = DB::get('productfeatures');

         return $featuresName->resultArray();
    }


    public static function getGroupList(){
          $featuresName = DB::get('groupname');

         return $featuresName->resultArray();
    }

    public function addGroupName($groupName)
    {


        DB::insert('groupname',
        [

            'groupname' => $groupName
        ]);

        //$brand = DB::get('brand');

    }

    public function addBrandName($brandName)
    {
        DB::duplicateCheck()->insert('brand',
        [

            'brandname' => $brandName
        ]);

        $brand = DB::get('brand');

        output($brand->result());

    }
}