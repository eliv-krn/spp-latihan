<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class KelasController extends Controller
{
    public function index()
    {
        $post = Kelas::all();

        return view('kelas.index', compact('post'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_kelas' => 'required|min:1',
            'kompetensi_keahlian' => 'required|min:5',
        ]);

        //create post
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
        ]);

        //redirect to index
        return redirect()
            ->route('kelas.index')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id_kelas): View
    {
        //get post by ID
        $post = Kelas::findOrFail($id_kelas);

        //render view with post
        return view('kelas.edit', compact('post'));
    }

    public function update(Request $request, $id_kelas): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_kelas' => 'required|min:1',
            'kompetensi_keahlian' => 'required|min:5',
        ]);

        //get post by ID
        $post = Kelas::findOrFail($id_kelas);

        //check if image is uploaded
        $post->update([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
        ]);
        //redirect to index
        return redirect()
            ->route('kelas.index')
            ->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id_kelas): RedirectResponse
    {
        //get post by ID
        $post = Kelas::findOrFail($id_kelas);
        //delete post
        $post->delete();
        //redirect to index
        return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
