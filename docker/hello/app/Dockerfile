FROM ubuntu:latest

RUN echo "deb http://archive.ubuntu.com/ubuntu precise main universe" > /etc/apt/sources.list
RUN apt-get update
RUN apt-get -y install nginx

RUN echo "daemon off;" >> /etc/nginx/nginx.conf
RUN mkdir /etc/nginx/ssl
ADD default /etc/nginx/sites-available/default
RUN mkdir /var/www
RUN mkdir /var/www/html
COPY . /var/www/html

EXPOSE 80

CMD ["service nginx start"]
