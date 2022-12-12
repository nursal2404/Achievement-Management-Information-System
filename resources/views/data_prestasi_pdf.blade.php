<!DOCTYPE html>
<html lang="en">
<head>
  <title>Download PDF</title>
</head>
<body>
    <div class="form-group">
      <p align="center"><b>Laporan Prestasi</b></p>
      <table class="static" align="center" border="1px" style="witdh: 95x;">
          <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NPM</th>
              <th>Jurusan</th>
              <th>Prestasi</th>
              <th>Nama Lomba</th>
              <th>Penyelenggara</th>
              <th>Tingkat</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kejuaraan as $item)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->npm }}</td>
              <td>{{ $item->jurusan }}</td>
              <td>{{ $item->juara }}</td>
              <td>{{ $item->lomba }}</td>
              <td>{{ $item->penyelenggara }}</td>
              <td>{{ $item->tingkat }}</td>
              <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
              @endforeach
            </tr>
          </tbody>
        </table>
      </div>
</body>
</html> 
                
                  