LARAVEL

composer create-project laravel/laravel "nazwaprojektu"     # Utowrzenie projektu w laravel w folderze 
cd "nazwaprojektu"   # Przejście do katalogu projektu

DOCKER

docker-compose down -v    # Wyłącz i usuń volumen
docker-compose up --build    # Zbuduj kontener na podstawie 
docker-compose up     # Włącz kontener
docker-compose up -d    # Włącz kontener w tle 

W przypadku błędów

Zmienić port db na 3307:3306
Zmienić port w .env dla PHPMYADMIN na np. 8087


docker exec -it myapp-app-1 bash   # Wejście do terminala kontenera (do instalacji paczek np. npm, composer itp.)

npm install # Instalacja paczki npm
npm install --save-dev sass   # Zainstalowanie SCSS

SASS

docker exec -it "nazwa-kontenera-docker" npm run watch  # Uruchomienie watchera SCSS

LRAVEL 

docker exec -it "nazwa-kontenera-docker" php artisan migrate  # Wykonanie migracji bazy danych

PRODUKCJA DO FTP

cp -r "nazwa-projektu" "nazwa-projektu"-prod  # Klonowanie projektu do wersji produkcyjnej (aby użyć komend do wdrożenia na FTP)

cd "nazwa-projektu"-prod
docker compose up -d

# ZESTAW KOMEND DO WPISANIA W PRODUKCJI #

docker exec -it "nazwa-projektu" composer install --optimize-autoloader --no-dev
docker exec -it "nazwa-projektu" npm run build
docker exec -it "nazwa-projektu" php artisan config:cache
docker exec -it "nazwa-projektu" php artisan route:cache
docker exec -it "nazwa-projektu" php artisan view:cache

PRZENIESIENIE PLIKÓW I MIGRACJA BAZY

GITHUB

git init  # Inicjalizacja github
git add .  # Dodanie wszystkich plików 
git commit -m ""   # Przygotowanie zmiany do wypchnięcia do gita / -m " " służy do opisu zmiany 
git remote add origin https://github.com/kiwi0020/ {nazwa wcześniej utworzonego repozytorium}.git    # Połączenie projektu z repozytorium
git push -u origin master   # Wypchnij pierwszy commit
git push    # Wypychanie kolejnych commitów