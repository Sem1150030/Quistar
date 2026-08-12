reset:
	php artisan migrate:fresh --seed

migrate:
	php artisan migrate

run:
	npm run dev
	php artisan serve

queue:
	php artisan queue:work

schedule:
	php artisan schedule:work
