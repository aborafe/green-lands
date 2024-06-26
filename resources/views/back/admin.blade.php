@extends('back.admin_master')
@section('content')
{{--  table1  --}}
<div class="card card-table-border-none" id="recent-orders">
  <div class="card-header justify-content-between">
    <h2>Recent Orders</h2>
  </div>
  <div class="card-body pt-0 pb-5">
    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
      @if (session('success'))
      <script>
        alert('{{ session('success') }}');
      </script>
    @endif
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Product Name</th>
          <th class="d-none d-md-table-cell">Units</th>
          <th class="d-none d-md-table-cell">Order Date</th>
          <th class="d-none d-md-table-cell">Order Cost</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>
              <a class="text-dark" href="">{{ $user->f_name }} {{ $user->l_name }}</a>
            </td>
            <td class="d-none d-md-table-cell">{{ $user->email }}</td>
            <td class="d-none d-md-table-cell">{{ $user->created_at }}</td>
            <td class="d-none d-md-table-cell">{{ $user->role }}</td>
            <td>
              <span class="badge badge-success">Active</span>
            </td>
          <td>
            {{-- <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Update</a> --}}
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
          </tr>
          @endforeach
        </tr>

      </tbody>
    </table>
  </div>
</div>
{{--  table2  --}}
<div class="card card-table-border-none" id="recent-orders">
  <div class="card-header justify-content-between">
    <h2>Recent Orders</h2>
  </div>
  <div class="card-body pt-0 pb-5">
    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Name</th>
          <th class="d-none d-md-table-cell">Location</th>
          <th class="d-none d-md-table-cell">Date</th>
          <th class="d-none d-md-table-cell">Description</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $order)
        <tr>
          <td>{{ $order->id }}</td>
          <td>
            <a class="text-dark" href="">{{ $order->name }}</a>
          </td>
          <td class="d-none d-md-table-cell">{{ $order->location}} </td>
          <td class="d-none d-md-table-cell">{{ $order->created_at }}</td>
          <td class="d-none d-md-table-cell">${{ $order->description }}</td>
          <td>
            <span class="badge badge-success">{{ $order->status }}</span>
          </td>
          <td>
            <form action="{{ route('orders.update', $order->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('PUT')
              <select name="status" onchange="this.form.submit()">
                <option value="waiting" {{ $order->status == 'waiting' ? 'selected' : '' }}>Waiting</option>
                <option value="acceptable" {{ $order->status == 'acceptable' ? 'selected' : '' }}>Acceptable</option>
                <option value="unacceptable" {{ $order->status == 'unacceptable' ? 'selected' : '' }}>Unacceptable</option>
              </select>
            </form>
            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>


@endsection