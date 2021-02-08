<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CompraController extends Controller
{

    public function main()
    {
        /*Recuerda el estado de la compra y redirige a la pantalla en la que el usuario estaba antes: resumen, envio o confirmar */
        return redirect('/compra/resumen');
    }
    /**
     * Method to show the resume of the products in the chart
     */
    public function resumen()
    {
        //Dummy: hay que cambiar la info por la información guardada en el carrito (session)
        $products = [
            (object) [
                'name' => 'Lego 1', 'category' => 0, 'description' => 'Esto es la descripcion lego 1', 'price' => 10.02, 'image' => 'lego1.jpeg', 'rating' => 2
            ]
        ];
        return view('compra/resumen')
            ->with('products', $products);
    }

    /**
     * Method to show and process the shipping form (envio)
     */
    public function envio()
    {
        return view('compra/envio');
    }
    /**
     * Method to show and process the shipping form (envio)
     */
    public function verificarEnvio(Request $request)
    {
        $formOK = false;

        /* PONER AQUI TODO LO NECESARIO PARA VERIFICAR EL FORMULARIO */


        /*Una vez verificado se guarda la información de envio en la session*/

        //si el formulario se ha rellenado correctamente se redirecciona a la pagina de confirmación
        if ($formOK) redirect('/compra/confirmar');
        return view('compra/envio');
    }
    /**
     * Method to show the list of procuts and shipping info
     */
    public function confirmar()
    {
        //Dummy: hay que cambiar la info por la información guardada en session
        $products = [
            (object) [
                'name' => 'Lego 1', 'category' => 0, 'description' => 'Esto es la descripcion lego 1', 'price' => 10.02, 'image' => 'lego1.jpeg', 'rating' => 2
            ]
        ];
        //Dummy: hay que cambiar la info por la información guardada en session
        $shipping =   (object)[
            'name' => 'Pedro', 
            'mail' => 'asds|@asda.es',
            'address' => 'asds|@asda.es',
            'image' => 'lego1.jpeg',
        ];
        return view('compra/confirmar')->with('products', $products)->with('shipping', $shipping);
    }
}
