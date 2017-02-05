@extends('app')
@section('content')
    <h1>Customer </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']); ?></td>
            </tr>
            <tr>
                <td>Cust Number</td>
                <td><?php echo ($customer['cust_number']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($customer['address']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($customer['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($customer['state']); ?></td>
            </tr>
            <tr>
                <td>Zip </td>
                <td><?php echo ($customer['zip']); ?></td>
            </tr>
            <tr>
                <td>Home Phone</td>
                <td><?php echo ($customer['home_phone']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($customer['cell_phone']); ?></td>
            </tr>


            </tbody>
        </table>
    </div>

    <h1>Stock</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Symbol</th>
            <th>Name</th>
            <th>Shares</th>
            <th>Purchase price</th>
            <th>Purchase Date</th>
            <th>Original Value</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($stocks as $stock)
            @if ($stock->customer_id == $customer->id)
            <tr>
                <td>{{ $stock->name }}</td>
                <td>{{ $stock->symbol }}</td>
                <td>{{ $stock->shares }}</td>
                <td>{{ $stock->purchase_price }}</td>
                <td>{{ $stock->purchased }}</td>
                <td>{{ $stock->shares * $stock->purchase_price }}</td>
            </tr>
            @endif
        @endforeach

        </tbody>

    </table>

    <?php
        $total = 0;
        foreach ($stocks as $stock) {
            if ($stock->customer_id == $customer->id) {
                $total += ($stock->shares * $stock->purchase_price);
            }
        }
        echo '<span style = "font-size: 20px;"> Total of Initial Stock Portfolio :  $' . $total . '</span>';
        ?>



    <h1>Investments</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Category</th>
            <th>Description</th>
            <th>Acquired Value</th>
            <th>Acquired Date</th>
            <th>Recent Value</th>
            <th>Recent Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($investments as $investment)
            @if($investment->customer_id == $customer->id)
            <tr>
                <td>{{ $investment->category }}</td>
                <td>{{ $investment->description }}</td>
                <td>{{ $investment->acquired_value }}</td>
                <td>{{ $investment->acquired_date }}</td>
                <td>{{ $investment->recent_value }}</td>
                <td>{{ $investment->recent_date }}</td>
            </tr>
            @endif
        @endforeach

        </tbody>

    </table>

    <?php
    $total_initial = 0;
    $total_current = 0;
    foreach ($investments as $investment) {
        if ($investment->customer_id == $customer->id) {
            $total_initial += $investment->acquired_value;
            $total_current += $investment->recent_value;
        }
    }
    echo '<span style = "font-size: 20px;"> Total of Initial Investment Portfolio :  $' . $total_initial . '</span>';
    echo "</br>";
    echo '<span style = "font-size: 20px;"> Total of Current Investment Portfolio :  $' . $total_current . '</span>';

    ?>

    <h1>Mutual Funds</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Code</th>
            <th>Scheme Plan</th>
            <th>Balance Amount</th>
            <th>Acquired Date</th>
            <th>Investment Amount</th>
            <th>Current Value</th>
            <th>Recent Date</th>
            <th>Nominee</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($mutual_funds as $mutual_fund)
            @if($mutual_fund->customer_id == $customer->id)
            <tr>
                <td>{{ $mutual_fund->code }}</td>
                <td>{{ $mutual_fund->scheme_plan }}</td>
                <td>{{ $mutual_fund->balance_amount }}</td>
                <td>{{ $mutual_fund->acquired_date }}</td>
                <td>{{ $mutual_fund->investment_amount }}</td>
                <td>{{ $mutual_fund->current_value }}</td>
                <td>{{ $mutual_fund->recent_date }}</td>
                <td>{{ $mutual_fund->nominee }}</td>
            </tr>
            @endif
        @endforeach

        </tbody>

    </table>

    <h1>Summary of Portfolio</h1>

    <?php
    echo '<span style = "font-size: 20px;"> Total of Initial Portfolio Value :  $' . ($total + $total_initial) . '</span>';
    echo "</br>";
    echo '<span style = "font-size: 20px;"> Total of Current Portfolio :  $' . ($total + $total_current) . '</span>';
    ?>

@stop