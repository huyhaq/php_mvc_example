# mvc_training

# hướng dẫn 
```
Tạo controller: php artisan make:controller <Tên Controller>
ví dụ 
php artisan make:controller Cart
```
# tạo router
trong thư mục config route:
Thêm route
$routes['đường dẫn'] = 'Tên controller/tên hàm trong controller';
ví dụ
$routes['add-user'] = 'home/get_user';

# config db ở trong file configs/database.php

# view 

layout trong thư mục app/views/layout
tham khảo file users/add hoặc carts/index