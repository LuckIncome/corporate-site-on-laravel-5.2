<div id="content-page" class="content group">
	<div class="hentry group">
		{!! Form::open(['url' => (isset($menu->id)) ? route('admin.menus.update', ['menus' => $menu->alias]) : route('admin.menus.store'), 'class' => 'contact-form', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	<ul>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Заголовок:</span>
				<br />
				<span class="sublabel">Заголовок материала</span><br />
			</label>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				{!! Form::text('title', isset($menu->title) ? $menu->title : old('title'), ['placeholder' => 'Введите название страницы']) !!}
			</div>
		</li>

		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Родительский пункт меню:</span>
				<br />
				<span class="sublabel">Родитель</span><br />
			</label>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				{!! Form::select('parent', $menus, isset($menu->parent) ? $menu->parent : null) !!}
			</div>
		</li>
		
		<h1>Тип меню:</h1>		
		<div id="accordion">
			<h3>
				{!! Form::radio('type', 'customLink', (isset($type) && $type == )) !!}
				<span class="label">Пользовательская ссылка:</span>
			</h3>
			<ul>
			<li class="text-field">
				<label for="name-contact-us">
					<span class="label">Путь для ссылки:</span>
					<br />
					<span class="sublabel">Путь для ссылки</span><br />
				</label>
				<div class="input-prepend">
					<span class="add-on"><i class="icon-user"></i></span>
					{!! Form::select('custom_link', (isset($menu->path)) ? $menu->parent : null) !!}
				</div>
			</li>
			<div style="clear: both;"></div>
			</ul>
		</div>

		<li class="submit-button">
			{!! Form::button('Сохранить', ['class' => 'btn btn-the-salmon-dance-3', 'type' => 'submit']) !!}
		</li>
	</ul>
	{!! Form::close() !!}

	</div>
</div>
