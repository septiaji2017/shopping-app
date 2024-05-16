<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $products = [
        ['id' => 1, 'name' => 'Barang 1', 'harga' => '15000'],
        ['id' => 2, 'name' => 'Barang 2', 'harga' => '21000'],
        ['id' => 3, 'name' => 'Barang 3', 'harga' => '25000'],
        ['id' => 4, 'name' => 'Barang 4', 'harga' => '50000'],
        ['id' => 5, 'name' => 'Barang 5', 'harga' => '30000']
    ];

    public function index()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        return view('v_cart', ['cart' => $cart]);
    }

    public function add_to_cart($product_id)
    {
        $session = session();

        // Retrieve the current cart items from the session
        $cart = $session->get('cart') ?? [];

        // Find the product by ID
        $product = array_filter($this->products, function($product) use ($product_id) {
            return $product['id'] == $product_id;
        });

        if (!empty($product)) {
            $product = array_shift($product);

            // Check if the product already exists in the cart
            $found = false;
            foreach ($cart as &$item) {
                if ($item['id'] == $product_id) {
                    $item['quantity'] += 1;
                    $found = true;
                    break;
                }
            }

            // If the product does not exist in the cart, add it
            if (!$found) {
                $product['quantity'] = 1;
                $cart[] = $product;
            }

            // Store the updated cart back into the session
            $session->set('cart', $cart);
        }

        // Redirect to the cart page
        return redirect()->to('/cart');
    }

    public function home(): string
    {
        return view('v_landing', ['products' => $this->products]);
    }

    public function clear_cart()
    {
        $session = session();
        $session->remove('cart'); // Clear the cart data from the session
        return redirect()->to('/cart');
    }

    public function contact(): string
    {
        return view('pages/v_contact-us');
    }
    
    public function about(): string
    {
        return view('pages/v_about');
    }  
    
    public function gallery(): string
    {
        return view('pages/v_gallery');
    }      
    
    public function art(): string
    {
        return view('pages/v_art');
    }        

    public function music(): string
    {
        return view('pages/v_music');
    }       
    
    public function finance(): string
    {
        return view('pages/v_finance');
    }       
    
    public function architecture(): string
    {
        return view('pages/v_architecture');
    }           
}
