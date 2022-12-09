<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    private static $brands, $brand;

    public static function createBrand($request)
    {
        self::$brands = new Brand();
        self::$brands->name = $request->name;
        self::$brands->status = $request->status;
        self::$brands->save();
    }
    public static function updateBrand($request, $id)
    {
        self::$brand = Brand::find($id);
        self::$brand->name = $request->name;
        self::$brand->status = $request->status;
        self::$brand->save();
    }
    public static function deleteBrand($id)
    {
        self::$brands = Brand::find($id);
        self::$brands->delete();
    }
}
