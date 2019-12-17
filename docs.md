# Detailed Technical Documentation

## Web Server
The web server is the central component of the website. It is currently hosted as an instance on Amazon Web Services 
Elastic Compute Cloud ("AWS EC2").
- The instance runs Ubuntu 18.04 Server
- The instance is set up to automatically install updates and reboot when necessary
- An alarm is set on the instance that will reboot the instance if the automated status check
reports a failure condition
#### WordPress
WordPress is the content management system used by `thecarletonian.com`. Hence the name of this repository...
TODO explain the difference between wordpress.org and wordpress.com

## Image Storage
Images are stored in AWS Simple Storage Service (S3) to reduce costs and increase performance.

## Domain Name
The domain infrastructure is responsible for routing requests for `thecarletonian.com` to the web server.
The domain name is purchased and renewed (automatically) through AWS Route 53. Hosted zone configuration can be found
on the AWS console.

To increase performance and prevent DDoS,
the domain infrastructure is set up to route requests to CloudFlare, rather than directly to the web server...

## CloudFlare
CloudFlare receives requests for resources on `thecarletonian.com` and `cdn.thecarletonian.com`.
Resources are cached by CloudFlare and stored on their global content delivery network (CDN), improving
page load times for users.
It also prevents attacks on the actual web server, since the server's true IP address is not revealed.
