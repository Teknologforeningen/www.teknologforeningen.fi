.PHONY: internal-target test

test:
	bash -c "trap 'trap - SIGINT SIGTERM ERR; docker-compose down -v; exit 1' SIGINT SIGTERM ERR; $(MAKE) internal-target"
internal-target:
	docker-compose up --build
