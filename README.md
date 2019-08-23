# PHP跨域Demo

PHP解决跨域问题demo

- 支持请求方法限定
- 支持Origin
- 支持自定义请求头

## 测试

本项目需要启动两个域的服务器才会有跨域访问：

1. 项目根目录执行 php -S localhost:10000 启动PHP服务器
2. 安装Node.js的http-server模块 `npm install http-server -g`

3. 项目根目录执行 hs 启动Node.js服务器，默认监听 localhost:80000
4. 浏览器访问 http://localhost:8080即可看到两个按钮，点击之后查看浏览器console和network栏即可

