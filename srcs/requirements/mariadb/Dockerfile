FROM debian:bullseye

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y mariadb-server && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN mkdir /run/mysqld && \
    chown mysql:mysql /run/mysqld

RUN chown -R mysql:mysql /var/lib/mysql
RUN chmod -R 755 /var/lib/mysql

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY installmdb.sh /usr/local/bin/installmdb.sh
RUN chmod +x /usr/local/bin/installmdb.sh
CMD ["/usr/local/bin/installmdb.sh"]