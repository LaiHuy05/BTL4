<?php

switch ($client) {
  case 'profile':
      $list_account = load_all_account(); // Lấy dữ liệu từ CSDL
      include VIEW_PATH . '/client/profile/profile.php';
      break;
  case 'detailProfile':
      $list_category = load_all_category();
      $listAll_product = load_all_product();
      $list_account = load_all_account(); // Lấy dữ liệu từ CSDL        
      include VIEW_PATH . '/client/profile/profile-detail.php';
      break;
  case 'payProfile':
      $listAll_product = load_all_product();
      $list_orderdetail = load_all_orderdetail();
      $list_account = load_all_account(); // Lấy dữ liệu từ CSDL
      $list_cart = load_all_cart();
      $list_cartDetail = load_all_cartDetail();
      $list_category = load_all_category();
      $list_order = load_all_order();
      include VIEW_PATH . '/client/profile/profile-pay.php';
      break;
  case 'payfinal':
      $listAll_product = load_all_product();
      $list_account = load_all_account(); // Lấy dữ liệu từ CSDL
      $list_cart = load_all_cart();
      $list_cartDetail = load_all_cartDetail();
      $list_orderdetail = load_all_orderdetail();
      $list_category = load_all_category();
      $list_order = load_all_order();
      include VIEW_PATH . '/client/profile/profile-payfinal.php';
      break;
  case 'finaldh':
      $idtk = $_GET['idtk'];
      $iddh = $_GET['id'];
      $value = $_GET['value'];
      update_order($iddh, $value);
      // header("Location: ?client=cart&iduser=$idtk");

      header("location: ?client=payfinal&iduser=$idtk");
      break;
}
