<table class="table table-striped table-hover">
	<tbody>
		<tr>
			<td><strong>ФИО</strong></td>
			<td>{{ $model->name }}</td>
		</tr>
		<tr>
			<td><strong>Телефон</strong></td>
			<td>{{ $model->phone }}</td>
		</tr>
		<tr>
			<td><strong>E-Mail</strong></td>
			<td>{{ $model->email }}</td>
		</tr>
		<tr>
			<td><strong>Сроки</strong></td>
			<td><b>с</b> {{ $model->from }} <b>по</b> {{ $model->to }}</td>
		</tr>
		<tr>
			<td><strong>Кол-во человек</strong></td>
			<td>{{ $model->persons_num }}</td>
		</tr>
		<tr>
			<td><strong>Домик</strong></td>
			<td>{{ $model->house }}</td>
		</tr>
		<tr>
			<td><strong>Трехразовое питание в ресторане</strong></td>
			<td>{{ $model->has_food ? 'Да' : 'Нет' }}</td>
		</tr>
		<tr>
			<td><strong>Коментарии</strong></td>
			<td>{{ $model->comments }}</td>
		</tr>
	</tbody>
</table>