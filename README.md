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


## 结论

> 记录下，今天发现个 cors `credentials`  的误解 😂

* cors
    * js 中 `credentials=include`  携带过去的 cookie 是 requested domain 的 cookie，不是当前域下的 cookie；携带的哪些 cookie 准守 cookie 本来的可见性

* cookie 可见性
    * HostOnly
        * __HostOnly 的 cookie，只能当前域名读取到__，其子域名也读取不到
        * 设置 cookie 时将 `domain` 字段置为空，则为 HostOnly 的 cookie；
            * 其他情况都不是 HostOnly 的cookie，即使 domain 字段跟当前域名完全一样，也不是 HostOnly 的 cookie，这时候相当于 `.xx.com` ，会自动在前面带个 `.` ，是子域名可见的
    * 子域名可以设置 cookie 的 domain 字段为父域名，反过来不行
    * HttpOnly
        * js 读取不到
