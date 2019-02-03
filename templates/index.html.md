# Guide through MinusTravel API

# Used technologies
* PHP
* SLIM framework
* MySQL
* Microsoft Azure
* RESTFUL API

# Entity Relationship Diagram

![N|Solid](https://indefiles.file.core.windows.net/files/ERD_indieeCamper.png?sv=2018-03-28&si=files-1684C2B4DA5&sr=s&sig=nfz7dkZS72GXvkfbKOtck4H90v2kvuDKp4OlMHaqlZE%3D)

# API UML

![N|Solid](https://indefiles.file.core.windows.net/files/UML.png?sv=2018-03-28&si=files-1684C2B4DA5&sr=s&sig=nfz7dkZS72GXvkfbKOtck4H90v2kvuDKp4OlMHaqlZE%3D)

# API

Here is the API explained in detail: [https://indiecamper.azurewebsites.net](https://indiecamper.azurewebsites.net)

The source code is in [Github](https://github.com/Dav2015/indiecamper)

| Locations | Description |
| --- | --- |
| Near place from Passeio Marítimo de Algés & Bungalows,Lisbon | [https://indiecamper.azurewebsites.net/near?point=38.7018685,-9.2383682](https://indiecamper.azurewebsites.net/near?point=38.7018685,-9.2383682) |
| Lisbon -> Sagres | [https://indiecamper.azurewebsites.net/route?points=38.726675,-9.1468881;37.0323665,-9.016034](https://indiecamper.azurewebsites.net/route?points=38.726675,-9.1468881;37.0323665,-9.016034) |
| Lisbon -> Corunha -> Barcelona | [https://indiecamper.azurewebsites.net/route?points=38.726675,-9.1468881;43.3618688,-8.4477034;41.3947051,2.0086799](https://indiecamper.azurewebsites.net/route?points=38.726675,-9.1468881;43.3618688,-8.4477034;41.3947051,2.0086799) |

# API client

It was created a client that consume the API and creates a route in the map, for a better visual representation of the solution.

The source code is in Github:[client](https://github.com/Dav2015/indieclient)

| Locations | Description |
| --- | --- |
| Near place from Museu Nacional do Azulejo,Lisbon | [https://indieclient.azurewebsites.net/test/near?point=38.7018685,-9.2383682](https://indieclient.azurewebsites.net/test/near?point=38.7018685,-9.2383682) |
| Map to create your own routes | [https://indieclient.azurewebsites.net/test/map](https://indieclient.azurewebsites.net/test/map) |
| Lisbon -> Sagres | [https://indieclient.azurewebsites.net/test/route?points=38.726675,-9.1468881;37.0323665,-9.016034](https://indieclient.azurewebsites.net/test/route?points=38.726675,-9.1468881;37.0323665,-9.016034) " |
| Lisbon -> Corunha -> Barcelona | [https://indieclient.azurewebsites.net/test/route?points=38.726675,-9.1468881;43.3618688,-8.4477034;41.3947051,2.0086799](https://indieclient.azurewebsites.net/test/route?points=38.726675,-9.1468881;43.3618688,-8.4477034;41.3947051,2.0086799) |

# Note
Feel free to change the gps coordinates, but inside iberian peninsula, there is no data out .
The API is hosted in microsoft azure, in a development plan, sometimes is slower.
