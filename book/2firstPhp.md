### Как же начать работать?

## Предустановка

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
Получить доступ к файловой системе сайта можно разными способами. Через FileZilla или Coda. Путь, который также доступен - это перейти во вкладку "Volumes" в XAMPP и кликнуть "Mount", в результате чего у вас появятся файлы в общем доступе. 

Пример:

![](https://2.downloader.disk.yandex.ru/preview/f89293039f935099bb79abb39f12698d442645d2dbbc9049d8aecf44f2dc7a4e/inf/8fNBxYxqTPFwr8eRLfe9O9_3RofAxGSCCUgNgJDRZlcLO_5saTy4UlIpvaS4GuN493PWbPk8PkAazfn6KeQG_Q%3D%3D?uid=0&filename=Снимок%20экрана%202017-07-10%20в%201.10.32.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&size=XXL&crop=0)


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

Теперь, если открыть http://localhost:8080/ на сайте при помощи php будет выведена надпись "Hello World"

![](https://3.downloader.disk.yandex.ru/preview/036605314182963a5b37b03b0cfd2759eadc7e12e3b481857b9d0a98a1725255/inf/8fNBxYxqTPFwr8eRLfe9O5BHw-gWqXWlYPNIpMIRS-C8G_AtjNBHFWmkAMTZP7S_xYNHT3y4Y1shgdveYDO8GA%3D%3D?uid=0&filename=Снимок%20экрана%202017-07-10%20в%201.27.21.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&size=XXL&crop=0)