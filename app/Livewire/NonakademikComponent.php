<?php
namespace App\Livewire;

use App\Models\Nonakademik;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class NonakademikComponent extends Component
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $addPage, $editPage = false;
    public $nama, $email, $nohp, $semester, $ipk, $status, $dok, $tgl, $id;
    public function render()
    {
        $data['nonakademik'] = Nonakademik::paginate(10);
        return view('livewire.nonakademik-component', $data);
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
        $this->dok->storeAs('public/nonakademik', $this->dok->hashName());
        Nonakademik::create([
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
        $cari = Nonakademik::find($id);
        $cari->delete();
        session()->flash('success', 'Berhasil Hapus data!');
        $this->reset();
    }
    public function edit($id)
    {
        $nonakademik = Nonakademik::find($id);
        $this->Id = $id;
        $this->nama = $nonakademik->nama;
        $this->email = $nonakademik->email;
        $this->nohp = $nonakademik->nohp;
        $this->semester = $nonakademik->semester;
        $this->ipk = $nonakademik->ipk;
        $this->status = $nonakademik->status;
        $this->dok = $nonakademik->dok;
        $this->tgl = $nonakademik->tgl;
        $this->editPage = true;
    }
    public function update()
    {
        $this->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:akademiks,email,' . $this->Id,
        ]);

        if ($this->Id) {
            $nonakademik = Nonakademik::find($this->Id);
            $nonakademik->update([
                'nama' => $this->nama,
                'email' => $this->email,
                'nohp' => $this->nohp,
                'semester' => $this->semester,
                'ipk' => $this->ipk,
                'status' => $this->status,
                'dok' => $this->dok,
                'tgl' => $this->tgl,
            ]);
            session()->flash('success', 'Berhasil Ubah data!');
            $this->reset();
        }
    }
    public function delete($id)
    {
        if ($id) {
            Nonakademik::where('id', $id)->delete();
            session()->flash('message', 'Akademik deleted successfully.');
        }
    }
}
