@extends('app')
@section('content')
    <h1>Mutual Fund </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Mutual Fund Code</td>
                <td><?php echo ($mutual_fund['code']); ?></td>
            </tr>
            <tr>
                <td>Mutual Fund Scheme</td>
                <td><?php echo ($mutual_fund['scheme_plan']); ?></td>
            </tr>
            <tr>
                <td>Balance Amount</td>
                <td><?php echo ($mutual_fund['balance_amount']); ?></td>
            </tr>
            <tr>
                <td>Acquired Date </td>
                <td><?php echo ($mutual_fund['acquired_date']); ?></td>
            </tr>
            <tr>
                <td>Investment Amount</td>
                <td><?php echo ($mutual_fund['investment_amount']); ?></td>
            </tr>
            <tr>
                <td>Current Value</td>
                <td><?php echo ($mutual_fund['current_value']); ?></td>
            </tr>
            <tr>
                <td>Recent Date</td>
                <td><?php echo ($mutual_fund['recent_date']); ?></td>
            </tr>
            <tr>
                <td>Nominee</td>
                <td><?php echo ($mutual_fund['nominee']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop