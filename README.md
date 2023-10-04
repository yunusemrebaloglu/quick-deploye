# QuickDeploye

  

QuickDeploye is a Laravel package that allows you to trigger predefined deployment tasks via a simple HTTP request. It's a handy tool for automating common deployment tasks in your Laravel projects.

  

## Installation

  

You can install QuickDeploye via Composer. Run the following command in your Laravel project directory:

  

```

composer require yunusemrebaloglu/quick-deploye

```
  

## Configuration

  

You can configure QuickDeploye by adding the following variables to your `.env` file:

  

```env

QUICK_DEPLOYE_URL="/your/deployment/route"

QUICK_DEPLOYE_TOKEN="your-token"

QUICK_DEPLOYE_COMMANDS="npm run build,php artisan key:generate,php artisan config:clear, php artisan cache:clear"

```

  

-  `QUICK_DEPLOYE_URL`: The route where the deployment endpoint will be accessible.

-  `QUICK_DEPLOYE_TOKEN`: A secret token required to trigger deployments.

-  `QUICK_DEPLOYE_COMMANDS`: A comma-separated list of commands to execute during deployment.

  

To publish the package's configuration file, run the following command:

  

```

php artisan vendor:publish --tag=quick-deploye-config

```

  

This will copy the configuration file to your `config` directory where you can customize it.

  

## Usage

  

To trigger a deployment, make an HTTP GET request to the specified deployment route, including the token as a parameter. For example:

  

```

GET http://your-app-url/your/deployment/route/your-token

```

To see the active url value:

```

php artisan quick-deploy:generated_info

```
  

QuickDeploye will execute the defined commands and respond with the deployment status.

  

## Example

  

Here's an example of how to define the required configurations in your `.env` file:

  

```env

QUICK_DEPLOYE_URL="/yunusemrebaloglu/quick/deploye"

QUICK_DEPLOYE_TOKEN="your-token"

QUICK_DEPLOYE_COMMANDS="npm run build,php artisan migrate,php artisan config:clear, php artisan cache:clear"

```

  

Now, you can trigger a deployment by making an HTTP GET request to `http://your-app-url/yunusemrebaloglu/quick/deploye/your-token`.

  

## License

  

QuickDeploye is open-sourced software licensed under the [MIT license](LICENSE.md).
