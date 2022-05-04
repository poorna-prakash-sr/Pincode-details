<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class PincodeController extends Controller
{
    public function index()
    {
        $post=Http::get("https://api.postalpincode.in/postoffice/all")->json();
        $check=$post[0]['Status']=="Success"?"1":"0";
        $postoffice=$post[0]['PostOffice'];
       
        return view('index',["post"=>$postoffice,"status"=>$check,"search"=>""]);
     //return $check;
        
    }

    public function search(Request $request)
    {
        $new=$request['q'];
        if(is_numeric($new))
        {
            $post=Http::get("https://api.postalpincode.in/pincode/$new")->json();
        }
        else{
            $post=Http::get("https://api.postalpincode.in/postoffice/$new")->json();

        }
        $check=$post[0]['Status']=="Success"?"1":"0";
        if($post[0]['Status']!="404")
        {
            $postoffice=$post[0]['PostOffice'];
            return view('index',["post"=>$postoffice,"status"=>$check,"search"=>$new]);
        }
       
       
        return view('index',["status"=>$check,"search"=>$new]);
       
     //return $check;
    }
}
