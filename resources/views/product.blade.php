
@extends('layouts/component')
@section('container')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Total Price</th>
        </tr>
    </thead>
    <tbody>
        
      @foreach ($items as $product => $Product)
    <tr>
      <th scope="row">{{ $product + $items->firstItem() }}</th>
      <td>{{ $Product->name }}</td>
      <td>{{ $Product->qty }}</td>
      <td>{{ $Product->price }}</td>
      <td>{{ $Product->total_price }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $items->links() }}
    
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $product => $Product)
    <tr>
      <th scope="row">{{ $product + $items->firstItem() }}</th>
      <td>{{ $Product->name }}</td>
      <td>{{ $Product->name }}</td>
      <td>{{ $Product->created_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $items->links() }}

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Slug</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category => $Categories)
    <tr>
      <th scope="row">{{ $category + $categories->firstItem() }}</th>
      <td>{{ $Categories->name }}</td>
      <td>{{ $Categories->slug }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $items->links() }}

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Produk ID</th>
            <th scope="col">Kategori ID</th>
            <th scope="col">Created</th>
            <th scope="col">Update</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($productdetails as $productdetail )
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $productdetail->products_id }}</td>
      <td>{{ $productdetail->categories_id }}</td>
      <td>{{ $productdetail->created_at }}</td>
      <td>{{ $productdetail->updated_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Produk ID</th>
            <th scope="col">Kategori ID</th>
            <th scope="col">Created</th>
            <th scope="col">Update</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($productdetails as $productdetail )
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $productdetail->products_id }}</td>
      <td>{{ $productdetail->categories_id }}</td>
      <td>{{ $productdetail->created_at }}</td>
      <td>{{ $productdetail->updated_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
   