<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public static $contents, $content;
    protected $fillable = [
        'title', 'sub_title', 'profile', 'thumbnail','video'
    ];

    private static $image, $profile, $thumbnail, $video, $profileName, $thumbnailName, $videoName, $profileUrl, $thumbnailUrl, $videoUrl, $imageUrl, $directory, $directory2, $directory3, $imageName;
//
//    public static function getImageUrl($request)
//    {
//        self::$image = $request->file('profile');
//        self::$imageName = self::$image->getClientOriginalName(); //get image name with extension
//        self::$directory = 'product-images/'; //create directory
//        self::$image->move(self::$directory, self::$imageName); //move to project folder
//        return self::$directory.self::$imageName; //product-images/image.jpg
//    }
    public static function getProfileUrl($request)
    {
        self::$profile = $request->file('profile');
        self::$profileName = self::$profile->getClientOriginalName(); //get image name with extension
        self::$directory = 'profile-images/'; //create directory
        self::$profile->move(self::$directory, self::$profileName); //move to project folder
        return self::$directory.self::$profileName; //product-images/image.jpg
    }

    public static function getThumbUrl($request)
    {
        self::$thumbnail = $request->file('thumbnail');
        self::$thumbnailName = self::$thumbnail->getClientOriginalName(); //get image name with extension
        self::$directory2 = 'thumbnail-images/'; //create directory
        self::$thumbnail->move(self::$directory2, self::$thumbnailName); //move to project folder
        return self::$directory2.self::$thumbnailName; //product-images/image.jpg
    }

    public static function getVideoUrl($request)
    {
        self::$video = $request->file('video');
        self::$videoName = self::$video->getClientOriginalName(); //get image name with extension
        self::$directory3 = 'video-images/'; //create directory
        self::$video->move(self::$directory3, self::$videoName); //move to project folder
        return self::$directory3.self::$videoName; //product-images/image.jpg
    }

    public static function addContent ($request)
    {
//        return $request->all();
        self::$contents = new Content();
        self::$contents->title        = $request->title;
        self::$contents->sub_title = $request->sub_title;
        self::$contents->profile       = self::getProfileUrl($request);
        self::$contents->thumbnail       = self::getThumbUrl($request);
        self::$contents->video       = self::getVideoUrl($request);
        self::$contents->save();
    }

    public static function updateContent($request, $id)
    {
        self::$content = Content::find($id);


            if ($request->file('profile')) {
                if (file_exists(self::$content->profile)) {
                    unlink(self::$content->profile);
                }
                self::$profileUrl = self::getProfileUrl($request);
            } else {
                self::$profileUrl = self::$content->profile;
            }



            if ($request->file('thumbnail'))
            {
                if (file_exists(self::$content->thumbnail))
                {
                    unlink(self::$content->thumbnail);
                }
                self::$thumbnailUrl = self::getThumbUrl($request);
            }
            else
            {
                self::$thumbnailUrl = self::$content->thumbnail;
            }



            if ($request->file('video'))
            {
                if (file_exists(self::$content->video))
                {
                    unlink(self::$content->video);
                }
                self::$videoUrl = self::getVideoUrl($request);
            }
            else
            {
                self::$videoUrl = self::$content->video;
            }



//        if ($request->file('profile') || $request->file('thumbnail') || $request->file('video'))
//        {
//            if (file_exists(self::$content->profile || self::$content->thumbnail || self::$content->video))
//            {
//                unlink(self::$content->profile || self::$content->thumbnail || self::$content->video);
//            }
//            self::$profileUrl = self::getProfileUrl($request);
//            self::$thumbnailUrl = self::getThumbUrl($request);
//            self::$videoUrl = self::getVideoUrl($request);
//        }
//        else
//        {
//            self::$profileUrl = self::$content->profile;
//            self::$thumbnailUrl = self::$content->thumbnail;
//            self::$videoUrl = self::$content->video;
//        }
        self::$content->title     = $request->title;
        self::$content->sub_title = $request->sub_title;
        self::$content->profile   = self::$profileUrl;
        self::$content->thumbnail = self::$thumbnailUrl;
        self::$content->video     = self::$videoUrl;
        self::$content->save();
    }

    public static function deleteContent($id)
    {
        self::$content = Content::find($id);
        if (file_exists(self::$content->profile || self::$content->thumbnail || self::$content->video))
        {
            unlink(self::$content->profile || self::$content->thumbnail || self::$content->video);
        }
        self::$content->delete();
    }
}
