const names = document.querySelector('#nameInput');
const surnames = document.querySelector('#surnameInput');

document.querySelector('#infoType').addEventListener('click', ()=> {
    alert('Данная страница создана в учебных целях!');
});

document.querySelector('#wishType').addEventListener('click', ()=> {
    alert('Хорошего дня!');
});

document.querySelector('#contactType').addEventListener('click', ()=> {
    let ask = confirm('Вам понравилась страница?');
    if (ask) {
        alert('Спасибо!Пишите на: Gambit47@yandex.ru!');
    } else {
        alert('Мы обязательно доработаем контент!Пишите на: Gambit47@yandex.ru');
    };
});
