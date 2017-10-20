#!/bin/sh
set -e

# first arg is `-f` or `--some-option`
if [ "${1#-}" != "$1" ]; then
	set -- php-fpm "$@"
fi

if [ "$UID" ]; then
	usermod -u "$UID" www-data
	groupmod -g "$UID" www-data
fi

exec "$@"