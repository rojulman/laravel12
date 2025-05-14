<h3>Daftar Unit Kerja</h3>
<a href="{{ url('unitkerja.create') }}" class="btn btn-primary">Tambah Unit Kerja</a>

<table class="table table-bordered" width="100%" border="1" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Unit Kerja</th>
            <th>Keterangan
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($unitkerja as $uk)
        <tr>
            <td>{{ $uk->id }}</td>
            <td>{{ $uk->nama }}</td>
            <td>{{ $uk->keterangan }}</td>
            <td>
                <a href="{{ url('unitkerja.edit', $uk->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ url('unitkerja.destroy', $uk->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

