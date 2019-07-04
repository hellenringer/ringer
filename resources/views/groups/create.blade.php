@extends ('_layout')

@section ('content')
	<form action = "{{ route ('groups.store') }}" method = "POST">
	 	@csrf
	  	<div class="input-group-prepend">
	    	<span class="input-group-text">Добавление группы</span>
	  	</div>
	  	<div style="width: 300px">
	 		<input type="text" aria-label="Номер группы" class="form-control" placeholder="Введите номер группы" name='title'>
			  <input type="text" aria-label="ФИО студента" class="form-control" placeholder="Введите ФИО студента" name="description">
			  <input type="text" aria-label="Номер телефона" class="form-control" placeholder="Введите номер студента" name="average_math">
			  <input type="text" aria-label="Дата рождения" class="form-control" placeholder="Введите дату рождения студента" name="average_rus">
			  <input type="text" aria-label="Город" class="form-control" placeholder="Введите город студента" name="average_eng">
	  		<div><button class="btn btn-outline-success" type="submit">Добавить</button></div>
	  	</div>
	</form>
@endsection