CREATE DATABASE  IF NOT EXISTS  plzdb ;

CREATE TABLE IF NOT EXISTS community (

  com_id int(11) NOT NULL AUTO_INCREMENT,
  com_name varchar(80) NOT NULL,
  com_desc varchar(535) DEFAULT NULL,
  date_created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  created_by int(11) NOT NULL,
  
  PRIMARY KEY (com_id),
  UNIQUE KEY com_name (com_name)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

INSERT INTO  community  
( com_id ,  com_name , com_desc ,  date_created , created_by ) VALUES
(1, 'Welcome', 'Check this to know how to get started , Community Guidelines and everthing you need to know about this site','2020-10-03 14:59:29',1),
(2, 'How I got this Job','People can post anonymously about their journey of failures and also success of getting that JOB', '2020-10-03 15:00:18',1),
(3, 'DSA Doubts', 'Got stuck in a question , or have u been battleling an error for too long, post your doubt here ' ,'2015-10-30 15:00:19',2),
(4, 'Study Material ', 'PDFs , courses , To do Best questions, company que lists, they all can go here' ,'2015-10-03 15:00:19',2);

CREATE TABLE usertable(
  idCol int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  usernameCOL TINYTEXT NOT NULL,
  emailCol TINYTEXT NOT NULL,
  passwordCol LONGTEXT NOT NULL
)AUTO_INCREMENT=3;
