docker run -d -p 80:80 \
    --name nginx-proxy \
    -v /var/run/docker.sock:/tmp/docker.sock:ro \
    --label com.github.jrcs.letsencrypt_nginx_proxy_companion.nginx_proxy \
    jwilder/nginx-proxy

sleep 10

cd docker

docker-compose pull
docker-compose up -d