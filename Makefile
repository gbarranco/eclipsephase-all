.PHONY: up down reset
up:
	docker-compose up --build -d

down:
	docker-compose down --remove-orphans

reset: down up
