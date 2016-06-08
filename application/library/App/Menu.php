<?php

class App_Menu
{

    private static $_menu = array(
        array(
            'text' => '百度',
            'link' => '/blog/blog/index',
            'children' => array(
                array(
                    'text' => '爱奇艺',
                    'link' => '/blog/blog/index',
                ),
                array(
                    'text' => '百度钱包',
                    'link' => '/blog/blog/index',
                ),
                array(
                    'text' => '百度金融',
                    'link' => '/blog/blog/index',
                ),
                array(
                    'text' => '余额宝',
                    'link' => '/blog/blog/index',
                ),
            ),
        ),
        array(
            'text' => '阿里巴巴',
            'link' => '/blog/blog/index',
        ),
        array(
            'text' => '腾讯',
            'link' => '/blog/blog/index',
        ),
    );

    public static function getMenu()
    {
        return self::$_menu;
    }

}
