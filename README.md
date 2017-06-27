# Realtime chat with Pusher
A simple realtime chat application using Pusher to instantly deliver messages to everyone.

## Getting started

### Prerequisites
You will need to create an application over on [Pusher](https://pusher.com/) and make a note of the `app_id`, `key` and `secret`

### Installation
Create a .env file like the following;

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=chat
DB_USERNAME=root
DB_PASSWORD=

APP_KEY="xxxxxxxxxxx"
APP_SECRET="xxxxxxxxxxx"
APP_ID="xxxxxxxxxxx"
```

Run [Composer](https://getcomposer.org/) to install your dependencies;

`composer install`

## License
This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
