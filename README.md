# Security_Ninjas_AppSec_Training
OpenDNS Security Ninjas AppSec Training

Slide deck link-> http://www.slideshare.net/OpenDNS/security-ninjas-opensource

This hands-on training lab consists of 10 fun real world like hacking exercises, corresponding to each of the OWASP Top 10 vulnerabilities. Hints and solutions are provided along the way. Although the backend for this is written in PHP, vulnerabilities would remain the same across all web based languages, so the training would still be relevant even if you don’t actively code in PHP. 

Making the Hands-on Lab Work:

Docker instructions

I would highly recommend that you run the training in a docker container because of the following:

1. Setting up and destroying the environment would be super easy and quick.

2. The docker container would be sandboxed which means that the vulnerable application wouldn’t be able to harm the host OS.


Setup:

1. Setup docker https://docs.docker.com/installation/. There are many ways to do this depending on the OS you use.

2. Make sure docker has been installed correctly by running ‘docker version’.

3. Start the Application Security Training container by running the following command (I chose port 8899 to avoid port allocation conflicts):
    'docker run -d -p 8899:80 opendns/security-ninjas'

4. Get the IP address of your container:
    In my case the command was ‘boot2docker ip’ as I was running docker using boot2docker

5. Go to your web browser and enter {IP address from step 4}:8899

6. The training should be running now.
	
7. Kill the container after you are done.
    Go back to the terminal and type ‘docker ps’. Get the container id of the training

8. Then run ‘docker kill {container id}’


Running it using a web server:

If for some reason you are not able to run the training in a docker container, you may also run it using a web server. 

1. Download a web server (like Apache) and PHP.

2. Download the source code from here and put it in the directory where the web server looks for files to serve.

3. In the Security Ninjas sub-directory, change text file permissions - 'chmod 777 *.txt'

4. Make sure WHOIS is installed on the web server.

5. Start the web server and reach the application from your web browser.


The following steps are optional but recommended:

1. Install Firefox.

2. Install the FoxyProxy plugin for Firefox. Then: 
    - In select mode: Use proxy “Default” for all URLs. 
    - Configure the Default proxy to use 127.0.0.1:8080. 

3. You can delete or disable this plugin after the exercise.

4. Install Burp Suite free from http://portswigger.net/burp/download.html. You could use some other proxy tool as well.

5. You can get some basic Burp Suite tutorials from http://portswigger.net/burp/tutorials/

6. You can turn the proxy off for most of the exercises but for some, having the intercept on would make it much easier to inspect and alter the HTTP requests.

7. Run the training in Firefox.

---

CSS credits: html5up.net
