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


use gringotts;

select count(id) from wizzard_deposits;


select max(magic_wand_size) as longest_magic_wand
from wizzard_deposits;

select distinct deposit_group,magic_wand_size as longest_magic_wand
from wizzard_deposits
order by longest_magic_wand desc,deposit_group;


select deposit_group,MAX(magic_wand_size) as longest_magic_wand from wizzard_deposits
group by deposit_group
order by longest_magic_wand,deposit_group;


select deposit_group from wizzard_deposits
group by deposit_group
order by avg(magic_wand_size)
limit 1;

select deposit_group,sum(deposit_amount) as total_sum from wizzard_deposits
group by deposit_group
order by total_sum;


select count(category_id) from products
where category_id = 2 and price >8;

select
       category_id,
       round(AVG(price),2) as `Average Price`,
       round(MIN(price),2)as `Cheapest Product` ,
       round(MAX(price),2)as `Most Expensive Product`
from
     products
group by
         category_id;


use soft_uni;

select e.employee_id,e.job_title,e.address_id,a.address_text from employees as e
join addresses as a on e.address_id = a.address_id
order by    e.address_id
limit 5;


select employee_id,first_name,salary,depa.name  from employees as emp
join departments as depa on emp.department_id = depa.department_id
where salary>15000
order by emp.department_id desc
limit   5;



select
    employee_id,
    first_name
from employees as emp
right join projects as pro on emp.employee_id=pro.project_id;

select *
from employees;

select *
from projects;

select e.employee_id,e.first_name
from
     employees as e
left join
         employees_projects as p on e.employee_id=p.employee_id
where  p.project_id is null
order by e.employee_id desc
limit 3;

select e.employee_id,e.first_name,if(p2.start_date>=2005-00-00,null,p2.name)as project_name from employees as e
join employees_projects as p on e.employee_id=p.employee_id
left join projects as p2 on p.project_id=p2.project_id
where e.employee_id = 24
order by p2.name;

select * from employees;
select * from departments;


select first_name from employees as x
join departments as y on x.manager_id = y.manager_id
where x.employee_id =3 or x.employee_id=7;

