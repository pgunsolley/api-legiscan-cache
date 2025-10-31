# LegiScan Cache

## ORM-backed cache service for https://legiscan.com/

Unlike my other LegiScan cache API (that cached api responses as .json docs due to shared-host limitations preventing the deployment of actual cache servers), this service is backed by a relational database, providing better data management and security.