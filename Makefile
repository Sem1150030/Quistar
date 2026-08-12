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

lint:
	vendor/bin/pint --parallel

lint-check:
	vendor/bin/pint --parallel --test

lint-dirty:
	vendor/bin/pint --dirty
