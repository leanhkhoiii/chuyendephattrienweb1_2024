<?php
declare(strict_types=1);

// Nhúng các file I.php, C.php, A.php, B.php
require_once 'I.php';
require_once 'A.php';
require_once 'B.php';
require_once 'C.php';

class Demo
{
    // Trường hợp X là A
    public function typeAReturnA(): A
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeAReturnB(): A
    {
        echo __FUNCTION__ . "<br>";
        return new B(); // Lỗi: phương thức trả về A nhưng trả về B
    }

    public function typeAReturnC(): A
    {
        echo __FUNCTION__ . "<br>";
        return new C(); // Lỗi: phương thức trả về A nhưng trả về C
    }

    public function typeAReturnI(): A
    {
        echo __FUNCTION__ . "<br>";
        return new A(); // Chấp nhận đối tượng A
    }

    public function typeAReturnNull(): ?A
    {
        echo __FUNCTION__ . "<br>";
        return null; // Chấp nhận null
    }

    // Trường hợp X là B
    public function typeBReturnA(): B
    {
        echo __FUNCTION__ . "<br>";
        return new A(); // Lỗi: phương thức trả về B nhưng trả về A
    }

    public function typeBReturnB(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeBReturnC(): B
    {
        echo __FUNCTION__ . "<br>";
        return new C(); // Lỗi: phương thức trả về B nhưng trả về C
    }

    public function typeBReturnI(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B(); // Chấp nhận đối tượng B
    }

    public function typeBReturnNull(): ?B
    {
        echo __FUNCTION__ . "<br>";
        return null; // Chấp nhận null
    }

    // Trường hợp X là C
    public function typeCReturnA(): C
    {
        echo __FUNCTION__ . "<br>";
        return new A(); // Lỗi: phương thức trả về C nhưng trả về A
    }

    public function typeCReturnB(): C
    {
        echo __FUNCTION__ . "<br>";
        return new B(); // Lỗi: phương thức trả về C nhưng trả về B
    }

    public function typeCReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnI(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C(); // Chấp nhận đối tượng C
    }

    public function typeCReturnNull(): ?C
    {
        echo __FUNCTION__ . "<br>";
        return null; // Chấp nhận null
    }

    // Trường hợp X là I
    public function typeIReturnA(): I
    {
        echo __FUNCTION__ . "<br>";
        return new A(); // Chấp nhận đối tượng A
    }

    public function typeIReturnB(): I
    {
        echo __FUNCTION__ . "<br>";
        return new B(); // Chấp nhận đối tượng B
    }

    public function typeIReturnC(): I
    {
        echo __FUNCTION__ . "<br>";
        return new C(); // Chấp nhận đối tượng C
    }

    public function typeIReturnI(): I
    {
        echo __FUNCTION__ . "<br>";
        return new A(); // Chấp nhận đối tượng I (giả định là A)
    }

    public function typeIReturnNull(): ?I
    {
        echo __FUNCTION__ . "<br>";
        return null; // Chấp nhận null
    }

    // Trường hợp X là Null
    public function typeNullReturnA(): ?A
    {
        echo __FUNCTION__ . "<br>";
        return new A(); // Chấp nhận đối tượng A
    }

    public function typeNullReturnB(): ?B
    {
        echo __FUNCTION__ . "<br>";
        return new B(); // Chấp nhận đối tượng B
    }

    public function typeNullReturnC(): ?C
    {
        echo __FUNCTION__ . "<br>";
        return new C(); // Chấp nhận đối tượng C
    }

    public function typeNullReturnI(): ?I
    {
        echo __FUNCTION__ . "<br>";
        return new A(); // Chấp nhận đối tượng A
    }

    public function typeNullReturnNull(): ?C
    {
        echo __FUNCTION__ . "<br>";
        return null; // Chấp nhận null
    }
}

// Tạo đối tượng Demo và thử gọi các phương thức
$demo = new Demo();


    // Gọi tất cả các phương thức
     $demo->typeAReturnA();  "<br>";
     $demo->typeAReturnB();  "<br>"; // Sẽ gây lỗi -> False
     $demo->typeAReturnC();  "<br>"; // Sẽ gây lỗi -> False
     $demo->typeAReturnI();  "<br>";
     $demo->typeAReturnNull();  "<br>";

     $demo->typeBReturnA();  "<br>"; // Sẽ gây lỗi -> False
     $demo->typeBReturnB();  "<br>";
     $demo->typeBReturnC();  "<br>"; // Sẽ gây lỗi -> False
     $demo->typeBReturnI();  "<br>";
     $demo->typeBReturnNull();  "<br>";

     $demo->typeCReturnA();  "<br>"; // Sẽ gây lỗi -> False
     $demo->typeCReturnB();  "<br>"; // Sẽ gây lỗi -> False
     $demo->typeCReturnC();  "<br>";
     $demo->typeCReturnI();  "<br>";
     $demo->typeCReturnNull();  "<br>";

     $demo->typeIReturnA();  "<br>";
     $demo->typeIReturnB();  "<br>";
     $demo->typeIReturnC();  "<br>";
     $demo->typeIReturnI();  "<br>";
     $demo->typeIReturnNull();  "<br>";

     $demo->typeNullReturnA();  "<br>";
     $demo->typeNullReturnB();  "<br>";
     $demo->typeNullReturnC();  "<br>";
     $demo->typeNullReturnI();  "<br>";
     $demo->typeNullReturnNull();  "<br>";



