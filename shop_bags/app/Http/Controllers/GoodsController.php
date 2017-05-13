<?php
namespace App\Http\Controllers;

use App\Goods;
use App\GoodsImages;
use Drupal\Core\Render\Element\Form;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function getImagesByProductId($id) {
        return GoodsImages::where('product_id', $id)->get();
    }

    public function showAction($id) {
        $images = $this->getImagesByProductId($id);
        $product = Goods::find($id);
        if($product) {
            return view('product', ['good' => $product, 'images' => $images]);
        }
    }
}