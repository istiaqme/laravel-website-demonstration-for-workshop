<?php

namespace App\Http\Controllers;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\StaticFile;
use App\Models\BlogPost;
use App\Models\Brand;
use App\Models\Client;
use App\Models\Product;
use App\Models\Service;
use App\Models\ServiceAndBrand;
use App\Models\SliderItem;
use App\Models\User;
use App\Models\Video;
use App\Models\Testimonial;
use App\Models\ContactFormAction;
use App\Models\Category;

class WebController extends Controller
{
    private $commonOrder = "position_key";
    private $orderType = "asc";

    public function homePage(Request $request){
        try{
            $brands = Brand::orderBy($this->commonOrder, $this->orderType)->limit(12)->get();
            $sliderItems = SliderItem::orderBy($this->commonOrder, $this->orderType)->get();
            $services = Service::orderBy($this->commonOrder, $this->orderType)->get();
            $videos = Video::orderBy($this->commonOrder, $this->orderType)->get();
            $news = BlogPost::orderBy($this->commonOrder, $this->orderType)->limit(4)->get();
            
            
            return view('index', [
                'brands' => $brands,
                'sliderItems' => $sliderItems,
                'services' => $services,
                'videos' => $videos,
                'news' => $news
            ]);
        }
        catch(\Exception $e){

        }
    }

    public function clientPage(Request $request){
        try{
            $clients = Client::orderBy($this->commonOrder, $this->orderType)->get();
            
            return view('clients', [
                'clients' => $clients
            ]);
        }
        catch(\Exception $e){

        }
    }

    public function newsPage(Request $request){
        try{
            $news = BlogPost::orderBy($this->commonOrder, $this->orderType)->get();
            
            return view('news', [
                'news' => $news
            ]);
        }
        catch(\Exception $e){

        }
    }

    public function newsDetailsPage(Request $request){
        try{
            $singleNews = BlogPost::where('slug', $request->slug)->firstOrFail();
            
            return view('newsDetails', [
                'singleNews' => $singleNews
            ]);
        }
        catch(\Exception $e){

        }
    }

    public function productsServicePage(Request $request){
        try{
            
            $singleService = Service::where('slug', $request->slug)->firstOrFail();
            $brands = ServiceAndBrand::where('service_id', $singleService->id)->orderBy($this->commonOrder, $this->orderType)->get();
            
            return view('serviceDetails', [
                'singleService' => $singleService,
                'brands' => $brands
            ]);
        }
        catch(\Exception $e){

        }
    }

    public function productsBrandPage(Request $request){
        try{
            
            $singleService = Service::where('slug', $request->serviceSlug)->firstOrFail();
            $singleBrand = Brand::where('slug', $request->brandSlug)->firstOrFail();
            $categories = Category::where('service_id', $singleService->id)->where('brand_id', $singleBrand->id)->orderBy($this->commonOrder, $this->orderType)->get();
            
            return view('brandDetails', [
                'singleService' => $singleService,
                'singleBrand' => $singleBrand,
                'categories' => $categories
            ]);
        }
        catch(\Exception $e){
            echo $e;
        }
    }

    public function productsCategoryPage(Request $request){
        try{
            
            $singleService = Service::where('slug', $request->serviceSlug)->firstOrFail();
            $singleBrand = Brand::where('slug', $request->brandSlug)->firstOrFail();
            $singleCategory = Category::where('slug', $request->categorySlug)->firstOrFail();
            $products = Product::where('service_id', $singleService->id)
                ->where('brand_id', $singleBrand->id)
                ->where('category_id', $singleCategory->id)
                ->orderBy($this->commonOrder, $this->orderType)
                ->get();
            
            return view('categoryDetails', [
                'singleService' => $singleService,
                'singleBrand' => $singleBrand,
                'singleCategory' => $singleCategory,
                'products' => $products
            ]);
        }
        catch(\Exception $e){
            echo $e;
        }
    }

    public function productsPage(Request $request){
        try{
            $products = Product::orderBy($this->commonOrder, $this->orderType)->get();
            
            return view('products', [
                'products' => $products
            ]);
        }
        catch(\Exception $e){

        }
    }


    public function contactFormAction(Request $request){
        try{
            $newRow = new ContactFormAction();
            $newRow->name = $request->name;
            $newRow->email = $request->email;
            $newRow->subject = $request->subject;
            $newRow->message = $request->message;
            $newRow->save();
            
            return redirect()->back()->with('success', "Dear $request->name, We have recieved your valuable response. We will knock back to you soon through email.");
        }
        catch(\Exception $e){

        }
    }



}
