# Service Monolith
All of the containers running on my server

# Prerequisites
- [Docker Community Edition](https://www.docker.com/community-edition)

# Ports

| External Port | Internal Port | Container Name    | URL (if reachable from internet)   |
|---------------|---------------|-------------------|------------------------------------|
| 9000          | 80            | timothy-blog      | blog.timothylock.ca                |
| 9010          | 3306          | mysql             |                                    |
| 9011          | 80            | phpmyadmin        | phpmyadmin.timothylock.ca          |
| 9020          | 80            | timothy-portfolio | timothylock.ca                     |
| 9030          | 80            | markham8-blog     | 8thmarkham.com                     |
| 9040          | 80            | csc309-tb-echange | uoftextbookexchange.timothylock.ca |
| 9041          | 27017         | csc309-mongodb    |                                    |