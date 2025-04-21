<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    protected $product;
    public function __construct(){
        $this->product = new Product();
        
    }
    public function index()
    {
        return $this->product->all();
     
    }
    
    public function store(Request $request)
    {
     return $this->product->create($request->all());
    
       
    }
  
    public function show(string $id)
    {
      return $product = $this->product->find($id);  
    }
    public function update(Request $request, string $id)
    {
         $product = $this->product->find($id);
         $product->update($request->all());
         return $product;
    }
    public function destroy(string $id)
    {
     $product = $this->product->find($id);
    return $product->delete();   
    }
}