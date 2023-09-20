<?php

namespace App\Traits;

trait FileInfo
{

    /*
    |--------------------------------------------------------------------------
    | File Information
    |--------------------------------------------------------------------------
    |
    | This trait basically contain the path of files and size of images.
    | All information are stored as an array. Developer will be able to access
    | this info as method and property using FileManager class.
    |
    */

    public function fileInfo(){
		$data['gateway'] = [
            'path'       => 'public/assets/images/gateway',
            'size'       => '800x800',
        ];
        $data['withdrawVerify'] = [
            'path'=>'public/assets/images/verify/withdraw'
        ];
        $data['depositVerify'] = [
            'path'      =>'public/assets/images/verify/deposit'
        ];
        $data['verify'] = [
            'path'      =>'public/assets/verify'
        ];
        $data['default'] = [
            'path'      => 'public/assets/images/default.png',
        ];
        $data['withdrawMethod'] = [
            'path'      => 'public/assets/images/withdraw/method',
            'size'      => '800x800',
        ];
        $data['ticket'] = [
            'path'      => 'public/assets/support',
        ];
        $data['language'] = [
            'path'      => 'public/assets/images/lang',
            'size'      => '64x64',
        ];
        $data['logoIcon'] = [
            'path'      => 'public/assets/images/logoIcon',
        ];
        $data['favicon'] = [
            'size'      => '128x128',
        ];
        $data['extensions'] = [
            'path'      => 'public/assets/images/extensions',
            'size'      => '36x36',
        ];
        $data['seo'] = [
            'path'      => 'public/assets/images/seo',
            'size'      => '1180x600',
        ];
        $data['userProfile'] = [
            'path'      =>'public/assets/images/user/profile',
            'size'      =>'350x300',
        ];
        $data['adminProfile'] = [
            'path'      =>'public/assets/viser_admin/images/profile',
            'size'      =>'400x400',
        ];
        $data['receptionistProfile'] = [
            'path'      =>'public/assets/viser_admin/images/profile',
            'size'      =>'400x400',
        ];
        $data['roomTypeImage'] = [
            'path'      =>'public/assets/images/roomType',
            'size'      =>'1000x500',
        ];
        return $data;
	}

}
