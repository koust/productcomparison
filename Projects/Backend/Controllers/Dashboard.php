<?php namespace Project\Controllers;

use DB,Converter;

class Dashboard extends Controller
{
    /**
     * The codes to run at startup.
     * It enters the circuit before all controllers. 
     * You can change this setting in Config/Starting.php file.
     */
    public function main(String $params = NULL)
    {
        Login::checkSession();

        Theme::active('Admin');
        
        # The current settings are being configured.
        Masterpage::headPage('AdminSections/head')
                  ->bodyPage('Dashboard/main');



        View::totalProducts(DB::get('product')->totalRows()); 
        View::totalBrands(DB::get('brand')->totalRows());    
        View::totalGroups(DB::get('groupname')->totalRows()); 

        View::getGroupList(Group::getGroupListData());   
        View::groupList(ProductList::plistData());                         
    }



}