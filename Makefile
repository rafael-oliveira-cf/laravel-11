.PHONY: init bash

init:
	docker-compose up -d --build

bash:
	docker-compose exec php bash
