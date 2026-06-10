<h2>Создание заявки</h2>

<form method="POST" action="/application/create">

    @csrf

    <p>Адрес</p>
    <input type="text" name="address">

    <p>Вид ремонта</p>
    <select name="repair_type">
        <option>Косметический ремонт</option>
        <option>Капитальный ремонт</option>
        <option>Электромонтаж</option>
    </select>

    <p>Тип оплаты</p>
    <select name="payment_type">
        <option>Наличные</option>
        <option>Банковская карта</option>
        <option>Безналичный расчет</option>
    </select>

    <p>Дата и время</p>
    <input type="datetime-local" name="repair_date">

    <button type="submit">
        Отправить заявку
    </button>

</form>