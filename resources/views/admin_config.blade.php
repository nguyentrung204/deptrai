@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row text-center"><label><h2>Thông tin nội dung website</h2></label></div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Area</th>
                <th>Content</th>
                <th>CreateUser</th>
                <th>CreateUser</th>
            </tr>
            </thead>
            <tbody>
            <?php for ($x = 0; $x < count($configList); $x++) { ?>
                <tr>
                    <td><?php echo $configList[$x]->id ?></td>
                    <td><a href="/deptrai/admin/edit/<?php echo $configList[$x]->id ?>"><?php echo $configList[$x]->name ?></a></td>
                    <td><?php echo $configList[$x]->area ?></td>
                    <td><?php echo $configList[$x]->content ?></td>
                    <td><?php echo $configList[$x]->createUser ?></td>
                    <td><?php echo $configList[$x]->updateUser  ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
@stop
