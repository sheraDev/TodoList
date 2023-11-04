
<div align="center">
  <h1>TodoList</h1>
  <div>
  <img src="https://readme-typing-svg.demolab.com?font=Iosevka+Nerd+Font&weight=900&pause=1000&color=6791C9&background=0C0E0F00&center=true&vCenter=true&width=700&lines=A+Todo+List+written+in+PHP+with+a+dynamic+JS+UI">
  <br>
    
  <img src="https://img.shields.io/badge/VSCode-0078D4?style=for-the-badge&logo=visual%20studio%20code&logoColor=white">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white">
  <img src="https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E">
  <img src="https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white">
  <img src="https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=Apache&logoColor=white">
</div>
</div>

<br>

# Main overview
![Peek 04-11-2023 19-35](https://github.com/sheraDev/TodoList/assets/147320827/22cfb6b9-b222-4977-bbdc-be86b339cb52)


# Install
First you need to install Apache, MySQL/MariaDB and PHP. Then copy paste thoses SQL commands in your MySQL/MariaDB command line:

```sql
CREATE DATABASE todo;
USE todo;

CREATE TABLE `tasks` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
)
```
