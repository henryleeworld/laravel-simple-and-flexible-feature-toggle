# Laravel 13 簡單且靈活的功能開關

引入 offload-project 的 laravel-toggle 套件來擴增簡單且靈活的功能開關，使團隊能動態控制應用程式功能，而無需重新部署程式碼，這讓開發者能安全且有針對性地推出，加快實驗速度，降低風險，讓開發者能靈活掌控應用程式行為，並迅速回應不斷變化的業務或客戶需求。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/` 來進行歡迎畫面瀏覽。

----

## 畫面截圖
![](https://i.imgur.com/k8y9kV9.png)
> 開啟範例一功能

![](https://i.imgur.com/2m3LP9w.png)
> 開啟範例二功能
