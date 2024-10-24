![PilihWRI!](docs/img/homepage_view.png)

# Bagaimana menjalankan proyek website ini?
1. Kloning repository
    ```bash
    git clone https://github.com/FarrelAD/Kuliah-Web-Basic.git
    ```
2. Pindah direktori ke `09-UTS/`
    ```bash
    cd 09-UTS
    ```
3. Jalankan command berikut
    ```bash
    php -S localhost:8000
    ```
    > ⚠️ Pastikan port yang digunakan belum dipakai oleh proses yang lain

    <details>
        <summary>Command PHP bermasalah ?</summary>

        Masalah ini dikarenakan command PHP masih belum dikenali oleh sistem operasi. Pastikan bahwa anda sudah menambahkan path bin PHP ke dalam environment variable komputer anda. 

        Jika menggunakan Laragon:
        Direktori bin PHP di Laragon biasa ditemukan di path:
        ```
        <parent-directory>\laragon\bin\php\php-<version>-Win32-vs16-x64
        ```

        Jika menggunakan XAMPP:
        Direktori bin PHP di Laragon biasa ditemukan di path:
        ```
        <parent-directory>\xampp\php
        ```

  
    </details>

4. Buka browser pada URL `http://localhost:8000`

    Jika melihat halaman website seperti gambar di atas, maka sudah dipastikan program berhasil. Jika tidak, maka ulangi proses di atas dan pastikan tidak ada yang terlewat.