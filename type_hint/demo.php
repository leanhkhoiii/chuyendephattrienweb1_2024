<?php
declare(strict_types=1);

// Nhúng các file trong bảng 2
require_once 'I.php';
require_once 'C.php';
require_once 'A.php';
require_once 'B.php';

// Tạo lớp Demo với 1 phương thức dựa trên mẫu
class Demo
{
    public function typeIReturnA(): I
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
}

// Tạo đối tượng của Demo
$demo = new Demo();

$demo->typeIReturnA(); // Gọi phương thức typeIReturnA
echo "<br>";