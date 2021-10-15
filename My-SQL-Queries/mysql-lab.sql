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

create table minions (
  id int not null primary key auto_increment,
  name varchar(200) ,
  age int not null default '0',
  town_id int not null default '0'

);
create table towns(
    id int primary key auto_increment,
    name varchar(200) not null
);
insert into minions(name, age, town_id)
values ('Kevin',22,1),('Bob',15,3),('Steward',null,2);
insert into towns(name)
values  ('Sofia'),('Plovdiv '),('Varna');

truncate table minions;
drop table minions;
drop table towns;

use soft_uni;
select department_id,name,manager_id from departments
order by department_id;

select name from departments
order by department_id;

select first_name,last_name,salary from employees
order by employee_id;

select first_name,middle_name,last_name from employees
order by employee_id;

select concat(first_name,'.',last_name, '@softuni.bg' ) as full_email_addressl  from employees;

select distinct  salary from employees
order by salary;

select * from employees
where job_title = 'Sales Representative'
order by employee_id;


select first_name,last_name,job_title from employees
where salary between 20000 and 30000;

select concat(first_name,' ',middle_name,' ',last_name) as full_name from employees
where salary = 25000 or salary = 14000 or salary = 12500 or salary = 236000;

select * from employees;

select first_name,last_name from  employees
where manager_id  is null;


select first_name,last_name,salary from    employees
where salary >50000
order by salary desc;

select  first_name,last_name from  employees
order by salary desc
limit 5;

select first_name,last_name from employees
where department_id != 4;


select * from employees
order by salary desc ,first_name asc ,last_name desc,middle_name asc ;


select distinct job_title from employees
order by job_title;

select project_id,name,description,start_date,end_date from  projects
order by start_date,name,project_id
limit  10;

select first_name,last_name,hire_date from  employees
order by hire_date desc
limit 7;
update  employees
set salary = salary * 1.12 where department_id in (1,2,4,11);
select salary from employees;

use geography;
select peak_name from peaks
order by peak_name asc;

select country_name,population from countries
where continent_code = 'EU'
order by population desc,country_name asc
limit 30;




select country_name,country_code,IF(currency_code ='EUR','Euro','Not Euro') as Currency from countries
order by country_name;



