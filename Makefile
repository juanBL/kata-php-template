test:
	docker-compose run --rm phpunit

start:
	docker-compose run --rm composer install

init: start test

install:
	docker-compose run --rm composer require $(dependency)