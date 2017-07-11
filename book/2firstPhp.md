### Как же начать работать?

## Предустановка

Если у вас есть сервер или вы знаете и разбираетесь в этих всяких Апачах, то скипайте часть по настройке сервера.

Для начала необходимо скачать XAMPP по ссылке - https://www.apachefriends.org/ru/index.html 

После того, как вы скачали XAMPP, заранее скачайте фрейворк Fat Free Framework - https://fatfreeframework.com/3.6/home 

## Начало
Запустите XAMPP. 

![](https://1.downloader.disk.yandex.ru/preview/dcf39844b7df69c8eaa5b96d599e32c801d1445f869f7016deba98a628dc4afb/inf/8fNBxYxqTPFwr8eRLfe9O2r7R7jgdrGJdZykAXejD4uaeNEa7SQoW9peGEhW6hpd5QpKrMBkp01SH9FYUbhw6Q%3D%3D?uid=0&filename=Снимок%20экрана%202017-07-10%20в%200.52.27.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&size=XXL&crop=0)

Нажмите "Start" и подождите, пока всё запустится. (Красный круг индикатор станет сначала желтым, а в конце зеленым. Зеленый значит готовность)

После того, как всё запустилось - перейдите во вкладку "Services" и нажмите "Start All"

В результате чего, ваше окно должно выглядеть вот так:

![](https://3.downloader.disk.yandex.ru/preview/a6ca23ddab3102b26e2be0a53d542bcbdc281bbbc76c3d634d65bc8914b50b75/inf/8fNBxYxqTPFwr8eRLfe9OwpHzZvWAdel3jKlqBfsWbVcgM-lMMw8AmsGlJ5Lc-cwuYqC_rduWg4aYxWYVnxIzQ%3D%3D?uid=0&filename=Снимок%20экрана%202017-07-10%20в%200.57.45.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&size=XXL&crop=0)

Последний шаг по настройке XAMPP - перейдите во вкладку "Network" и нажмите "Enable" после чего, окно XAMPP будет выглядеть следующим образом:

![](https://3.downloader.disk.yandex.ru/preview/72648c0514dc278ace2875d0fe1750ff2a505c87078292a91bf5c30bde82f825/inf/8fNBxYxqTPFwr8eRLfe9O4hU8RZL5iFK2zOTn-fnGJHqKZpuilPzs0e2aner9tZkocBTbVzWuEa_wnyT0omXBw%3D%3D?uid=0&filename=Снимок%20экрана%202017-07-10%20в%201.00.39.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&size=XXL&crop=0)

## Пишем веб приложение Hello World
Создаем файл index.php - сервер начинает читать именно его.  

```php
<?php 
    namespace site;

    class main{
        public function main(){

            echo 'Hello World';
            
        }
    }

?>
```

Теперь, если открыть http://localhost/ на сайте при помощи php будет выведена надпись "Hello World"

Это и есть наше с вами первое веб приложение :3

[Следующая глава](https://github.com/NickWatsonMan/phpschool/blob/master/book/3echo.md)
[Предыдущая глава](https://github.com/NickWatsonMan/phpschool/blob/master/book/1intro.md)
