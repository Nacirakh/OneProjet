<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Session;
use Stripe\Charge;
use Stripe\Stripe;
use App\Item;
use App\Cart;
use Auth;
use DB;
use App\User;
use App\Table_item;
use App\Commande;
use App\Freecommande;
use App\Commande_item;
use App\Reserve;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
    {
        return view('home');
    }

public function Inde()
    {
        return view('shop.index');
    }
// page admin ************************************************
public function profill()
    {
        return view('profil');
    }


public function control()
    {
        if (Auth::user()->role == 3){
          return redirect('/');
    }
    $users = DB::table('users')->get();
        return view('control',compact('users'));
    }

public function itemA(){
       
    $items=Item::all();
     $ar=Array('items'=>$items);
     return view('itemA',$ar);

   
}

public function TableA(){
       
    $table_items=Table_item::all();
     $ar=Array('table_items'=>$table_items);
     return view('tableA',$ar);
}

public function FreeCommandeA(){
     /*  
    $freecommandes=Freecommande::all();
     $ar=Array('freecommandes'=>$freecommandes);*/

      $freecommandes = DB::table('freecommandes')
            ->join('users', 'users.id', '=', 'freecommandes.user_id')
            ->select('users.name','users.email','date_resf','article','freecommandes.id')
            ->get();

     return view('FreecommandeA',['freecommandes' =>$freecommandes]);
}

public function CommandeAd(){
       
     $commandes = DB::table('commandes')
            ->join('users', 'users.id', '=', 'commandes.user_id')
            ->join('items', 'items.id', '=', 'commandes.item_id')
            ->join('commande_items', 'commande_items.commande_id', '=', 'commandes.id')
            ->join('commande_tables', 'commande_tables.commande_id', '=', 'commandes.id')
            ->select('users.name','items.namei','commande_items.qty','commande_items.prix_total_i','commande_tables.qtyt','date_res','commandes.id')
            ->get();


    

            return view('test',['commandes' =>$commandes]);
}


public function AddUser(Request $req){
         if($req->isMethod('post')){
             $arr=new User();
            $arr->email=$req->input('email');
            $arr->name=$req->input('name');
            $arr->password=bcrypt($req->input('password'));

            $arr->remember_token=bcrypt($req->input('password_confirmation'));
            $arr->role=3;

        

            $arr->save();


               return redirect('control');

}
        
        return view('AddUser');
    }
   


public function AddItem(Request $req){
         if($req->isMethod('post')){
             $arr=new Item();
            $arr->namei=$req->input('namei');
            $arr->price=$req->input('price');

            $arr->image=$req->input('image');
            $arr->description=$req->input('description');

    
            $arr->save();


               return redirect('itemA');

}
        
        return view('AddItem');
    }
    public function AddTable(Request $req){
         if($req->isMethod('post')){
             $arr=new Table_item();
            $arr->etat=1;
            $arr->save();
               return redirect('tableA');

}
        
        return view('AddTable');
    }



public function Itemdelete($id){
         
            $ar= Item::find($id);
            $ar->delete();
            return redirect('itemA');
    }


public function   Userdelete($id){
         
            $ar= User::find($id);
            $ar->delete();
            return redirect('control');
    }

public function   Tabledelete($id){
         
            $ar= Table_item::find($id);
            $ar->delete();
            return redirect('tableA');
    }

public function   Commandedelete($id){
         
            $ar= Commande::find($id);
            $ar->delete();
            return redirect('test');
    }

public function   Freecommandedelete($id){
         
            $ar= Freecommande::find($id);
            $ar->delete();
            return redirect('FreecommandeA');
    }




public function   updateRole(Request $req,User $id){
        
            $id->update($req->all());
            return redirect('control');
    }



public function   updateEtat(Request $req,Table_item $id){
        
            $id->update($req->all());
            return redirect('tableA');
    }




public function   EditUser(Request $req,$id){

 
        if($req->isMethod('post'))
        {
                $newuser=User::find($id);
             $newuser->email=$req->input('email');
            $newuser->name=$req->input('name');

            $newuser->save();


            return redirect('/control');
        }else{

            $user=User::find($id);
            $arr=Array('user' => $user);
}


     return view('edituser',$arr);

         
    }


public function   EditItem(Request $req,$id){

 
        if($req->isMethod('post'))
        {
             
              $arr=Item::find($id);
            $arr->namei=$req->input('namei');
            $arr->price=$req->input('price');
            $arr->image=$req->input('image');
            $arr->description=$req->input('description');
            $arr->save();


               return redirect('itemA');
        }else{

            $item=Item::find($id);
            $arr=Array('item' => $item);
}


     return view('edititem',$arr);

         
    }


//**************************************************************************fin admin



//***************************************************************************client

     public function view(){

     return view('manage.view');
}

public function profil(){
       
    /* $clients=User::all();
     $ar=Array('users'=>$users);*/
     return view('manage.profil');
}

public function Info(){
       

     return view('info');
}



public function ligne(){
       

     return view('manage.ligne');
}

public function CommandeLibre(Request $req){
       
if($req->isMethod('post')){
             
         $arr=new Freecommande();
            $arr->article=$req->input('plat');
            $arr->date_resf=$req->input('date');

    
            $arr->save();

return redirect('manage.commandelibre');
            
}
     return view('manage.CommandeLibre');
}



public function item(){
       
   $items=Item::all();
     $ar=Array('items'=>$items);
     return view('manage.item',$ar);
}
public function iteme(){
   
     return view('manage.iteme');
}
public function getAddToCart(Request $req,$id){
       
   $item=Item::find($id);
   $oldCart = Session::has('cart')? Session::get('cart') : null;
   $cart = new Cart($oldCart);
   $cart->add($item,$item->id);
    $req->session()->put('cart',$cart);
    /*dd($req->session()->get('cart'));*/
    return redirect('item');
}
public function getCart(){
    if(!Session::has('cart')){
        return view('manage.shopping-cart',['items' => null]);
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    return view('manage.shopping-cart',['items' => $cart->items,'totalPrice' =>$cart->totalPrice]);
}

public function getCheckout(){
if(!Session::has('cart')){
    return view('manage.shopping-cart');
}

$oldCart = Session::get('cart');
$cart = new Cart($oldCart);
$total = $cart->totalPrice;
return view('manage.checkout',['total' => $total]);
}

public function postCheckout(Request $request)
{
    if(!Session::has('cart')){
    return view('manage.shopping-cart');
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    Stripe::setApikey('sk_test_mpYXvuDT4Jv56Tv3759cyqwQ');
    try{
       $charge = Charge::create(array(
            "amount" => $cart->totalPrice * 100,
            "currency" => "usd",
            "source" => $request->input('stripeToken'),
            "description" => "Test Charge"
            ));
            
        $reserve = new Reserve();
        $reserve->cart = serialize($cart);
        $reserve->address = $request->input('address');
        $reserve->name = $request->input('name');
        
        $reserve->payment_id = $charge->id;

        Auth::user()->reserves()->save($reserve);
    }catch (\Exception $e){
        return redirect()->route('manage.checkout')->with('error',$e->getMessage());
    }
    Session::forget('cart');
    return redirect()->route('manage.item')->with('success','Successfully purchased products !');
}

public function Afficher(){
       $reserves = Auth::user()->reserves;
       $reserves->transform(function($res,$key){
$res->cart = unserialize($res->cart);
return $res;

       });
  // dd($reserves); 

     return view('manage.myreserve',['reserves' => $reserves]);
}
public function Aff(){
       
   
     return view('manage.aff');
}

public function Table(){
       
      $table_items=Table_item::all();
     $ar=Array('table_items'=>$table_items);
     return view('manage.table',$ar);

}

public function Commande(){
       
   
     return view('manage.commande');
}

public function   Panier($id){
              /*    if($ar= Item::find($id)) { 
 $arr=new Commande_item();
           $arr->item_id=$ar->id;
                $arr->save();
            }*/


            return redirect('item');
    }


public function Add_Item(){

     $commande_items = DB::table('commande_items')
            ->join('items', 'items.id', '=', 'commande_items.item_id')
            ->select('items.namei','items.price','commande_items.id')
            ->get();
     
return view('manage.Add_item',['commande_items' =>$commande_items]);
}
 public function Ajouter_qty(Request $req){
         if($req->isMethod('post')){
             $arr=new Commande_item();
                  $arr->qty=$req->input('qty');
     $arr->save();
               return redirect('manage.Add_item');

}
        
        return view('manage.Add_item');
    }



public function Checkout(Request $req){

    return $req->all();
}


//******************************************************************************fin client








}
