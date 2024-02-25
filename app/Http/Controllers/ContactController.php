<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyController;

class ContactController extends Controller
{
    public function index()
    {
        $contacts= Contact::all();
        return view('contacts.index',['contacts'=>$contacts,'companies'=>company::all()]);
    }
    public function show($id)
    {
        // Utilisez la méthode findOrFail pour trouver le contact par son ID
        $contact = Contact::findOrFail($id);

        // Retournez la vue avec le contact trouvé
        return view('contacts.show', compact('contact'));
    }
    public function add(Request $request)
    {
        // Validation des données
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'company' => 'nullable|string|max:255',
        ]);

        // Création du nouveau contact
        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->company = $request->company;
        $contact->save();

        // Redirection vers une page de succès ou une autre action
        return redirect()->route('contacts.index')->with('success', 'Contact added successfully!');
    }
    public function destroy($id)
    {
        $contact= Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('success','Contact deleted successfully');
    }
    public function modify($id)
    {
        $contact= Contact::findOrFail($id);
        return view('contacts.modify',['contact'=>$contact,'companies'=>company::all()]);

    }
    public function update(Request $request ,$id){
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'company' => 'nullable|string|max:255',
        ]);
        $contact = Contact::findOrFail($id);
        $contact->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'company' => $request->company,
        ]);

        // Rediriger avec un message de succès
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');
    }

    //
}
