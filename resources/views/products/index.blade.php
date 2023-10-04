<h1>products</h1>
<a href="{{ $exportExcel }}">Download Excel</a>
<a href="{{ $exportPdf }}">Download Pdf</a>
<table>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Year</th>
      <th scope="col">Category</th>
      <th scope="col">Stock</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
      <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->year }}</td>
        <td>{{ $product->category }}</td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->created_at }}</td>
        <td>{{ $product->updated_at }}</td>
      </tr>
    @endforeach
  </tbody>
</table>