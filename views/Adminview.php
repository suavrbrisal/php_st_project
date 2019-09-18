<?php

class AdminView {
    public static function EterForm()
    {
        $smarty=new Smarty();
        $smarty->left_delimiter = '<!--{';
        $smarty->right_delimiter = '}-->';
        $smarty->setTemplateDir('templates\admin');
        $smarty->display("formenter.html");
    }
    
    public static function SectionAdmin()
    {
        $smarty=new Smarty();
        $smarty->left_delimiter = '<!--{';
        $smarty->right_delimiter = '}-->';
        $smarty->display("admin\sectionadmin.html");
    }
}