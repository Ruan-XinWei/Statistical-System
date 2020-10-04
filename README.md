# Database-Course-Design（数据库课程设计）

## 简要介绍

这个数据库课程设计主要使用了HTML、CSS、JavaScript和PHP四种编程语言和数据库MYSQL来完成。设计的是一个学生课外活动成果统计系统，通过这个统计系统能够对学生的课外活动成果进行统计、整理，通过这种方式可以大大减少一些统计部门的工作，并且可以保证数据的完整性、一致性与安全性。  

首先，这个系统简单地设计成了学生端和管理员端，学生端主要有修改自己的一些信息和查询信息的功能，管理员端则还具备了修改数据的功能，包括添加数据、更新数据和删除数据，能够利用这些功能直接地操作统计的数据。  

然后，这个系统也包含了登录和注册功能。使用登录功能就可以很好地通过用户名和密码登录到对应的学生端或者是管理员端。同时，有登录就需要有注册，注册功能是通过提供一些信息，然后也可以注册学生账号或者是管理员账号。  

以上就是这个系统的简要介绍，具体的一些实现或者是介绍部分在课程设计报告中也有很好地体现。  

## 仓库结构

1. .vscode：我使用的是vscode来完成的，所以有一些vscode配置文件保留在这里，可以忽略这个文件夹。
2. html：HTML页面保存位置，除了我将index.html提取到项目最前端。
3. img：图片保存位置，这里只有一张普通武汉科技大学logo和一张去除背景的武汉科技大学logo
4. php：php保存位置
   1. page：主要页面保存位置，这个文件夹中的文件都符合一定的命名规则，就不一一赘述，以personal_center_page/main_info.php为例。personal_center_page是页面的主要分类，personal_center就是个人中心下的所有页面，其他的也是相同的。文件夹下面的文件就是对应各个页面，main_info.php就是个人中心下的个人信息页面，但这是管理员端下的，如果是学生端下的，则页面会添加后缀_student，例如main_info_student.php。
   2. config.php：一些配置信息，便于其他文件进行通用。
   3. db-inc.php：数据库操作的一些函数。这个文件也因为所有需要操作数据库的文件都包含了，在后期我想添加一个URL检查功能，就利用这个特点，将URL检查功能添加到这个文件里面。当然这是个投机取巧的方法。
   4. enroll.php：实现注册功能。
   5. init.php：将整个数据库以特定的数据进行初始化。
   6. login.php：实现登录功能。
   7. main_change_info_php.php：实现个人信息修改功能。
   8. 另外三个是实现过程中用于测试的残留文件。
5. script：JavaScript保存位置
   1. exit.js：退出系统。
   2. getUrlParam.js：使用获取当前URL。
   3. init.js：初始化功能。
   4. main_info.js：在页面上添加个人信息。
   5. myFunction.js：一些整合的函数。
6. style：css保存位置
   1. fa：icon图标需要的部分css。
   2. main_info.css：系统的css文件。
   3. main.css：登录、注册界面的css文件。
   4. reset.css：重置样式css文件。
7. 课程设计报告：包含了Word版和PDF版。
8. <span>README.md</span>：仓库概述。
9. index.html：统计系统的初始页面。

## 系统使用

1. 首先安装wampserver集成环境，减少一些配置问题，只关注代码问题
   1. wampserver官网：https://www.wampserver.com/
   2. wampserver安装：https://sourceforge.net/projects/wampserver/files/
2. 将仓库克隆到`wampserver/www`目录下
3. 开启wampserver服务
4. 先输入URL：http://localhost:80/database-course-design/php/init.php 进行MYSQL初始化 (端口号默认是80，如果没有修改可以不用填写，否则就填写对应端口号)
5. 然后输入URL：http://localhost:80/database-course-design 进入系统 (端口号部分与上相同)