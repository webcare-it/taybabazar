@extends('admin.master')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col">
                    <div class="card radius-10 mb-0">
                        <div class="card-body">

                            @if(Session::has('success'))
                                <x-alert :message="session('success')" title="Success" type="success"></x-alert>
                            @endif
                            @if(Session::has('error'))
                                <x-alert :message="session('error')" title="Error" type="error"></x-alert>
                            @endif

                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Page Products</h5>
                                </div>
                                <div class="ms-auto">
                                    <a href="{{ route('admin.page.products.create') }}" class="btn btn-primary btn-sm">Add new</a>
                                </div>
                            </div>

                           <div class="table-responsive mt-3">
                               <table class="table align-middle mb-0">
                                   <thead class="table-light">
                                       <tr>
                                           <th width="5%">SL</th>
                                           <th width="10%">Name</th>
                                           <th width="10%">Category Name</th>
                                           <th width="10%">D.Price</th>
                                           <th width="10%">R.Price</th>
                                           <th width="10%">Status</th>
                                           <th width="10%" class="text-center">Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach ($page_products as $product)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category->name ?? 'No category name found' }}</td>
                                            <td>{{ $product->discount_price }} Tk.</td>
                                            <td>{{ $product->regular_price }} Tk.</td>
                                            <td>
                                                @if($product->status == 0)
                                                    <span class="badge rounded-pill bg-danger">Inactive</span>
                                                @else
                                                    <span class="badge rounded-pill bg-primary">Active</span>
                                                @endif

                                            </td>
                                            <td>
                                                <a href="{{ route('page.products.edit', ['id' => $product->id, 'slug' => $product->slug]) }}" class="badge rounded-pill bg-info">
                                                    <i class="bx bx-edit-alt" style="font-size: 20px; color: rgb(244, 247, 248);"></i>
                                                </a>
                                                @if($product->status == 1)
                                                    <a href="{{ route('products.active', ['id' => $product->id]) }}" class="badge rounded-pill bg-success">
                                                        <i class="bx bx-up-arrow-alt" style="font-size: 20px; color: rgb(239, 241, 241);"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('products.inactive', ['id' => $product->id]) }}" class="badge rounded-pill bg-warning">
                                                        <i class="bx bx-down-arrow-alt" style="font-size: 20px; color: rgb(230, 59, 59);"></i>
                                                    </a>
                                                @endif
                                                <a href="{{ route('products.delete', ['id' => $product->id]) }}" onclick="return confirm('Are you sure delete this product ?')" class="badge rounded-pill bg-danger">
                                                    <i class="bx bx-trash-alt" style="font-size: 20px; color: rgb(243, 237, 237);"></i>
                                                </a>
                                            </td>
                                        </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                           </div>
                           {{ $page_products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
