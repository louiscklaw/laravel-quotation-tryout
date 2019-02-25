FROM mattrayner/lamp:latest-1604-php7

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
    apt-get upgrade -qqy && \
    apt-get -y autoremove && \
    apt-get clean

ENV PHP_UPLOAD_MAX_FILESIZE 50M
ENV PHP_POST_MAX_SIZE 50M

# respect the port and command by the image
EXPOSE 80 3306

CMD ["/run.sh"]
