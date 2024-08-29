FROM debian:bullseye

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y mariadb-server && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN mkdir /run/mysqld && \
    chown mysql:mysql /run/mysqld

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY init.sql /etc/mysql/init.sql

CMD [ "mysqld" ]