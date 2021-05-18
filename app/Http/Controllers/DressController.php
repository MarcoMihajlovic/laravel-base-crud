<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class DressController extends Controller
{
    protected function valida($request) {
       
        $request->validate([
            'name' => 'required|unique:dresses|max:255',
            'color' => 'required|max:20',
            'size' => 'required|max:4',
            'season' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric'
        ]);

    } 


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vestiti = Dress::all();

        $data = [
            'vestiti' => $vestiti
        ];

        return view('dresses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $this -> valida($request);

        $new_Dress = new Dress();

        $new_Dress -> fill($data);

        /* $new_Dress -> name = $data['name'];
        $new_Dress -> color = $data['color'];
        $new_Dress -> size = $data['size'];
        $new_Dress -> season = $data['season'];
        $new_Dress -> description = $data['description'];
        $new_Dress -> price = $data['price']; */

        $new_Dress -> save();

        return redirect() -> route('vestiti.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id) {
            $vestito = Dress::find($id);
            $data = [
                'vestito' => $vestito
            ];

            return view('dresses.show', $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $vestiti)
    {
        return view('dresses.edit', compact('vestiti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dress $vestiti)
    {
        $data = $request -> all();

        $vestiti -> update($data);

        return redirect() -> route('vestiti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $vestiti)
    {
        $vestiti -> delete();
        return redirect() -> route('vestiti.index') -> with('status', 'Vestito Cancellato');
    }
}
