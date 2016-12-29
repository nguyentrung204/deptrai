@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row text-center"><label><h2>Danh sách nhân viên</h2></label></div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Birthday</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php for ($x = 0; $x < count($workerList); $x++) { ?>
                <tr>
                    <td><?php echo $workerList[$x]->name ?></td>
                    <td><?php echo $workerList[$x]->phone ?></td>
                    <td><?php echo $workerList[$x]->address ?></td>
                    <td><?php echo $workerList[$x]->birthday ?></td>
                    <td><?php echo $workerList[$x]->status  ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
@stop
