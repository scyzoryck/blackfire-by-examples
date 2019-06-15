# Blackfire by examples

## Running first Blackfire Player scenario

Let's start from downloading `phar` archive with Blackfire Player:

```bash
curl -OLsS https://get.blackfire.io/blackfire-player.phar
```

And execute `scenario.bkf` file with api test scenario 
```bash
php blackfire-player.phar run scenario.bkf -v
```

You have run your first test scenario! 

### Running Blackfire Player in Docker

You can build docker image with Blackfire Player with following command:

```bash
docker build -t blackfire-player docker/blackfire-player
```

And run test scenarios: 

```bash
docker run -v `pwd`:/app blackfire-player run scenario.bkf -v
```

## Testing apps running in docker

I've create a simple docker app, which counts Fibonacci Sequence (for no reason), and returns response same as previous api.

Let's run the app via:
```bash
docker-compose up -d 
``` 


```bash
docker run --network=symfony_live_warsaw -v `pwd`:/app blackfire-player run scenario.bkf -v --endpoint=http://nginx/
```

## Performance tests in Docker. 

To start profiling the performance of your app, you need to know your credentials. You can find it here:
https://blackfire.io/my/settings/credentials
To make your life easier, export it as a shell variables:
```
export BLACKFIRE_CLIENT_ID=<id>
export BLACKFIRE_CLIENT_TOKEN=<token>
export BLACKFIRE_SERVER_ID=<server-id>
export BLACKFIRE_SERVER_TOKEN=<server-token>
```

And recreate the containers: 
```
docker-compose up -d 
```

Now your app can be profiled with the Blackfire. 

```
docker-compose exec blackfire blackfire --samples=3 curl http://nginx/products/prices
```

### Performance tests with Blackfire Player.

Blackfire Player groups results of performance measurements into builds for better readability. Environments are available only to Premium and Enterprise users. You can check your envs here: https://blackfire.io/my/environments. 
                                                                                              
Let's use the same scenario as previous. We have already configure Blackfire credentials, so you only need to pass environment ID to our test execution:

```bash
docker run --network=symfony_live_warsaw -v `pwd`:/app blackfire-player run scenario.bkf -v --endpoint=http://nginx/ --blackfire-env=<id>
```
