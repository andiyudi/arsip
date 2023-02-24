<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\DataTables\ArsipDataTable;
use App\Http\Requests\StoreArsipRequest;
use App\Models\Arsip;


class ArsipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ArsipDataTable $dataTable)
    {
        return $dataTable->render('arsip.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('arsip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArsipRequest $request)
    {
        $data = $request->all();
        $arsip = Arsip::create($data);

        return redirect()->route('arsip.index')->with('success', 'Arsip berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($arsipId)
    {
        $id = decrypt($arsipId);
        //get arsip by ID
        $arsip = Arsip::findOrFail($id);

        //render show arsip
        return view('arsip.show', compact('arsip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($arsipId)
    {
        $id = decrypt($arsipId);
        //get arsip by ID
        $arsip = Arsip::findOrFail($id);

        //render edit arsip
        return view('arsip.edit', compact('arsip'));
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
        $arsip = Arsip::findOrFail($id);
        $arsip->update($request->all());
        return redirect()->route('arsip.index')->with('success', 'Arsip berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arsip = Arsip::findOrFail($id);
        $arsip->delete();

        return redirect()->route('arsip.index')->with('success', 'Arsip berhasil dihapus');
    }

    public function dashboard()
    {
        $totalArsip = Arsip::count();
        $arsipKeluar = Arsip::where('m_k', 'Keluar')->count();
        $arsipMasuk = Arsip::where('m_k', 'Masuk')->count();
        $arsipTable = Arsip::latest('id')->take(10)->get();

        return view('pages.dashboard', compact('totalArsip', 'arsipKeluar', 'arsipMasuk', 'arsipTable'));
    }
}
