

## Real Estate - Unit  

sserver {
listen 80;
server_name 137.184.231.199;
root /html/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

    index index.html index.htm index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ .php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /.(?!well-known).* {
        deny all;
    }
}

ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAACAQDMys/HDIyAlmdbbdaI29yt6h632C/gnSXh5O3GlR/xcsiTUFzId28uj4E/xXZEEqhhtDJ3WpPLp83uYu3GuYB+lRESjsXzr8ks1b+ff9aHfmNew6JGDL7w7U/CLjR8VPZ2swM8ys8G9IWoUyFzWiyEm1qfLdKMW59QzuWhH6t3ifzpcDMvflwUg1NxLEyovB/5TmCsEvpPUkSsXh0Cc/MxL2Bl6/YrqKe7Q5dw5+owV9EtUEfRnfo0HYwF2rzKOmz14YQiO39udUnDgClHwh2A8O/xGC/nnfNOUUIbeYiU/HGv0cOsh/CPhxw5twezvMBYEru8r0dxIrIzsvyGQjzhTFkS2TE3IYGI2cS4WItM28t0ENS6K6IMjy7D6btvNQQkLuNSrcZYFLIvwsqUl4LC7eQ4nBVolXj+9I1c9DagSuohKrL8wwV5+kBIoRDQJ8WkRIX+3/z8II+Sl+Uc+PVALJTTRm9VDz6csakIuqmPlQTpzfuuwLr562o4lpklGvjpA5BVB2wbBBhpbeYnx9C3A3Y1CToA6hl0OFF7+lMU98lkAo7oQENHzBXw8XMQmfOwG579+NfiNvgX8MMRj1zXLUtpxP5zrDRvGAytYJLEpuBs3bCI+9zd727n6KR8sRiUbV6tfyG8aQryWYpEwTC5l27EzHIePxvz5estGDwvUw== github





ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAACAQCzW7vgyjQD7sIMJw93+cQ7YMeN3oJ3jvEbMnPWBrfL01MYheOrscHm8vtiq2eSoViaHZ7whY7MjqHngkQVknvRawU2dRGgM0VHD/bqolBDSZAUfn5PeMUo1e4nxB4t2fGWbPBdCa0jcoKE8QFaG53wtvlj70c6BxBhO95o0OaObMl3vlb1J5tzXcqc1WYiKRQTbVuJ83kCQejq9O0gGdR1Jl2N6aGvrA7ymsO1CLHjfGtG2LfKfyHqGnxMVxYzsk+3YZfE3mpjv6LZeR+F00eudk+aPRrtVmSj9TNID4dWkDVThaCOl4ni8gfG5x1+U68+JAGgC2N6nksD/pPU724DEgLx0elu5KC2NsIIgHvOhQe0KGGLba7c6CGoKA3QgBqy/r0R3QAgCHwmaVReusDKgtu4iMOrTc3WXP9QtY4OqwJVQR34f4S49R9pHRnmp0qqanBsLLhHqFrKyl8j2amb45o5zxMosUry9b6caysgFXs7oaIF+R9OT0/amBov1FfOM35SJ7iuDoyis5gIYG72OecL4q4rBzLVn8G+Q+t6HNI/h45KYeLOu1C/3Rf7aKKqYgkPZM5OzGj4fmplmRTJWGJy1KwmVEt63pw4W9Z0n94miPsL1AGC60OkCohGseQIuHwXdh4eBNbOFLNiU77Zt39CnaKA7vl+5V8l8iq6uw== feras.out@gmail.com
