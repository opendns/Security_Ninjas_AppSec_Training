FROM ubuntu:trusty
RUN apt-get -q update && apt-get install -y apache2 \
  php5 libapache2-mod-php5 php5-mcrypt php5-common whois
ADD src/Final /var/www/html
RUN chmod -R 755 /var/www/html &&\
  chmod 777 /var/www/html/user1.txt /var/www/html/user2.txt /var/www/html/comments.txt /var/www/html/management.txt
ADD php.ini /etc/php5/apache2/php.ini
ENV DEBIAN_FRONTEND noninteractive
CMD /usr/sbin/apache2ctl -D FOREGROUND
