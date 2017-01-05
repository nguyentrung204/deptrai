@extends('layouts.admin')

@section('js')

@stop

@section('content')
	<div class="container">
		<div id="registerCt">


		<table class="table">
			<thead class="thead-default">
			<tr>
				<th>Ngày đăng</th>
				<th>Tiêu đề</th>
				<th>Khách hàng</th>
				<th>Trạng thái</th>
			</tr>
			</thead>
			<tbody>
			<?php for ($x = 0; $x < count($tuyendungList); $x++) { ?>
			<tr>
				<th scope="row"><?php echo $tuyendungList[$x]->updated_at ?></th>
				<td><?php echo $tuyendungList[$x]->title ?></td>
				<td><?php echo $tuyendungList[$x]->name ?></td>
				<td><?php if( $tuyendungList[$x]->isStatus == '0') { echo 'Ẩn'; } else { echo 'Hoạt động';} ?></td>
			</t
			<?php } ?>

			</tbody>
		</table>
</div>
    </div>
@stop