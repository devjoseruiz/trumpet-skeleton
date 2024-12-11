# Trumpet Skeleton

<div align="center">

<img src="https://raw.githubusercontent.com/devjoseruiz/trumpet-skeleton/refs/heads/master/src/public/assets/img/favicon.svg" alt="Trumpet Logo" width="100">

A template project for the [Trumpet MVC Framework](https://github.com/devjoseruiz/trumpet).

</div>

## Getting Started

### Previus steps

1. Clone the repository: `git clone https://github.com/devjoseruiz/trumpet-skeleton.git`.
2. Create your own `.env` file based on the `.env.example` file: `cp .env.example .env`.
3. Customize the `.env` file to fit your needs.

### Docker installation (highly recommended)

1. Navigate to the project directory: `cd trumpet-skeleton`.
2. Install the dependencies: `docker-compose exec php composer install`.
3. Start the application: `docker-compose up -d`.
4. Run the migrations: `docker-compose exec php php migrations.php`.
5. You can access the application at `http://localhost:8080`.

### Local installation

1. Navigate to the source directory: `cd trumpet-skeleton/src`.
2. Install the dependencies: `composer install`.
3. Run the migrations: `php migrations.php`.
4. Run the application: `php -S localhost:8080 -t public/`.

## Documentation

For a detailed guide on how to use Trumpet, refer to our [documentation](https://devjoseruiz.github.io/trumpet).

## Contributing

We welcome contributions from the community. Please follow the [Contributing Guidelines](https://github.com/devjoseruiz/trumpet/blob/master/CONTRIBUTING.md) to contribute to the project.

## License

This project is released under the [GPLv3 License](https://github.com/devjoseruiz/trumpet/blob/master/LICENSE).
