<?php

namespace App\Http\Controllers;

use App\Article;
use App\Company;
use App\Product;
use App\Size;
use Illuminate\Http\Request;
use Session;

class UsaController extends Controller
{
    public function companyview()
    {
    	return view('addcompany');
    }

    public function storecompany(Request $request)
    {
    	$company = new Company;
    	$company->company = $request->company;
    	$company->save();
    	return redirect('/addcompany')->with('company','Company Added Successfully');
    }

    public function sizeview()
    {
    	$companies = Company::all();
        Session::flash('success','Company Added Successfully.');
    	return view('addsize', compact('companies'));
    }

    public function storesize(Request $request)
    {
    	$size = new Size;
    	$size->company_id = $request->company_id;
    	$size->size = $request->size;
    	$size->save();
    	return redirect('/addsize')->with('size','Size Added Successfully');
    }

    public function articleview()
    {
    	$companies = Company::all();
    	$sizes = Size::all();
    	return view('/addarticle', compact('companies','sizes'));
    }

    public function storearticle(Request $request)
    {
    	$artical = new Article;
    	$artical->company_id = $request->company_id;
    	$artical->size_id = $request->size_id;
    	$artical->artical = $request->artical;
    	$artical->save();
    	return redirect('addarticle')->with('artical','Article Added Successfully');
    }

    public function productview()
    {
    	$companies = Company::all();
    	$sizes = Size::all();
    	$articals = Article::all();
    	return view('/addproduct', compact('companies','sizes','articals'));
    }

    public function storeproduct(Request $request)
    {
    	$product = new Product;
    	$product->company_id = $request->company_id;
    	$product->size_id = $request->size_id;
    	$product->article_id = $request->article_id;
    	$product->product = $request->product;
    	$product->pprice = $request->pprice;
    	$product->sprice = $request->sprice;
    	$product->quantity = $request->quantity;
    	$product->save();
    	return redirect('addproduct')->with('product','Product Added Successfully');
    }

    public function allcompany()
    {
        $companie = Company::all();
        return view('allcompany',compact('companie'));
    }

    public function companydelete($id)
    {
        $company = Company::find($id)->delete();
        return redirect('/allcompany')->with('comstatus','Company Delete Successfully');
    }

    public function allsize()
    {
        $sizes = Size::all();
        // dd($sizes->companysize);
        return view('/allsize',compact('sizes'));
    }

    public function allsizedelete($id)
    {
        Size::find($id)->delete();
        return redirect()->back()->with('sizedel','Size Delete Successfully');
    }

    public function allarticle()
    {
        $articles = Article::all();
        // dd($articles->sizes);
        return view('/allarticle',compact('articles'));
    }

    public function allarticledelete($id)
    {
        Article::find($id)->delete();
        return redirect()->back()->with('articledel','Article Delete Successfully');
    }
}
