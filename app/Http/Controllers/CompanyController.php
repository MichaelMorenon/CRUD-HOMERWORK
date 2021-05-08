<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\company;

class CompanyController extends Controller
{
        // view html
        public function index()
        {
            // select * from users
            //$users = User::all();
            $companies = company::orderBy('id', 'desc')->paginate(8);
            return view('company.index', compact('companies'));
        }

        // Formulario view html
        public function create()
        {
            return view('company.create');
        }

        // true, false
        public function store(Request $request)
        {
         //return $request->all();
            $company= Company::create($request->all());
            return redirect('company')->with('status', 'Se creo exitosamente')->with('type', 'success');
        }
        //vista de detalles de compañias
        public function show($id){
            $company = company::find($id);
            return  view('company.show', compact('company'));
        }
        public function destroy($id){
            $company = company::find($id)->delete();
            return redirect('company')->with('status', 'Se elimino correctamente')->with('type', 'danger');

        }
        public function edit($id){
            $company =company::find($id);
            return  view('company/edit',compact('company'));

        }
        public function update(Request $request, $id){

            $company =company::find($id)->update($request->all());
            return redirect('company')->with('status', 'Se actulizo correctamente')->with('type', 'warning');;


        }


}
