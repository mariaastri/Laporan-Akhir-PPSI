@extends('layouts.admin')

@section('title')
Daftar Product
@endsection

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body px-4 py-4-5">
        <div class="d-flex justify-content-start">
          <div class="stats-icon purple mb-2">
            <i class="bi bi-check-square-fill"></i>
          </div>
          <div class="ms-3">
            <h6 class="text-muted font-semibold">Product Publish</h6>
            <h6 class="font-extrabold mb-0">6</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body px-4 py-4-5">
        <div class="d-flex justify-content-start">
          <div class="stats-icon purple mb-2">
            <i class="bi bi-info-square-fill"></i>
          </div>
          <div class="ms-3">
            <h6 class="text-muted font-semibold">Product Draft</h6>
            <h6 class="font-extrabold mb-0">5</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>@yield('title')</h4>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-lg">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NAME</th>
                  <th>PRICE</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                <tr>
                  <td class="text-left">{{ $loop->iteration }}</td>
                  <td class="text-bold-semi">{{ $item->name }}</td>
                  <td>Rp. {{ number_format(str_replace('>', '', $item->harga)) }}</td>
                  <td class="text-bold-500 d-flex">
                    <a href="{{ route('product.edit', $item->id) }}" class="btn icon btn-primary me-2"><i
                        class="bi bi-pencil"></i></a>
                    <form onclick="return confirm('Are you sure?');" action="{{ route('product.destroy', $item->id) }}"
                      method="POST">
                      @csrf
                      @method("delete")
                      <button type="submit" class="btn icon btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection