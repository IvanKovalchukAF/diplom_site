<?php

namespace App\Http\Controllers;

use App\GoodsImages;
use App\Categories;
use App\Goods;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getImagesByProductId($id) {
        return GoodsImages::where('product_id', $id)->get();
    }
    public function categoryAction($id) {
        $images = $this->getImagesByProductId($id);
        $category = Categories::find($id);
        if($category) {
            $goods = Goods::where('category_id', $category->id)->get();
            return view('goods', ['goods' => $goods, 'images' => $images]);
        }
    }
}
