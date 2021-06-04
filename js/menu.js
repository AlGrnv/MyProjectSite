$().ready(function () {
    $('nav a[href^="#"]').click(function () { //выбрать ссылки из меню
        var offset = $('nav').innerHeight(); //высота меню, получаем динамически
        var target = $(this).attr('href'); //сохраняем значение атребута href
        $('html, body').animate({
            scrollTop: $(target).offset().top - offset // вычесть высоту меню
        }, 500); // время анимации
        $('.nav a[href^="#"]').removeClass('active'); // адалить класс active у всех пунктов меню 
        $(this).addClass('active'); // добавить класс active активной ссылке
        return false;
    });
});