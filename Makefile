.PHONY: up down reset install
up:
	docker-compose up --build -d

down:
	docker-compose down --remove-orphans

reset: down up

install:
	docker-compose run php-cli make install
