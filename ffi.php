<?php

    // https://paiza.io/en/projects/new?language=php
    // https://github.com/zhangyue0503/dev-blog/blob/master/php/202004/source/%E8%AE%A9PHP%E8%83%BD%E5%A4%9F%E8%B0%83%E7%94%A8C%E7%9A%84%E5%87%BD%E6%95%B0-FFI%E6%89%A9%E5%B1%95.php
    // create FFI object, loading libc and exporting function printf()

    $ffi = FFI::cdef(
        "int printf(const char *format, ...);", // this is a regular C declaration
        "libc.so.6");
    // call C's printf()
    $ffi->printf("Hello %s!!!!\n", "world");
?>
