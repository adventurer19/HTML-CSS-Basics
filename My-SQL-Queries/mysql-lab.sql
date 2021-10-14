create database softuni
create table `students`
(
    'first_name'  nvarchar(50) not null,
    'last_name'   nvarchar(50) not null,
    'number'      int          not null not null,
    'phone'       int          not null not null,
    'record_date' datetime     not null,
    'is_active'   binary       not null
)
drop table students
drop database softuni
