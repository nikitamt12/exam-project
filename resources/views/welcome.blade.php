<!DOCTYPE html>
<html>
<head>
    <title>Мой Ремонт</title>
</head>
<body>

<h1>Мой Ремонт</h1>

<a href="/login">Вход</a>
<a href="/register">Регистрация</a>

<img id="slider" src="/images/1.jpg" width="700">

<script>

let images = [
    '/images/1.jpg',
    '/images/2.jpg',
    '/images/3.jpg',
    '/images/5.jpg'
];

let i = 0;

setInterval(function() {

    i++;

    if(i >= images.length) {
        i = 0;
    }

    document.getElementById('slider').src = images[i];

}, 3000);

</script>

</body>
</html>
