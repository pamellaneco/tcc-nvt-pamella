install:
	docker-compose build --no-cache --force-rm
	docker-compose up -d
	docker exec laravel_tcc_nvt bash -c "composer install"
	docker exec -it laravel_tcc_nvt bash -c "php artisan key:gen"
	docker exec -it laravel_tcc_nvt bash -c "chown -R www-data:www-data ./"
	docker exec -it laravel_tcc_nvt bash -c "find ./ -type f -exec chmod 644 {} \;" 
	docker exec -it laravel_tcc_nvt bash -c "find ./ -type d -exec chmod 755 {} \;" 
