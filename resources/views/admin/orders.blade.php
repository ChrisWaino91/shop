@extends ('layouts.dashboard')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Successful Orders</h1>
  </div>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Forename</th>
        <th scope="col">Surname</th>
        <th scope="col">Email</th>
        <th scope="col">Order Value</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($completed_orders as $completed_order){ ?>
            <tr class='clickable-row order_row'>
                <th><?php echo $completed_order->id ?></th>
                <td><?php echo $completed_order->customer->forename ?></td>
                <td><?php echo $completed_order->customer->surname ?></td>
                <td><?php echo $completed_order->customer->email ?></td>
                <td><?php echo '£' . $total ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

@endsection