<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product, $image, $imageUrl, $directory, $imageName;


//    first way
    public static function uploadImage($request)
    {
        self::$image     = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName(); //get image name with extension
        self::$directory = 'admin/assets/images/uploaded-files/'; //create directory
        self::$image->move(self::$directory, self::$imageName); //move to project folder
        return self::$directory.self::$imageName; //product-images/image.jpg
    }


////second way
//    public static function uploadImage($request, $product = null)
//    {
//        self::$image = $request->file('image');
//        if (self::$image)
//        {
//            if ($product)
//            {
//                if (file_exists(self::$product->image))
//                {
//                    unlink(self::$product->image);
//                }
//            }
//
//            self::$imageName = self::$image->getClientOriginalName(); //get image name with extension
//            self::$directory = 'admin/assets/images/uploaded-files/'; //create directory
//            self::$image->move(self::$directory, self::$imageName); //move to project folder
//            return self::$directory . self::$imageName; //product-images/image.jpg
//        }
//    else
//        {
//            if ($product)
//            {
//                self::$imageUrl = $product->image;
//            }
//            else
//            {
//                self::$imageUrl = null;
//            }
//
//        }
//    }

    public static function createProduct($request)
    {

        self::$product = new Product();
        self::$product->category_id = $request->category_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        self::$product->image = self::uploadImage($request);
        self::$product->status = $request->status;
        self::$product->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

//
////second way
//    public static function updateProduct($request, $id)
//    {
//        self::$product = Product::find($id);
//
//        self::$product->category_id = $request->category_id;
//        self::$product->brand_id = $request->brand_id;
//        self::$product->name = $request->name;
//        self::$product->price = $request->price;
//        self::$product->description = $request->description;
//        self::$product->image = self::uploadImage($request, self::$product);
//        self::$product->status = $request->status;
//        self::$product->save();
//    }


    //first way
    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        self::$product->category_id = $request->category_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        self::$product->image = self::$imageUrl;
        self::$product->status = $request->status;
        self::$product->save();
    }

    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if (file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }
}
