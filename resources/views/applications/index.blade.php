<h2>Мои заявки</h2>

$applications as $application

<p>
Адрес: {{ $application->address }}
</p>

<p>
Вид ремонта: {{ $application->repair_type }}
</p>

<p>
Оплата: {{ $application->payment_type }}
</p>

<p>
Статус: {{ $application->status }}
</p>

<hr>
@endforeach