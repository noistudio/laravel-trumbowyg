1. composer require noistudio/laravel-trumbowyg
2. Для подключения класса блока добавьте в спец.конфиг
  ` "trumbowyg"=>\LaravelTrumbowyg\blocks\trumbowyg\TrumbowygField::class,`
3. Для работы с изображениями требуется файловый менеджер https://github.com/UniSharp/laravel-filemanager
4. publish files from packages php artisan vendor:publish --tag=laravel-trumbowyg
