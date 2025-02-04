# Repository Pattern PHP Project

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![PHP Version](https://img.shields.io/badge/PHP-8.3-orange.svg)
![PHPUnit](https://img.shields.io/badge/PHPUnit-10.5.44-brightgreen.svg)

An implementation of the Repository Pattern in PHP 8.3, showcasing the use of interfaces to promote clean architecture, testability, and maintainability. This project includes unit tests using PHPUnit and follows best practices for dependency management.


## Overview

This project demonstrates the **Repository Pattern** in PHP, providing a clean separation between the data access layer and the business logic layer. By implementing interfaces, the project ensures that the data repositories can be easily swapped or modified without affecting other parts of the system.

## Benefits of Using Interfaces

Implementing interfaces within the Repository Pattern offers several advantages:

1. **Loose Coupling**: Promotes decoupling between different parts of the application, making it easier to manage and extend.
2. **Testability**: Facilitates mocking and stubbing in unit tests, enhancing the ability to test components in isolation.
3. **Flexibility**: Allows for different implementations of the same interface, enabling easy swapping or upgrading of data sources.
4. **Maintainability**: Improves code readability and organization, simplifying maintenance and future development.
5. **Adherence to SOLID Principles**: Specifically, the **Dependency Inversion Principle**, which states that high-level modules should not depend on low-level modules but on abstractions.

## Installation

Follow these steps to set up the project locally:

### Prerequisites

- **PHP 8.3** or higher
- **Composer** installed globally

### Steps

1. **Clone the Repository**

   ```bash
   git clone https://github.com/RobertJDevOP/prueba-tecnica-php-robertojimenez.git
   cd prueba-tecnica-php-robertojimenez

#### Step 2 install dependencies

```shell
composer install
```

#### Step 3 execute test suite

```shell
./vendor/bin/phpunit   
```

#### Step 4 run a php cs fixer

```shell
composer run-script php-cs-fixer
```

#### Step 5 run a php server if you want
```shell
php -S localhost:8000 -t public
