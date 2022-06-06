echo off
C:\wamp64\bin\mysql\mysql5.7.31\bin\mysqldump.exe -hlocalhost -uroot resultadosspa > copia_seguridad_%Date:~6,4%%Date:~3,2%%Date:~0,2%.sql
exit