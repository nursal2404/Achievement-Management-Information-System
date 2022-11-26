<div class="table-responsive">
  <table class="table table-bordered">
    <thead class="table-primary">
      <tr>
        <th scope="col">No</th>
        <th scope="col">@sortablelink('name')</th>
        <th scope="col">@sortablelink('npm')</th>
        <th scope="col">@sortablelink('jurusan')</th>
        <th scope="col">Nama Lomba</th>
        <th scope="col">Penyelenggara</th>
        <th scope="col">@sortablelink('tingkat')</th>
        <th scope="col">@sortablelink('tanggal')</th>
        <th scope="col" class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($lomba as $item)
      <tr>
        <th scope="row">{{ $loop->index + 1 }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->npm }}</td>
        <td>{{ $item->jurusan }}</td>
        <td>{{ $item->lomba }}</td>
        <td>{{ $item->penyelenggara }}</td>
        <td>{{ $item->tingkat }}</td>
        <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
    @endforeach
        <td>
          <div class="btn-group">
            <a href=""><button type="button" class="btn btn-warning mr-2">Edit</button></a>
            <a href="lomba/delete/{{ $item->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
          </div>
        </td> 
      </tr>
    </tbody>
  </table>     
</div>