<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Cliente;
use App\Customer;
use App\Jornal;
use App\Materia;
use App\Provider;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    private $customer;
    private $provider;
    /**
     * @var Cliente
     */
    private $cliente;
    /**
     * @var Categoria
     */
    private $categoria;
    /**
     * @var Jornal
     */
    private $jornal;
    /**
     * @var Materia
     */
    private $materia;

    /**
     * ContactsController constructor.
     */
    public function __construct(
        Customer $customer,
        Provider $provider,
        Cliente $cliente,
        Categoria $categoria,
        Jornal $jornal,
        Materia $materia
)
    {

        $this->customer = $customer;
        $this->provider = $provider;
        $this->cliente = $cliente;
        $this->categoria = $categoria;
        $this->jornal = $jornal;
        $this->materia = $materia;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = $this->customer->all();
        $providers = $this->provider->all();
        $cliente = $this->cliente->all();
        $categoria = $this->categoria->all();
        $jornal = $this->jornal->all();
        $materia = $this->materia->all();

        //return ['cliente' => $cliente, 'categoria' => $categoria];
        return view('cliente', compact('cliente', 'categoria', 'jornal', 'materia'));
//        dd($customers, $providers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
