# PHP跨域Demo

PHP解决跨域问题demo

- 支持请求方法限定
- 支持Origin
- 支持自定义请求头

## 测试

本项目需要启动两个域的服务器才会有跨域访问：

1. 项目根目录执行 php -S localhost:10000 启动PHP服务器，作为API使用
2. 新开终端，项目根目录执行 php -S localhost:10001 启动PHP服务器，作为前端使用
4. 浏览器访问 http://localhost:10001即可看到两个按钮，点击之后查看浏览器console和network栏即可

