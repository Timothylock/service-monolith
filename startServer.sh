docker run -d -p 80:80 -p 443:443 \
    --name nginx-proxy \
    -v $(pwd)/src/nginx-proxy/certs:/etc/nginx/certs:ro \
    -v $(pwd)/src/nginx-proxy/vhost.d:/etc/nginx/vhost.d \
    -v $(pwd)/src/nginx-proxy/html:/usr/share/nginx/html \
    -v /var/run/docker.sock:/tmp/docker.sock:ro \
    --label com.github.jrcs.letsencrypt_nginx_proxy_companion.nginx_proxy \
    jwilder/nginx-proxy

sleep 5

docker run -d \
    -v $(pwd)/src/nginx-proxy/certs:/etc/nginx/certs:rw \
    -v /var/run/docker.sock:/var/run/docker.sock:ro \
    --volumes-from nginx-proxy \
    jrcs/letsencrypt-nginx-proxy-companion

cd docker

docker-compose pull
docker-compose up -d