# HHVM + Proxygen Custom Runtime for Google App Engine

Basic sample of a [hhvm](https://hhvm.com/) app that runs on [Google App Engine](https://cloud.google.com/appengine) using the [`hhvm-proxygen`](https://hub.docker.com/r/hhvm/hhvm-proxygen) offical Docker image. This one also allows you to include dependencies using composer.

## Details

- `app.yaml` - Configuration file for App Engine. This just declares the runtime is custom and to use the Dockerfile to run the application.
- `Dockerfile` - Defines your docker image.
- `hhvm.prod.ini` - A basic server configuration file.
- `www/public/index.hack` - Both the default page and 404 page. This can be changed in the server configuration file.
- `www/public/test.php` - Basic php page to show that you can have both hack and php files in your app.
- `www/.hhconfig` - Empty file needs to be in place for hhvm-autoload to work properly.
- `www/composer.json` - This file describes the dependencies of your project and may contain other metadata as well.
- `www/hh_autoload.json` - hhvm-autoload generates this map, using an hh_autoload.json configuration file.
- `www/src/` - All directories in your hh_autoload.json must be present and cannot be empty, this directory will store your apps classes.
- `www/tests/` - All directories in your hh_autoload.json must be present and cannot be empty, this directory will store your apps tests.

## Deployment Prerequisites

1. Download and install [Cloud SDK](https://cloud.google.com/sdk/docs/)
2. Create a new project

```
gcloud projects create [YOUR_PROJECT_ID] --set-as-default
```

and verify project was created:

```
gcloud projects describe [YOUR_PROJECT_ID]
```

3. Initialize your App Engine app with your project and choose its region:

```
gcloud app create --project=[YOUR_PROJECT_ID]
```

4. You will need to make sure that billing [billing](https://console.cloud.google.com/projectselector/billing) is on for your project.

## Download Sample Apps

1. Clone this repo if you have not already

```
git clone https://github.com/jjdharmaraj/hhvm-app-engine-sample.git
```

2. Change the directory to where you cloned the repo on your machine, for example:

```
cd hhvm-app-engine-sample/with-composer

```

## Deploy to App Engine

1. When you are ready to deploy, type the following from the directory your `app.yaml` and `Dockerfile` are located:

```
gcloud app deploy
```

Deployment takes awhile, so use this as an opportunity to walk a little bit.

2. Once that is done deploying, you can view the live app at https://[YOUR_PROJECT_ID].appspot.com:

```
gcloud app browse
```

Should be noted that if you want to cleanup your resources and stop billing, the best way is to delete the project. [Manage GCP resources](https://console.cloud.google.com/iam-admin/projects)
