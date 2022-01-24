```
composer create-project codeigniter4/appstarter project-root
```

## Step
- copy file env, change to `.env`
- change `CI_ENVIRONMENT = production` to `CI_ENVIRONMENT = development`
- set the database connection, for me:
```
database.default.hostname = localhost
database.default.database = dbhafecs
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.DBPrefix =
```
- run `composer install`
- run `composer update`
- run `php spark migrate`

## Tampilan
### Halaman awal ketika data masih kosong
<hr>
  Data masih kosong dan belum terisi apapun

  ![Halaman awal](md_assets/Screenshot%20(75).png)
### Halaman Tambah data
  <hr>
    Pada halaman tambah data, terdapat form untuk mengisi

    - Nama Leader Project nya
    - Email Leader Project nya
    - Nama Project nya
    - Client Project nya
    - Tanggal mulai dan berakhir
    - Foto Leadernya
        Namun untuk foto baru sebatas tampilan belum terkonek ke database karena menemukan beberapa kendala dan karena waktu terbatas, seblum sempat saya benahi

![Halaman tambah data](md_assets/Screenshot%20(76).png)

### Tampilan halaman tambah data setelah user melakukan pengisian
  <hr>

![Halaman tambah data 2](md_assets/Screenshot%20(78).png)

### Tampilan halaman index setelah user melakukan menambah data
  <hr>
    memiliki alert dan bisa dilihat disebaliknya sudah bertambah satu data dengan progres 0 %
    
![Halaman tambah data 2](md_assets/Screenshot%20(79).png)

### Tampilan halaman Edit/Update data
  <hr>
    Halaman Edit bisa mengedit data yang isiannya hampir sama dengan tambah data, namun karena tidak ada ketentuan project leader yang bersangkutan ataukah admin yang bisa merubah progress maka disini terdapat slider progress yang diubah-ubah.

![Halaman tambah data 2](md_assets/Screenshot%20(80).png)

![Halaman tambah data 2](md_assets/Screenshot%20(81).png)

### Tampilan halaman utama setelah menambah beberapa data

![Halaman tambah data 2](md_assets/Screenshot%20(82).png)

### Menghapus salah satu data
- akan muncul alert sebelum user benar-benar menghapus data
![Halaman_hapus_data_2](md_assets/Screenshot%20(83).png)
- setelah user benar-benar menghapus maka data akan terhapus dan muncul alert kemudian bisa dilihat data telah berkurang satu
![Halaman_hapus_data_2](md_assets/Screenshot%20(84).png)
