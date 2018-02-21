FROM mhart/alpine-node:8

RUN apk upgrade --update
RUN apk add mongodb

WORKDIR /app
COPY ./src .

# If you have native dependencies, you'll need extra tools
# RUN apk add --no-cache make gcc g++ python

RUN npm install --production

EXPOSE 80
CMD ["node", "server.js"]