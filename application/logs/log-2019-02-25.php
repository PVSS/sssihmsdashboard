<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-02-25 18:20:16 --> Query error: Table 'employees_ci_js.employees' doesn't exist - Invalid query: SELECT date_format(hire_date,'%Y') as hire_year
                        , COUNT(date_format(hire_date,'%Y')) as total 
                FROM employees
                WHERE date_format(hire_date,'%Y') 
                    BETWEEN '1969' AND '2010'
                GROUP BY date_format(hire_date,'%Y')
ERROR - 2019-02-25 18:30:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'' at line 4 - Invalid query: SELECT date_format(from_date,'%Y') as hire_year
                        , COUNT(date_format(from_date,'%Y')) as total 
                FROM  
                WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'
                GROUP BY date_format(from_date,'%Y')
ERROR - 2019-02-25 18:30:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'' at line 4 - Invalid query: SELECT date_format(from_date,'%Y') as hire_year
                        , COUNT(date_format(from_date,'%Y')) as total 
                FROM  
                WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'
                GROUP BY date_format(from_date,'%Y')
ERROR - 2019-02-25 18:30:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'' at line 4 - Invalid query: SELECT date_format(from_date,'%Y') as hire_year
                        , COUNT(date_format(from_date,'%Y')) as total 
                FROM  
                WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'
                GROUP BY date_format(from_date,'%Y')
ERROR - 2019-02-25 18:30:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'' at line 4 - Invalid query: SELECT date_format(from_date,'%Y') as hire_year
                        , COUNT(date_format(from_date,'%Y')) as total 
                FROM  
                WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'
                GROUP BY date_format(from_date,'%Y')
ERROR - 2019-02-25 18:30:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'' at line 4 - Invalid query: SELECT date_format(from_date,'%Y') as hire_year
                        , COUNT(date_format(from_date,'%Y')) as total 
                FROM  
                WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'
                GROUP BY date_format(from_date,'%Y')
ERROR - 2019-02-25 18:30:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'' at line 4 - Invalid query: SELECT date_format(from_date,'%Y') as hire_year
                        , COUNT(date_format(from_date,'%Y')) as total 
                FROM  
                WHERE date_format(from_date,'%Y') 
                    BETWEEN '1969' AND '2010'
                GROUP BY date_format(from_date,'%Y')
ERROR - 2019-02-25 18:30:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE date_format(from_date,'%Y') 
                    BETWEEN '1992' AND '2010'' at line 4 - Invalid query: SELECT date_format(from_date,'%Y') as hire_year
                        , COUNT(date_format(from_date,'%Y')) as total 
                FROM  
                WHERE date_format(from_date,'%Y') 
                    BETWEEN '1992' AND '2010'
                GROUP BY date_format(from_date,'%Y')
ERROR - 2019-02-25 18:32:26 --> Query error: Table 'employees_ci_js.employees' doesn't exist - Invalid query: SELECT date_format(hire_date,'%Y') as hire_year
                        , COUNT(date_format(hire_date,'%Y')) as total 
                FROM employees
                WHERE date_format(hire_date,'%Y') 
                    BETWEEN '1992' AND '2010'
                    AND gender = 'M'
                GROUP BY date_format(hire_date,'%Y')
ERROR - 2019-02-25 18:32:27 --> Query error: Table 'employees_ci_js.employees' doesn't exist - Invalid query: SELECT date_format(hire_date,'%Y') as hire_year
                        , COUNT(date_format(hire_date,'%Y')) as total 
                FROM employees
                WHERE date_format(hire_date,'%Y') 
                    BETWEEN '1992' AND '2010'
                    AND gender = 'M'
                GROUP BY date_format(hire_date,'%Y')
ERROR - 2019-02-25 18:32:27 --> Query error: Table 'employees_ci_js.employees' doesn't exist - Invalid query: SELECT date_format(hire_date,'%Y') as hire_year
                        , COUNT(date_format(hire_date,'%Y')) as total 
                FROM employees
                WHERE date_format(hire_date,'%Y') 
                    BETWEEN '1992' AND '2010'
                    AND gender = 'M'
                GROUP BY date_format(hire_date,'%Y')
ERROR - 2019-02-25 18:32:28 --> Query error: Table 'employees_ci_js.employees' doesn't exist - Invalid query: SELECT date_format(hire_date,'%Y') as hire_year
                        , COUNT(date_format(hire_date,'%Y')) as total 
                FROM employees
                WHERE date_format(hire_date,'%Y') 
                    BETWEEN '1992' AND '2010'
                    AND gender = 'M'
                GROUP BY date_format(hire_date,'%Y')
ERROR - 2019-02-25 18:34:27 --> Query error: Unknown column 'gender' in 'where clause' - Invalid query: SELECT date_format(from_date,'%Y') as hire_year
                        , COUNT(date_format(from_date,'%Y')) as total 
                FROM dept_emp
                WHERE date_format(from_date,'%Y') 
                    BETWEEN '1992' AND '2010'
                    AND gender = 'M'
                GROUP BY date_format(from_date,'%Y')
ERROR - 2019-02-25 18:37:39 --> Query error: Unknown column 'gender' in 'field list' - Invalid query: SELECT 
                    SUM(CASE WHEN gender = 'F' THEN 1 ELSE 0 END) AS female
                    ,SUM(CASE WHEN gender = 'M' THEN 1 ELSE 0 END) AS male
                FROM dept_emp
                WHERE date_format(from_date,'%Y') 
                        BETWEEN '1992' AND '2010'
ERROR - 2019-02-25 18:37:41 --> Query error: Unknown column 'gender' in 'field list' - Invalid query: SELECT 
                    SUM(CASE WHEN gender = 'F' THEN 1 ELSE 0 END) AS female
                    ,SUM(CASE WHEN gender = 'M' THEN 1 ELSE 0 END) AS male
                FROM dept_emp
                WHERE date_format(from_date,'%Y') 
                        BETWEEN '1992' AND '2010'
ERROR - 2019-02-25 18:37:41 --> Query error: Unknown column 'gender' in 'field list' - Invalid query: SELECT 
                    SUM(CASE WHEN gender = 'F' THEN 1 ELSE 0 END) AS female
                    ,SUM(CASE WHEN gender = 'M' THEN 1 ELSE 0 END) AS male
                FROM dept_emp
                WHERE date_format(from_date,'%Y') 
                        BETWEEN '1992' AND '2010'
ERROR - 2019-02-25 18:39:09 --> Query error: Not unique table/alias: 'dept_emp' - Invalid query: SELECT 
                        departments.dept_name,
                    COUNT(dept_emp.emp_no) total
                FROM departments
                LEFT JOIN dept_emp ON departments.dept_no = dept_emp.dept_no
                JOIN dept_emp ON dept_emp.emp_no = dept_emp.emp_no
                WHERE date_format(dept_emp.from_date,'%Y') 
                                    BETWEEN '1992' AND '2010'
                GROUP BY departments.dept_name
