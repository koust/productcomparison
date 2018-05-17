<?php namespace Project\Controllers;

    use Redirect,Method,DB;
class Brands extends Controller
{

    /**
     * The codes to run at startup.
     * It enters the circuit before all controllers. 
     * You can change this setting in Config/Starting.php file.
     */
    public function main(String $params = NULL)
    {
        
    

        Redirect::action('dashboard');

    }


    public function addBrand(){


        Login::checkSession();
        Theme::active('Admin');
        Masterpage::headPage('AdminSections/head')
                  ->bodyPage('Brands/addBrand/main');


        $brandName = Method::post('groupname');

        if(!empty($brandName)){

            $registerBrand = DB::duplicateCheck()->insert('brand',
            [
                'brandname' => $brandName
            ]);


            if($registerBrand){
                 View::success("Başarılı şekilde eklendi");
                    //Redirect::wait(2)->action('ProductList/Addproduct');
                }else{
                    View::error("Bir sorun oluştu");
            }

        }


    }


    public function updateBrand($productfeaturesid){

        Login::checkSession();
        Theme::active('Admin');
        Masterpage::headPage('AdminSections/head')
                  ->bodyPage('Brands/updateBrand/main');

        $brandData = Brands::getBrandRow($productfeaturesid);
        View::getGroupName($brandData->brandname);   


        $brandName = Method::post('groupname');


        if(!empty($brandName)){

            $updateProductFeaturesData = DB::where('brandid', $productfeaturesid)->update('brand',
            [
                'brandname' => $brandName
            ]);

            if($updateProductFeaturesData){
                View::success("Başarılı şekilde güncellendi");
                Redirect::action('Brands/list');
                }else{
                View::error("Bir sorun oluştu");
            }
        }

    }



    public static function deleteBrand($brandId){

        DB::where('brandid', $brandId)->delete('brand');
         Redirect::action('Brands/list');
    }


    public function list(){
        Login::checkSession();
        Theme::active('Admin');
        Masterpage::headPage('AdminSections/head')
                  ->bodyPage('Brands/list/main');

        $brandListData = Brands::getBrandsListData();
        View::getGroupList($brandListData);   
    }




    public function getBrandRow($brandId){

        $brandRow = DB::where('brandid',$brandId)->get('brand');

        return $brandRow->row();

    }


    public function getBrandsListData(){
         $brandsListData = DB::get('brand');

        return $brandsListData->resultArray();
    }

}