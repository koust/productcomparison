<?php namespace Project\Controllers;

    use Redirect,Method,DB;
class Features extends Controller
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


    public function addFeature(){


        Login::checkSession();
        Theme::active('Admin');
        Masterpage::headPage('AdminSections/head')
                  ->bodyPage('Features/Addgroup/main');


        $productfeaturesName = Method::post('groupname');

        if(!empty($productfeaturesName)){

            $registerGroup = DB::duplicateCheck()->insert('productfeatures',
            [
                'productfeatures' => $productfeaturesName
            ]);


            if($registerGroup){
                 View::success("Başarılı şekilde eklendi");
                    //Redirect::wait(2)->action('ProductList/Addproduct');
                }else{
                    View::error("Bir sorun oluştu");
            }

        }


    }


    public function updateFeature($productfeaturesid){

        Login::checkSession();
        Theme::active('Admin');
        Masterpage::headPage('AdminSections/head')
                  ->bodyPage('Features/updateGroup/main');

        $productfeaturesData = Features::getFeatureRow($productfeaturesid);
        View::getGroupName($productfeaturesData->productfeatures);   


        $productfeaturesName = Method::post('groupname');


        if(!empty($productfeaturesName)){

            $updateProductFeaturesData = DB::where('productfeaturesid', $productfeaturesid)->update('productfeatures',
            [
                'productfeatures' => $productfeaturesName
            ]);

            if($updateProductFeaturesData){
                View::success("Başarılı şekilde güncellendi");
                Redirect::action('Features/list');
                }else{
                View::error("Bir sorun oluştu");
            }
        }

    }



    public static function deleteFeature($groupId){

        DB::where('productfeaturesid', $groupId)->delete('productfeatures');
         Redirect::action('Features/list');
    }


    public function list(){
        Login::checkSession();
        Theme::active('Admin');
        Masterpage::headPage('AdminSections/head')
                  ->bodyPage('Features/list/main');

        $groupListData = Features::getFeaturesListData();
        View::getGroupList($groupListData);   
    }




    public function getFeatureRow($groupid){

        $getFeatureRow = DB::where('productfeaturesid',$groupid)->get('productfeatures');

        return $getFeatureRow->row();

    }


    public function getFeaturesListData(){
         $productfeaturesList = DB::get('productfeatures');

        return $productfeaturesList->resultArray();
    }

}