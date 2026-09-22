<?php

switch ($admin) {
    case 'commentList':
        $list_comment = load_all_comment();
        include __DIR__ . '/../../views/admin/comment/list.php';
        break;
    case 'commentDelete':
        delete_comment($id);
        header("location: ?act=admin&admin=commentList");
        break;
}
