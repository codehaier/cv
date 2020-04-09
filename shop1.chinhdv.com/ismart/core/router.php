<?php
//Triệu gọi đến file xử lý thông qua request

$request_path = MODULESPATH . DIRECTORY_SEPARATOR . get_module() . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . get_controller().'Controller.php';

if (file_exists($request_path)) {
    require $request_path;
} else {
    echo "Không tìm thấy:$request_path ";
    
}

$action_name = get_action().'Action';

call_function(array('construct', $action_name));

// if(!is_login() && get_action() != 'login' && get_action() != 'reg' && get_action() != 'ok' && get_action() != 'reset'){ //nếu chưa login, và action != login và action != reg thì chuyển hướng
// 	redirect('?mod=user&action=login');
// }



?>

