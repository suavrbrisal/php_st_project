<?php

class SiteController
{
    public function actionIndex()
    {
        $discountproducts = Index::getDiscountProducts();
        $newproducts = Index::getNewArrivals();
        $bestproducts = Index::getBestProducts();
        //var_dump($discountproducts);
        //die();
        ViewIndex::view($discountproducts,$newproducts,$bestproducts);              
    }
    
    public function actionError()
    {
        ViewIndex::error();
    }
    
    public function actionContact()
    {
        ViewIndex::contact();
    }

public function actionZakaz()
    {
        ViewIndex::zakaz();
    }
	
    
    public function actionCheckout()
    {
        $cartarray = Cart::getProductOfCart();
        //var_dump($arraypr);
        //die();
        ViewIndex::checkout($cartarray);
    }
    
    public function actionProducts()
    {
        ViewIndex::products();
    }
    
    public function actionSingle()
    {
        ViewIndex::single();
    }
    
    public function actionZakazinfo($data)
    {   var_dump($data);die;
        Cart::zakaz($data);
        return self::ReturnResult();
    } 
}
