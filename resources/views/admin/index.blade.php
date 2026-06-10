<h2>Все заявки</h2>

$applications as $application

<p>
Пользователь:
{{ $application->user->fio }}
</p>

<p>
Адрес:
{{ $application->address }}
</p>

<p>
Статус:
{{ $application->status }}
</p>

<form method="POST"
      action="/admin/{{ $application->id }}">

    @csrf

    <select name="status">

        <option>Новая</option>

        <option>В процессе</option>

        <option>Завершена</option>

        <option>Отменена</option>

    </select>

    <button>
        Изменить
    </button>

</form>

<hr>

@endforeach