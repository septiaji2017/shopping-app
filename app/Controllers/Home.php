<?php

namespace App\Controllers;
use App\Models\m_barang;

class Home extends BaseController
{
    private $products = [
        ['id' => 1, 'name' => 'Barang 1', 'harga' => '15000', 'photo' => 'product1.png'],
        ['id' => 2, 'name' => 'Barang 2', 'harga' => '21000', 'photo' => 'product2.jpg'],
        ['id' => 3, 'name' => 'Barang 3', 'harga' => '25000', 'photo' => 'product3.png'],
        ['id' => 4, 'name' => 'Barang 4', 'harga' => '50000', 'photo' => 'product1.png'],
        ['id' => 5, 'name' => 'Barang 5', 'harga' => '30000', 'photo' => 'product2.jpg']
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
        
    
        // Load model
        $barangModel = new m_barang();
    
        // Find the product by ID
        $product = $barangModel->find($product_id);
    
        if (!empty($product)) {
            // Check if the product already exists in the cart
            $found = false;
            foreach ($cart as &$item) {
                if ($item['id_barang'] == $product['id_barang']) {
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
       
        $barangModel = new m_barang();

        // Ambil data barang dari database
        $barang = $barangModel->findAll();
        
        return view('v_landing', ['products' => $barang]);
    }

    public function clear_cart()
    {
        $session = session();
        $session->remove('cart'); // Clear the cart data from the session
        return redirect()->to('/cart');
    }

    public function update_quantity()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
    
        $index = $this->request->getPost('index');
        $change = (int) $this->request->getPost('change');
    
        if (isset($cart[$index])) {
            // Update the quantity
            $cart[$index]['quantity'] += $change;
            if ($cart[$index]['quantity'] < 1) {
                // Remove item if quantity is less than 1
                unset($cart[$index]);
            }
            // Store the updated cart back into the session
            $session->set('cart', $cart);
        }
    
        return redirect()->to('/cart');
    }
    

    public function delete_item()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
    
        $index = $this->request->getPost('index');
    
        if (isset($cart[$index])) {
            // Remove the item from the cart
            unset($cart[$index]);
            // Store the updated cart back into the session
            $session->set('cart', $cart);
        }
    
        return redirect()->to('/cart');
    }
    

    public function form(): string
    {
        return view('v_form.php');
    }
            
}
