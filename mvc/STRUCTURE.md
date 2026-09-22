# Cau truc PHP MVC

```text
mvc/
├── config/                 # Cau hinh he thong, ket noi CSDL
│   └── database.php
├── controllers/
│   ├── admin/              # Dieu huong/chuc nang quan tri
│   └── client/             # Dieu huong/chuc nang nguoi dung
├── helpers/                # Ham dung chung
├── middlewares/            # Kiem tra dang nhap, phan quyen...
├── models/                 # Truy van va thao tac du lieu
├── public/
│   ├── assets/             # CSS, JavaScript
│   └── uploads/            # Thu muc upload moi
├── routes/                 # De tach route khi refactor tiep
├── validates/              # Validate du lieu form
├── views/
│   ├── admin/              # Giao dien quan tri
│   └── client/             # Giao dien khach hang
├── upload/                 # Anh cu giu lai de tuong thich duong dan trong CSDL
└── index.php               # Front controller
```

## Nguyen tac

- `index.php` la diem vao cua ung dung.
- Controller chi xu ly luong nghiep vu va chon view.
- Model chua cac ham truy van CSDL.
- View chi chua phan hien thi.
- Tai nguyen tinh duoc dat trong `public/assets`.
- `admin` va `client` duoc tach rieng trong controllers va views.
- Thu muc `upload/` cu tam thoi duoc giu lai de khong lam hong cac duong dan anh da luu trong CSDL. Cac upload moi co the chuyen dan sang `public/uploads/`.
