<?php

namespace App\Http\Controllers;
use Exception;
use Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\StaticFile;
use App\Models\BlogPost;
use App\Models\Brand;
use App\Models\Client;
use App\Models\Product;
use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceAndBrand;
use App\Models\SliderItem;
use App\Models\User;
use App\Models\Video;
use App\Models\Testimonial;
use App\Models\ContactFormAction;

class AdminController extends Controller
{
    private $commonOrder = "id";
    private $orderType = "desc";


    public function uploadFile($request) {
        if(!$request->hasFile('file')){
            throw new Exception("Please Select A File");
        }
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('assets/images/uploads', $filename);
        $newFile = new StaticFile();
        $newFile->filename = $filename;
        $newFile->save();
        return $filename;

    }


    public function loginView()
    {
        return view('admin.login');
    }

    public function loginProcess(Request $request)
    {
        try{
            $user = User::where('email', $request->email)->firstOrFail();
            if(Hash::check($request->password, $user->password)){

                $request->session()->put('isLoggedIn', true);
                $request->session()->put('email', $user->email);
                $request->session()->put('name', $user->name);
                return redirect('/ixony/services/view');
            }else{
                return redirect()->back()->with('error', 'Password Mismatched.');
            }
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    public function logoutProcess(Request $request)
    {
        try{
            $request->session()->forget(['isLoggedIn', 'email', 'name']);
            return redirect('/ixony/login');
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    /* Users */
    public function adminUserView(Request $request){
        $list = User::orderBy($this->commonOrder, $this->orderType)->get();
        return view('admin.users', ['list' => $list]);
    }

    public function adminUserCreate(Request $request){
        try {
            $newRow = new User();
            $newRow->name = $request->name;
            $newRow->email = $request->email;
            $newRow->password = hash::make($request->password);
            $newRow->save();
            return redirect()->back()->with('success', "A new User is Added.");
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    public function adminUserDelete(Request $request){
        User::where('id', $request->id)->delete();
        return redirect()->back()->with('success', "Successfully Deleted.");
    }
    /* Users */

    
    
    
    

    /* Brands */
    public function adminBrandView(Request $request){
        $list = Brand::orderBy($this->commonOrder, $this->orderType)->get();
        return view('admin.brands', ['list' => $list]);
    }

    public function adminBrandCreate(Request $request){
        try {
            $uploadedFile = $this->uploadFile($request);
            $newRow = new Brand();
            $newRow->slug = Str::slug($request->title , '-');
            $newRow->title = $request->title;
            $newRow->details = $request->details;
            $newRow->outer_link = $request->link;
            $newRow->image = $uploadedFile;
            $newRow->save();
            $newRow->position_key = $newRow->id;
            $newRow->save();
            return redirect()->back()->with('success', "A new Brand is Added.");
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    public function adminBrandDelete(Request $request){
        Brand::where('id', $request->id)->delete();
        return redirect()->back()->with('success', "Successfully Deleted.");
    }
    /* Brands */

    /* Clients */
    public function adminClientView(Request $request){
        $list = Client::orderBy($this->commonOrder, $this->orderType)->get();
        return view('admin.clients', ['list' => $list]);
    }

    public function adminClientCreate(Request $request){
        try {
            $uploadedFile = $this->uploadFile($request);
            $newRow = new Client();
            $newRow->slug = Str::slug($request->title , '-');
            $newRow->title = $request->title;
            $newRow->details = $request->details;
            $newRow->outer_link = $request->link;
            $newRow->image = $uploadedFile;
            $newRow->save();
            $newRow->position_key = $newRow->id;
            $newRow->save();
            return redirect()->back()->with('success', "A new Client is Added.");
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    /* Clients */

    /* Services */
    public function adminServiceView(Request $request){
        $list = Service::orderBy($this->commonOrder, $this->orderType)->get();
        return view('admin.services', ['list' => $list]);
    }

    public function adminServiceCreate(Request $request){
        try {
            $uploadedFile = $this->uploadFile($request);
            $newRow = new Service();
            $newRow->slug = Str::slug($request->title , '-');
            $newRow->title = $request->title;
            $newRow->details = $request->details;
            $newRow->outer_link = $request->link;
            $newRow->image = $uploadedFile;
            $newRow->save();
            $newRow->position_key = $newRow->id;
            $newRow->save();
            return redirect()->back()->with('success', "A new Service is Added.");
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    public function adminServiceWithBrandView(Request $request){
        $row = Service::where('id', $request->id)->firstOrFail();
        $withList = Brand::orderBy('title', 'asc')->get();
        $list = ServiceAndBrand::orderBy($this->commonOrder, $this->orderType)->get();
        return view('admin.servicesWithBrands', [
            'row' => $row, 
            'withList' => $withList,
            'list' => $list
        ]);
    }

    public function adminServiceWithBrandCreate(Request $request){
        try {
            $newRow = new ServiceAndBrand();
            $newRow->service_id = $request->with;
            $newRow->brand_id = $request->selected;
            $newRow->save();
            $newRow->position_key = $newRow->id;
            $newRow->save();
            return redirect()->back()->with('success', "Related.");
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    /* Services */


    /* Categories */
    public function adminCategoryView(Request $request){
        $serviceWithBrands = ServiceAndBrand::orderBy('brand_id', 'asc')->get();
        $list = Category::orderBy($this->commonOrder, $this->orderType)->get();
        return view('admin.categories', [
            'serviceWithBrands' => $serviceWithBrands,
            'list' => $list
        ]);
    }

    public function adminCategoryCreate(Request $request){
        try {
            $serviceWithBrands = ServiceAndBrand::where('id', $request->selected)->firstOrFail();
            $newRow = new Category();
            $newRow->slug = Str::slug($request->title , '-');
            $newRow->title = $request->title;
            $newRow->service_id = $serviceWithBrands->service_id;
            $newRow->brand_id = $serviceWithBrands->brand_id;
            $newRow->save();
            $newRow->position_key = $newRow->id;
            $newRow->save();
            return redirect()->back()->with('success', "A new Category is Added.");
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    /* Categories */



    /* Products */
    public function adminProductView(Request $request){
        $serviceWithBrand = Category::where('id', $request->id)->firstOrFail(); 
        //dd($serviceWithBrand);
        $list = Product::where('service_id', $serviceWithBrand->service->id)
            ->where('brand_id', $serviceWithBrand->brand->id)
            ->where('category_id', $serviceWithBrand->id)
            ->orderBy($this->commonOrder, $this->orderType)->get();
        return view('admin.products', [
            'serviceWithBrand' => $serviceWithBrand,
            'list' => $list
        ]);
    }

    public function adminProductCreate(Request $request){
        try {
            $uploadedFile = $this->uploadFile($request);
            $newRow = new Product();
            $newRow->slug = Str::slug($request->title , '-');
            $newRow->title = $request->title;
            $newRow->details = $request->details;
            $newRow->outer_link = $request->link;
            $newRow->service_id = $request->service_id;
            $newRow->brand_id = $request->brand_id;
            $newRow->category_id = $request->category_id;
            $newRow->image = $uploadedFile;
            $newRow->save();
            $newRow->position_key = $newRow->id;
            $newRow->save();
            return redirect()->back()->with('success', "A new Product is Added.");
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    /* Products */


    /* Videos */
    public function adminVideoView(Request $request){
        $list = Video::orderBy($this->commonOrder, $this->orderType)->get();
        return view('admin.videos', ['list' => $list]);
    }

    public function adminVideoCreate(Request $request){
        try {
            $newRow = new Video();
            $newRow->title = $request->title;
            $newRow->link = $request->link;
            $newRow->save();
            $newRow->position_key = $newRow->id;
            $newRow->save();
            return redirect()->back()->with('success', "A new Video is Added.");
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    /* Videos */

    /* Slider */
    public function adminSliderView(Request $request){
        $list = SliderItem::orderBy($this->commonOrder, $this->orderType)->get();
        return view('admin.slider', ['list' => $list]);
    }

    public function adminSliderCreate(Request $request){
        try {
            $uploadedFile = $this->uploadFile($request);
            $newRow = new SliderItem();
            $newRow->image = $uploadedFile;
            $newRow->save();
            $newRow->position_key = $newRow->id;
            $newRow->save();
            return redirect()->back()->with('success', "A new Slider Item is Added.");
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    /* Slider */


    /* Testimonials */
    public function adminTestimonialView(Request $request){
        $list = Testimonial::orderBy($this->commonOrder, $this->orderType)->get();
        return view('admin.testimonials', ['list' => $list]);
    }

    public function adminTestimonialCreate(Request $request){
        try {
            $newRow = new Testimonial();
            $newRow->testimonial = $request->testimonial;
            $newRow->name = $request->name;
            $newRow->details = $request->details;
            $newRow->save();
            $newRow->position_key = $newRow->id;
            $newRow->save();
            return redirect()->back()->with('success', "A new Testimonial is Added.");
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    /* Testimonials */

    /* News */
    public function adminNewsView(Request $request){
        $list = BlogPost::orderBy($this->commonOrder, $this->orderType)->get();
        return view('admin.news', ['list' => $list]);
    }

    public function adminNewsCreate(Request $request){
        try {
            $uploadedFile = $this->uploadFile($request);
            $newRow = new BlogPost();
            $newRow->slug = Str::slug($request->title , '-');
            $newRow->title = $request->title;
            $newRow->details = $request->details;
            $newRow->image = $uploadedFile;
            $newRow->save();
            $newRow->position_key = $newRow->id;
            $newRow->save();
            return redirect()->back()->with('success', "A new News is Added.");
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    /* News */


    /* Contact */
    public function adminContactMessagesView(Request $request)
    {
        $list = ContactFormAction::orderBy('id', 'desc')->get();
        return view('admin.contactMessages', ['list' => $list]);
    }
    /* Contact */







    public function testformAction(Request $request){
        $this->uploadFile($request);

        return redirect()->back()->with('success', "Done");
        
    }
}
