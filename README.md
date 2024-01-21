# Decode
> Application for decoding.
## Technologies
* PHP - version 8.3
* Symfony - version 6.4
* PostgreSQL - version 13.2

## Local Setup
```
docker compose up -d
```
```
docker compose exec php bin/console doctrine:migrations:migrate
```

## Decoding & Encoding Message
```
docker compose exec php bin/console decode:message
```
```
docker compose exec php bin/console encode:message
```

## Lcd
```
docker compose exec php bin/console display:number 05648139072
```

## Sql & Frontend
```
"http://decode.local:8099"
```

## Contact
* [GitHub](https://github.com/JakubSzczerba)
* [LinkedIn](https://www.linkedin.com/in/jakub-szczerba-3492751b4/)