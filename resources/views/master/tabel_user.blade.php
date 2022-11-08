<div class="table-responsive">
                  <table class="table table-bordered">
                    <thead class="table-primary">
                      <tr>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">@sortablelink('name' , 'Nama')</th>
                        <th scope="col">@sortablelink('username' , 'Username')</th> 
                        <th scope="col">Level</th>
                        <th scope="col" class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                      $no=1;
                      @endphp
                      @foreach ($items as $index =>$item)
                      <tr>
                        <th scope="row">{{ $index + $items->firstItem() }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->level }}</td>
                        <td>
                          <div class="d-flex justify-content-center">
                            <div class="btn-group">
                              <a href="/edit_user/{{ $item->id }}" class="btn btn-warning mr-2">Edit</a>
                              <a href="data_user/delete/{{ $item->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                            </div>
                          </div>
                          
                        </td>
                        @endforeach
                      </tr>
                    </tbody>
                  </table>
                  {{ $items->links() }}
              </div>