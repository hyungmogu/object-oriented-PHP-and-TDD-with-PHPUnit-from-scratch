init_php:
	docker build -t php-app . &&\
	docker run -p 127.0.0.1:5002:80 php-app

run_php:
	docker image rm php-app --force &&\
	docker build -t php-app . &&\
	docker run -p 127.0.0.1:5002:80 php-app