 
@echo off
SetLocal EnableDelayedExpansion
cd C:\wamp64\bin\mysql\mysql5.7.36\data
for /d %%i in (*) do (
if /I %%i NEQ performance_schema if /I %%i NEQ mysql if /I %%i NEQ sys C:\wamp64\bin\mysql\mysql5.7.36\bin\mysqldump --user=root --databases %%i > U:\59011-14-05\backup_bdd\backup_%%i_%DATE:~6,4%%DATE:~3,2%%DATE:~0,2%.sql  
)

EndLocal