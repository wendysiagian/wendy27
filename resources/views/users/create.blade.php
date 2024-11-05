<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add Users</h6>
                <form>
                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama"
                            wire:model="nama"value="{{ @old('nama') }}">
                        @error('nama')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control" wire:model="email" id="email"
                            value="{{ @old('email') }}">
                        @error('email')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password" wire:model="password"
                            value="{{ @old('password') }}">
                        @error('password')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">Role</label>
                        <select id="role" class="form-select" wire:model="role">
                            <option value="">--Pilih--</option>
                            <option value="admin">Admin</option>
                            <option value="pemilik">pemilik</option>
                        </select>
                        @error('role')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="button" wire:click="store" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
