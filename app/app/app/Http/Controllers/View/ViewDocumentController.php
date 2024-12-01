<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\DocumentRepositoryInterface;
use Illuminate\Http\Request;

class ViewDocumentController extends Controller
{
    public DocumentRepositoryInterface $documentRepository;

    public function __construct(DocumentRepositoryInterface $documentRepository)
    {
        $this->documentRepository = $documentRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('documents.catalog')->with('title', 'Catálogo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documents.details')->with('title', 'Novo documento')->with('action', 'create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('documents.details')->with('title', 'Visualizar documento')->with('id', $id)->with('action', 'show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('documents.details')->with('title', 'Editar documento')->with('id', $id)->with('action', 'edit');
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

    public function download($filename)
    {
        return response()->download(storage_path('app/public/documents/' . $filename));
    }
}
