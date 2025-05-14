<h3>Daftar Paramedik</Param>
<a href="{{ url('paramedik.create') }}" class="btn btn-primary">Tambah Paramedik</a>
<table class="table table-bordered" width="100%" border="1" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Paramedik</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Unit Kerja</th>
            <th>Kategori</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($paramedik as $pm)
        <tr>
            <td>{{ $pm->id }}</td>
            <td>{{ $pm->nama }}</td>
            <td>{{ $pm->tmp_lahir }}, {{ $pm->tgl_lahir }}</td>
            <td>{{ $pm->gender }}</td>
            <td>{{ $pm->unitkerja->nama }}</td>
            <td>{{ $pm->kategori }}</td>
            <td>{{ $pm->alamat }}</td>
            <td>
                <a href="{{ url('paramedik.edit', $pm->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ url('paramedik.destroy', $pm->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
