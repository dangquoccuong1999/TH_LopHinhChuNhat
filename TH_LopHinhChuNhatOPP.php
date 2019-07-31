<?php

class HinhChuNhat
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function tinhDienTich()
    {
        return $this->width * $this->height;
    }

    public function tinhChuvi()
    {
        return ($this->height + $this->width) * 2;
    }

    public function display()
    {
        return 'HinhChuNhat ' . ' Width :' . $this->width . 'Height : ' . $this->height;
    }
}

$width = 10;
$height = 20;
$hinhChuNhat = new HinhChuNhat($width, $height);

echo $hinhChuNhat -> width;
echo '<br>';
echo $hinhChuNhat -> height;
echo '<br>';
echo 'Dien tich hinh chu nhat la : '. $hinhChuNhat -> tinhDienTich();

?>