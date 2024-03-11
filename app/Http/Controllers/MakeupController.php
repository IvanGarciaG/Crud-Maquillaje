<?php

namespace App\Http\Controllers;

use App\Http\Requests\Makeup\StoreRequest;
use App\Http\Requests\Makeup\UpdateRequest;
use App\Models\Makeup;
use Exception;
use Illuminate\Support\Facades\{
    Log,
    Session,
    DB
};

class MakeupController extends Controller
{
    /**
     * Function to obtain all the records
     * @return json 
     */
    public function index()
    {
        try {
            $makeups = Makeup::all();
            return view('makeups.index', compact('makeups'));
        } catch (Exception $e) {
            Log::channel('error')->error(' Error when displaying makeups, please try again later. | ' . $e->getMessage() . ' | ' . __METHOD__);
            Session::flash('error', 'Error al mostrar los maquillajes, por favor inténtelo más tarde');
            return redirect()->back();
        }
    }
    /**
     * Create a new record for the makeups
     * @return redirect
     */
    public function create()
    {
        try {
            return view('makeups.create');
        } catch (Exception $e) {
            Log::channel('error')->error('Error displaying the form to create a makeup, please try again later.| ' . $e->getMessage() . ' | ' . __METHOD__);
            Session::flash('error', 'Error al mostrar el formulario para crear un maquillaje, por favor inténtelo más tarde');
            return redirect()->back();
        }
    }
    /**
     * Store a new record for the makeups
     * @return redirect
     */
    public function store(StoreRequest $request)
    {
        try {
            DB::beginTransaction();

            Makeup::create($request->all()); // Store in the database

            DB::commit();
            Log::channel('info')->info('Makeup stored successfully | '  . __METHOD__);
            Session::flash('success', 'El Maquillaje se ha guardado');

            return redirect()->route('makeups.index');
        } catch (Exception $e) {
            DB::rollBack();
            Log::channel('error')->error('Error while storing the makeup | ' . $e->getMessage() . ' | ' . __METHOD__);
            Session::flash('error', 'Error al guardar el maquillaje, por favor inténtelo más tarde');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Function to obtain a single record
     * @param string $slug
     */
    public function show(string $slug)
    {
        try {
            $makeup = Makeup::where('slug', $slug)->firstOrFail();

            return view('makeups.show', compact('makeup'));
        } catch (Exception $e) {
            Log::channel('error')->error('Error while showing the projects|' . $e->getMessage() . ' | ' . __METHOD__);
            Session::flash('error', 'Error al consultar los datos. Contacte al administrador ');
            return redirect()->back();
        }
    }
    /**
     * Function to edit a record 
     * @param  string $slug
     * @return redirect
     */
    public function edit(string $slug)
    {
        try {
            $makeup = Makeup::where('slug', $slug)->firstOrFail();

            return view('makeups.edit', compact('makeup'));
        } catch (Exception $e) {
            Log::channel('error')->error('Error displaying the makeup editing form |' . $e->getMessage() . ' | ' . __METHOD__);
            Session::flash('error', 'Error al mostrar el formulario para editar un Maquillaje, por favor inténtelo más tarde');

            return redirect()->back();
        }
    }
    /**
     * Function to update a record
     * @param UpdateRequest $request , $id
     */
    public function update(UpdateRequest $request, $id)
    {
        try {

            DB::beginTransaction();
            $makeup = Makeup::findOrFail($id);
            $makeup->update($request->all());

            DB::commit();

            Log::channel('info')->info('The makeup ' . $makeup->slug . ' was updated');
            Session::flash('success', 'Se actualizó el maquillaje');
            return redirect()->route('makeups.index');
        } catch (Exception $e) {
            DB::rollBack();

            Log::channel('error')->error(' Error updating a makeup | ' . $e->getMessage() . ' | ' . __METHOD__);
            Session::flash('error', 'Error al actualizar el maquillaje. Contacte al administrador ');

            return redirect()->back();
        }
    }

    /**
     * function to delete a record
     * @param $id 
     */
    public function destroy($id)
    {
        try {
            $makeup = Makeup::findOrFail($id);
            $makeup->delete();

            Log::channel('info')->info("The makeup with id {$makeup->id}, has been deleted successfully | " . __METHOD__);
            Session::flash('success', 'El maquillaje ha sido eliminado ');

            return redirect()->route('makeups.index');
        } catch (Exception $e) {
            Log::channel('error')->error(' Error deleting a makeup| ' . $e->getMessage() . ' | ' . __METHOD__);
            Session::flash('error', 'Error al eliminar el maquillaje. Contacte al administrador ');
            return redirect()->back();
        }
    }
}
