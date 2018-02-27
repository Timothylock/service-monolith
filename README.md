# Service Monolith
All of the containers running on my server

# Getting Started
## Prerequisites
- [Docker Community Edition](https://www.docker.com/community-edition)
- `sudo apt-get install docker-compose`
- `docker network create nginx-proxy`

## Running
run `startServer.sh`

## Building
The docker pulls from dockerhub repo. All of these images are also on that repo. To build and push, navigate to `./src/CONTAINERNAME` and run `./build.sh`.

You must already be logged in to dockerhub to be able to push. If not, run `docker login`.

# Ports

While these ports aren't externally exposed or used by nginx-proxy, they are useful for local development. Not a great practice, but the dockerfile is shared between prod and dev so these ports are _theoretically_ exposed on prod as well. In my case, the firewall only opens up port 80 so its * fine * for now.


| External Port | Internal Port | Container Name    | URL (if reachable from internet)   |
|---------------|---------------|-------------------|------------------------------------|
| 80            | 80            | nginx-proxy       | ALL                                |
| 9000          | 80            | timothy-blog      | blog.timothylock.ca                |
| 9010          | 3306          | mysql             |                                    |
| 9011          | 80            | phpmyadmin        | phpmyadmin.timothylock.ca          |
| 9020          | 80            | timothy-portfolio | timothylock.ca                     |
| 9030          | 80            | markham8-blog     | 8thmarkham.com                     |
| 9031          | 80            | markham8-leaders  | leaders.8thmarkham.com             |
| 9040          | 80            | csc309-tb-exchange| uoftextbookexchange.timothylock.ca |
| 9041          | 27017         | csc309-mongodb    |                                    |
| 9050          | 80            | tim-Pi-monitor    | homemonitordemo.timothylock.ca     |
| 9060          | 80            | lock-family       | lockfamily.timothylock.ca lockfamily.ga    |
