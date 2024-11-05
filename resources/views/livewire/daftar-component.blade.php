<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                 @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                <h6 class="mb-4">Tabel Data Beasiswa Akademik</h6>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Semester Saat Ini</th>
                            <th scope="col">Ipk Terakhir</th>
                            <th scope="col">Status</th>
                            <th scope="col">Dokument</th>
                            <th scope="col">Tanggal Daftar</th>
                            <th>
                                Proses
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($akademik as $data)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->nohp}}</td>
                            <td>{{$data->semester}}</td>
                            <td>{{$data->ipk}}</td>
                            <td>{{$data->status}}</td>
                            <td><img src="{{asset('storage/akademik/'. $data->dok)}}" style="width: 100px" alt=""></td>
                            <td>{{$data->tgl}}</td>
                            <td>
                                <button class="btn btn-info" wire:click="edit({{$data->id}})">Edit</button>
                                <button class="btn btn-danger" wire:click="destroy({{$data->id}})">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$daftar->links()}}
                <button wire:click="create" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
    @if ($addPage)
        @include('daftar.create')
    @endif
    @if ($editPage)
        @include('daftar.edit')
    @endif
</div>
<!-- Table End -->
