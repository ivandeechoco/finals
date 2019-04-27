FROM mariadb:latest

##ADD ./db.sql /docker-entrypoint-initdb.d
COPY student.sql /docker-entrypoint-initdb.d
ENV MYSQL_ROOT_PASSWORD = 1234
ENV MYSQL_DATABASE = cldadmi_finals
##ENV MYSQL_USER = cldadmi_finals
##ENV MYSQL_PASSWORD = Lsoizv7Q6l7O2Api
##RUN apt-get update && apt-get -y install vim

EXPOSE 3306

##CMD ["mysqld"]

