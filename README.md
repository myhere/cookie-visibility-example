# 说明

> 用于测试 cookie 的可见性 & js cors 请求时携带的 cookie

- `/cookie.php`
  - 设置 cookie
- `/cors.php?host=a.test.com`
  - 发起跨域请求

```bash
# 首先绑定 host
# 127.0.0.1 a.test.com
# 127.0.0.1 b.test.com
# 127.0.0.1 test.com

php -S 127.0.0.1:80
```
