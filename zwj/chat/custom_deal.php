<?php



set_time_limit(0);
require('./conn.php');
$maxInvalidCount = 1;//每隔1秒重新请求一次服务器
$requestType = $_POST['request_type'];
switch ($requestType) {
    case 'get_message'://客户端请求读取消息
        break;
    case 'confirm_read'://客户端确认已经读取了信息,服务端需要更新读取状态

      $idsArr = $_POST['send_data'];
       $ids = implode(',', $idsArr);
       $sql = "update msg set isread =1  where mid in ({$ids})";
        mysqli_query($link, $sql);
        mysqli_close($link);
        break;
    default:
        break;
}

$rec = $_POST['rec'];
$sql = "select * from msg where  rec='$rec' and isread=0";
$i = 0;
while(true) {
    //读取数据
    $result = mysqli_query($link, $sql);
    if ($result) {
        $returnArr = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $row['send_time'] = date('Y-m-d H:i:s', $row['createtime']);
            $returnArr[] = $row;
        }
        if (!empty($returnArr)) {
            //返回结果
            $data = [
                'status' => 1,
                'response_type' => 'is_read',
                'info' => $returnArr,
            ];
            echo json_encode($data);
            mysqli_free_result($result);
            mysqli_close($link);
            exit();
        }
    }
    $i++;
    //需要给客户端发送确认信息是否还在连接服务器,客户端无回应则整个过程结束
    if ($i == $maxInvalidCount) {
        $data = [
            'status' => 1,
            'response_type' => 'is_connecting',
            'info' => '',
        ];
        echo json_encode($data);
        mysqli_close($link);
        exit();
    }


    sleep(1);
}