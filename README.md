# MFTODO

## Ta'rif
MFTODO PHP, MySQL va Bootstrap orqali yaratilgan oddiy vazifalar boshqarish dasturi. Ushbu dastur foydalanuvchilarga vazifalarini to'g'irlash va o'chirish imkoniyatini beradi, shuningdek ularni yakunlangan deb belgilashga ruxsat beradi.

## Xususiyatlar
- **Yangi vazifalar qo'shish**: Foydalanuvchilar vazifalarini saralash orqali oddiy vazifalar qo'shishi mumkin.
- **Vazifalarni yangilash**: Foydalanuvchilar mavjud vazifalarini o'zgartirishi mumkin.
- **Vazifalarni o'chirish**: Foydalanuvchilar o'zgarishlar qilishi mumkin.
- **Vazifalarni yakunlangan deb belgilash**: Foydalanuvchilar vazifalarini yakunlangan deb belgilash orqali o'zgarishlar qilishi mumkin.
- **Bootstrap bilan moslashtirilgan moslashuv**: Moslashuvchi dizayn Bootstrap yordamida yaratilgan.

## Talablar
- PHP 7.0 yoki undan yuqori versiyasi
- MySQL 5.6 yoki undan yuqori versiyasi
- Composer

## O'rnatish

1. Repositoryni klon qiling:
    ```sh
    git clone https://github.com/SharipovIskandar/MFTODO.git
    cd MFTODO
    ```

2. MySQL ma'lumotlar bazasini yaratib oling va ma'lumotlar bazasini yo'qotgan `database.sql` faylini import qiling:
    ```sql
    CREATE DATABASE mftodo;
    USE mftodo;
    SOURCE database.sql;
    ```

3. `connDB.php` faylidagi ma'lumotlar bazasi ulanish sozlamalarini yangilang:
    ```php
    class cannDB {
        public static function connect(): PDO {
            return new PDO("mysql:host=localhost;dbname=mftodo", "sizning_username", "sizning_parolingiz");
        }
    }
    ```

4. PHP ichki serverini ishga tushiring:
    ```sh
    php -S localhost:8000
    ```

5. Veb-brauzeringizni oching va `http://localhost:8000` manziliga kirib dasturni ishlatishingiz mumkin.
