HRIS Project
============

Cara install

- Clone repo ini ke local

```
# git clone https://github.com/deesoft/hris
```

- Lakukan composer update

```
# composer global require "fxp/composer-asset-plugin:1.0.0-beta4"
# cd hris
# composer update --prefer-dist
```

- Inisialisasi projek, pilih dev

```
# ./init
```

- Setting database. Masuk ke folder `application/app/config/common-local.php`
Ubah setingan database sesuai dengan yang diperlukan.

Kontribusi
----------
Ada baiknya anda mem-fork repo ini. Setelah itu tambahkan repo tersebut sebagai remote.

```
# git remote add upstream https://github.com/<username>/hris
```

Untuk mendapatkan kode terbaru dari `deesoft/hris`, lakukan pull. Setelah itu push ke
repository fork

```
# git pull origin
# git push upstream
```