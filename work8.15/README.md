//创建员工表
mysql> create table employee(
    -> id int(11) primary key comment '主键',
    -> name varchar(20) not null comment '员工姓名',
    -> address varchar(20) not null comment '家庭住址'，
    -> phonenumber int(11) not null comment '电话号码',
    -> email char not null comment '电子邮箱'）
-> engine=innodb charset=utf8;

//增加职位和部门字段
mysql> alter table employee add position char(20) not null comment '职位';
mysql> alter table employee add department char(20) not null comment '部门';

//创建部门表
mysql> create table department(
-> id int(11) primary key comment '部门ID',
-> name varchar(20) not null comment '部门名称',
-> department char(20) not null comment '所在部门');

//增加部门地址字段删除部门字段
mysql> alter table department add address char(20) not null comment '部门地址';
mysql> alter table department drop department;

//创建职位表
mysql> create table post( 
-> id int(11) primary key comment '职位ID',  
->name varchar(20) not null comment '职位名称',  
->position char(20) not null comment '所在职位');

//增加所属部门字段删除职位字段
mysql> alter table post add departentment char(20) not null comment '所属部门';
mysql> alter table post drop position;

//创建学生表
mysql> create table stu(
    -> id int primary key comment '学号',
    -> name varchar(20) not null comment '姓名',
    -> age int not null comment '年龄',
    -> sex char not null commet '性别',
    -> address char(20) not null comment '家庭住址',
-> number int(11) not null comment '联系电话');

//增加学历字段
mysql> alter table stu add education char not null comment '学历';
//删除地址字段
mysql> alter table stu drop address;
//更改学历字段的属性
mysql> alter table stu change education edcation varchar(20);
//插入第一条
mysql> insert into stu (id,name,age,sex,number,education) values ('1','A','22','男','123456','小学');
//修改学历
mysql> update stu set education='小学' where id='1';
//插入第二条
mysql> insert into stu (id,name,age,sex,number,education) values ('2','B','21','男','119','中学');
//插入第三条
mysql> insert into stu (id,name,age,sex,number,education) values ('3','C','23','男','110','高中');
//插入第四条
mysql> insert into stu (id,name,age,sex,number,education) values ('4','D','18','女','114','大学');
//修改学生表的数据 11开头的电话 学历改为大专 
mysql> update stu set education='大专' where number like '11%';
//删除学生表的数据以C开头，性别为男的记录删除
mysql> delete from stu where name='C' and sex='男';
//查询学生表的数据，将年龄小于22与为大专的！显示名字和学号
mysql> select name,id from stu where age<'22' and education='大专';
//查询学生表的数据，列出前25%的纪录
mysql> select * from stu where id<=(select count(*)from stu)*0.25;
//查询出所有学生的姓名，性别，年龄降序排序
mysql> select name,sex from stu order by age desc;
//按照性别进行分组查询所有的平均年龄
mysql> select avg(age) as age from stu group by sex;


//创建学员表
mysql> create table user(
    -> userNo int primary key comment '学号',
    -> userName varchar(20) not null comment '学员姓名',
    -> currentUnit char(20) not null comment '所属单位',
-> age int not null comment '学员年龄');

//创建课程表
mysql> create table course(
    -> courseNo int primary key comment '课程编号',
-> courseName varchar(5) not null comment '课程名称');

//创建成绩表
mysql> create table point(
    -> userNo int primary key comment '学号',
    -> courseNo int not null comment '所选课程编号',
-> grade int not null comment '学生成绩');

//通过查询课程名称为’税收基础’的学号和名字
mysql> select userNo,userName from user where userNo in (select userNo from course,point where course.courseNo=point.courseNo and course.courseName='税收基础');
//通过查询课程编号为’C2’的学员名称和所属单位
mysql> select user.userNo,user.userName from user,point where user.userNo=point.userNo and point.courseNo='C2';
//通过查询不选课程编号为’C5’的学员名称和所属单位
mysql> select distinct user.userName,user.currentUnit from user where user.userNo not in (select user.userNo from user,point where user.userNo=point.userNo and point.courseNo='C5');
//查询选修全部课程的学员姓名和所属单位
mysql> select userName,currentUnit from user where userNo in (select userNo from point group by userNo having count(1)=(select count(1) from course));
//查询选修了课程的人数
mysql> select count(*) as count from (select distinct point.userNo from point);
//查询选课超过5门的人数
mysql> select userNo,currentUnit from user where userNo in(select userNo from point group by userNo having count(1)>5);


1.学生信息表 2.赏罚情况表 3，赏项表 4.罚项表 Select student.学号,student.姓名,student.奖金,student.处罚 from学生信息表 left join 赏罚情况表 on (学生信息表.id=赏罚情况表.id) join 赏项表 on(赏罚情况表.赏id=赏项表.赏id) join 罚项表 on (赏罚情况表.罚id=罚项表.罚id) where......;