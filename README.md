# Client Management API

## Описание
Этот проект представляет собой простое API для управления клиентами. API предоставляет возможность получить информацию о клиенте по его номеру телефона.

## Установка

### Предварительные требования
- PHP >= 7.4
- Composer
- MySQL

### Шаги по установке

1. Клонируйте репозиторий:
    ```sh
    git clone https://github.com/Appolonov1804/trial-exercise
    ```

2. Перейдите в директорию проекта:
    ```sh
    cd trial-exercise
    ```

3. Установите зависимости с помощью Composer:
    ```sh
    composer install
    ```

4. Создайте файл `.env` на основе `.env.example`:
    ```sh
    cp .env.example .env
    ```

5. Настройте параметры соединения с базой данных в файле `.env`.

6. Создайте базу данных:
    ```sh
    php artisan migrate
    ```

7. Заполните базу данных тестовыми данными (необязательно):
    ```sh
    php artisan db:seed
    ```

8. Запустите локальный сервер разработки:
    ```sh
    php artisan serve
    ```

## Использование

### Получение информации о клиенте

Эндпоинт для получения информации о клиенте по номеру телефона:


#### Параметры

- `phoneNumber` (string): Номер телефона клиента, информация о котором запрашивается.

#### Пример запроса

С помощью `curl`:

```sh
curl -X GET http://trial-exercise/trial-exercise/clients/show/1-681-681-1433



