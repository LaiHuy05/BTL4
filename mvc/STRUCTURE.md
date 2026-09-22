# Cấu trúc PHP MVC

```text
mvc/
├── config/
│   └── database.php
├── controllers/
│   ├── admin/
│   │   ├── admin_controller.php
│   │   ├── dashboard_controller.php
│   │   ├── category_controller.php
│   │   ├── product_controller.php
│   │   ├── account_controller.php
│   │   ├── comment_controller.php
│   │   └── order_controller.php
│   └── client/
│       ├── client_controller.php
│       ├── home_controller.php
│       ├── auth_controller.php
│       ├── product_controller.php
│       ├── cart_controller.php
│       ├── checkout_controller.php
│       ├── profile_controller.php
│       └── comment_controller.php
├── helpers/
├── middlewares/
├── models/
├── public/
│   ├── assets/
│   └── uploads/
├── routes/
│   ├── admin.php
│   └── client.php
├── validates/
├── views/
│   ├── admin/
│   └── client/
├── upload/
└── index.php
```

## Luồng xử lý

- `index.php` là front controller, chọn luồng admin hoặc client.
- `routes/admin.php` và `routes/client.php` ánh xạ action sang controller chức năng.
- `admin_controller.php` và `client_controller.php` chỉ nạp model, lấy tham số route và gọi controller con.
- Controller con được tách theo chức năng: sản phẩm, danh mục, tài khoản, đơn hàng, giỏ hàng, đăng nhập...
- `models/` chứa các hàm truy vấn và thao tác CSDL.
- `views/admin/` và `views/client/` tách riêng giao diện quản trị và khách hàng.
- `public/assets/` chứa CSS/JavaScript.
- `upload/` cũ vẫn được giữ để không làm hỏng đường dẫn ảnh đã lưu trong CSDL. `public/uploads/` dùng cho hướng refactor tiếp theo.
