CREATE DATABASE php_dev;

CREATE TABLE emp_info(
  e_id int UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  e_name VARCHAR(20) NOT NULL ,
  e_dept VARCHAR(20) NOT NULL ,
  date_of_birth DATETIME NOT NULL ,
  date_of_entry DATETIME NOT NULL
);

INSERT INTO emp_info VALUE
  (1,'Tom','企划部','2010-06-03 00:00:00','2017-06-03 00:00:00'),
  (2,'Kim','开发部','2010-07-03 00:00:00','2016-06-03 00:00:00'),
  (3,'Kitty','运营部','2010-08-03 00:00:00','2015-06-03 00:00:00'),
  (4,'Shawn','销售部','2010-09-03 00:00:00','2014-06-03 00:00:00'),
  (5,'Shuanger','内训部','2010-10-03 00:00:00','2013-06-03 00:00:00');


INSERT INTO emp_info(e_name, e_dept, date_of_birth, date_of_entry) VALUE
  ('张三','企划部','2011-06-03 00:00:00','2017-05-03 00:00:00'),
  ('李四','开发部','2011-07-03 00:00:00','2016-05-03 00:00:00'),
  ('路人甲','运营部','2011-08-03 00:00:00','2015-05-03 00:00:00'),
  ('少侠','销售部','2011-09-03 00:00:00','2014-05-03 00:00:00'),
  ('令狐冲','内训部','2011-10-03 00:00:00','2013-05-03 00:00:00');


SELECT *
FROM emp_info;

DELETE FROM emp_info;