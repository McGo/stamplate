<?php

namespace McGo\Stamplate\Commands;

trait FileHelper
{
    public function source()
    {
        return base_path() . '/vendor/mcgo/stamplate/files';
    }

    public function destination()
    {
        return base_path();
    }

    public function filesAsArray($dir, $prefix = '/')
    {
        $result = array();
        $cdir = scandir($dir);
        foreach ($cdir as $key => $value) {
            if (!in_array($value, array(".", "..", ".DS_Store"))) {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                    $result = array_merge(
                        $result,
                        $this->filesAsArray($dir . DIRECTORY_SEPARATOR . $value, $prefix . '' . $value . '/')
                    );
                } else {
                    $result[] = $prefix . $value;
                }
            }
        }
        return $result;
    }

    public function copyInstallFile($filename)
    {
        $this->copyFile('install', $filename);
    }

    public function copyUpdateFile($filename)
    {
        $this->copyFile('update', $filename);
    }

    private function copyFile($type, $filename)
    {
        $s1 = $this->source().'/'.$type.$filename;
        $s2 = $this->destination().$filename;
        $path = pathinfo($s2);
        if (!file_exists($path['dirname'])) {
            mkdir($path['dirname'], 0777, true);
        }
        if (!copy($s1,$s2)) {
            echo "copy failed \n";
        }
    }
}