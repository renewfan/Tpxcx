<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 2018/09/26
 * Time: 10:46
 */

namespace app\api\controller\v1;
use app\api\model\Category as CategoryModel;
use app\exception\CategoryException;

class Category
{
    public function getCategories(){
        $categories=CategoryModel::all([],'topicimg');
        if($categories->isEmpty()){
            throw new CategoryException();
        }
        return $categories;
    }
}