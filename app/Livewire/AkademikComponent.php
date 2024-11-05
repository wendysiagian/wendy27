<?php

namespace App\Livewire;

use App\Models\akademik;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class AkademikComponent extends Component
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $addPage,
        $editPage = false;
    public $nama, $email, $nohp, $semester, $ipk, $status, $dok, $tgl, $id;
    public function render()
    {
        $data['akademik'] = Akademik::paginate(10);
        return view('livewire.akademik-component', $data);
    }
    public function create()
    {
        $this->reset();
        $this->addPage = true;
    }
    public function store()
    {
        $this->validate(
            [
                'nama' => 'required',
                'email' => 'required|email',
                'nohp' => 'required',
                'semester' => 'required',
                'ipk' => 'required',
                'status' => 'required',
                'dok' => 'required|image',
                'tgl' => 'required',
            ],
            [
                'nama.required' => 'Username tidak boleh kosong!',
                'email.required' => 'Email tidak boleh kosong!',
                'email.email' => 'Format email salah!',
                'nohp.required' => 'Password tidak boleh kosong!',
                'semester.required' => 'Role tidak boleh kosong!',
                'ipk.required' => 'Role tidak boleh kosong!',
                'status.required' => 'Role tidak boleh kosong!',
                'dok.required' => 'Role tidak boleh kosong!',
                'dok.image' => 'Role tidak boleh kosong!',
                'tgl.required' => 'Role tidak boleh kosong!',
            ],
        );
        $this->dok->storeAs('public/akademik', $this->dok->hashName());
        Akademik::create([
            'user_id' => auth()->user()->id,
            'nama' => $this->nama,
            'email' => $this->email,
            'nohp' => $this->nohp,
            'semester' => $this->semester,
            'ipk' => $this->ipk,
            'status' => $this->status,
            'dok' => $this->dok->hashName(),
            'tgl' => $this->tgl,
        ]);
        session()->flash('success', 'Berhasil Simpan data!');
        $this->reset();
    }
    public function destroy($id)
    {
        $cari = Akademik::find($id);
        unlink(public_path('storage/akademik/' . $cari->dok));
        $cari->delete();
        session()->flash('success', 'Berhasil Hapus data!');
        $this->reset();
    }
    public function edit($id)
    {
        $akademik = Akademik::find($id);
        $this->Id = $id;
        $this->nama = $akademik->nama;
        $this->email = $akademik->email;
        $this->nohp = $akademik->nohp;
        $this->semester = $akademik->semester;
        $this->ipk = $akademik->ipk;
        $this->status = $akademik->status;
        $this->dok = $akademik->dok;
        $this->tgl = $akademik->tgl;
        $this->editPage = true;
    }
    public function update()
    {
        $akademik = Akademik::find($this->id);
        if (empty($this->dok)) {
            $akademik->update([
                'user_id' => auth()->user()->id,
                'nama' => $this->nama,
                'email' => $this->email,
                'nohp' => $this->nohp,
                'semester' => $this->semester,
                'ipk' => $this->ipk,
                'status' => $this->status,
                'tgl' => $this->tgl,
            ]);
        } else {
            $this->dok->storeAs('public/akademik', $this->dok->hashName());
            $akademik->update([
                'user_id' => auth()->user()->id,
                'nama' => $this->nama,
                'email' => $this->email,
                'nohp' => $this->nohp,
                'semester' => $this->semester,
                'ipk' => $this->ipk,
                'status' => $this->status,
                'dok' => $this->dok->hashName(),
                'tgl' => $this->tgl
            ]);
            session()->flash('success', 'Berhasil Ubah data!');
            $this->reset();
        }
    }
    public function delete($id)
    {
        if ($id) {
            Akademik::where('id', $id)->delete();
            session()->flash('message', 'Akademik deleted successfully.');
        }
    }
}
