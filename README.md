# HHVM + Proxygen Custom Runtime for Google App Engine

Basic samples of [hhvm](https://hhvm.com/) apps that run on [Google App Engine](https://cloud.google.com/appengine) using the [`hhvm-proxygen`](https://hub.docker.com/r/hhvm/hhvm-proxygen) offical Docker image.

## Useful HHVM Resources

These are just a few links I found really helpful:

1. [https://docs.hhvm.com/hack/getting-started/starting-a-real-project](https://docs.hhvm.com/hack/getting-started/starting-a-real-project)
2. [https://github.com/hhvm/hhvm-autoload](https://github.com/hhvm/hhvm-autoload)
3. [https://hub.docker.com/r/hhvm/hhvm-proxygen](https://hub.docker.com/r/hhvm/hhvm-proxygen)

## Deployment Overview

1. Create a new project

```
gcloud projects create [YOUR_PROJECT_ID] --set-as-default
```

2. Initialize your App Engine app with your project and choose its region:

```
gcloud app create --project=[YOUR_PROJECT_ID]
```

3. Change the directory to where you cloned the repo on your machine and then deploy:

```
gcloud app deploy
```

Deployment takes awhile, so use this as an opportunity to walk a little bit.

4. Once that is done deploying, you can view the live app at https://[YOUR_PROJECT_ID].appspot.com:

```
gcloud app browse
```

Should be noted that if you want to cleanup your resources and stop billing, the best way is to delete the project. [Manage GCP resources](https://console.cloud.google.com/iam-admin/projects)

## TODO

1. In order to get composer to work with HHVM, my solution is a little hacky. I am sure there is a more elegant solution.
