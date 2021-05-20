# sudo vim /etc/php/7.4/cli/php.ini
# FFI = true 
# FFI (Foreign Function Interface) 允許從用戶區調用 C 代碼執行, php version >= 7.4

<?php

$ffi = FFI::cdef(
    "int printf(const char *format, ...);",
    "libc.so.6");

$ffi->printf("Hello %s\n", "world");
?>
