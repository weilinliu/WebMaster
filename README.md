# WebMaster
A class project for CSE 135  
Apache: http://157.230.155.30:8081  
Nginx: http://157.230.155.30:8082  
NodeJS: http://157.230.155.30:8083  


## Employ password protection
Apache
username: wel288
password: 12345

Nginx:
username:guest  
password:passwordforguest  

## Have a static team page
https://validator.w3.org/check?uri=http%3A%2F%2F157.230.155.30%3A8081%2F

https://validator.w3.org/check?uri=http%3A%2F%2F157.230.155.30%3A8082%2F

## Use custom error pages

## Have a favicon
A favicon, aka a shortcut icon, website icon, tab icon, is a file containing  
one or more small icons, associated with a particular website or web page.  

## Have a robots.txt file
http://157.230.155.30:8081/robots    
http://157.230.155.30:8082/robots 

## Deploy from Github
To deploy our status page and custom error page to our production server, we used git hooks. We first created an empty remote repository on the server just for the version control. Then on local git repository, we added a link to the remote repository. We can use the command "git push live master" to deploy changes to the server.(This method is posted on Slack by porcessor https://cse135winter2019.slack.com/archives/CF4C57H89/p1548203781054100?thread_ts=1548203781.054100)

## Log Properly
http://157.230.155.30:8081/awstats.mysite  
http://157.230.155.30:8082/awstats.mysite  

## Obscure server identity

## Compress textual content
Comparison report of gzip

Gzip compression works by searching for duplicate strings within a file and then replaces the second string with a pointer to the previous string. This helps greatly reduce the amount of actual text within a file as there is usually significant amount of whitespace and duplicate text.
As for server-to-browser communication, gzip works in the following way.
1. A browser which understands gzip makes a request for a file from the web server.
2. The server receives the request and notices that the browser understands gzip therefore returns a gzipped version of the requested file.
3. The browser receives the file, decompresses it, and is able to read the data.

Compressing content helps us save bandwith, and makes web applications faster.
The difference between apache and nginx server is compression is done from mod_deflate from apache, whereas in nginx server, compression is done in nginx.conf. However, what both apache and nginx server have is given the same input data and the same compression level setting, you will see virtually the same compression ratio with both implementations

![image](https://github.com/weilinliu/WebMaster/raw/master/img/apache.png)
![image](https://github.com/weilinliu/WebMaster/raw/master/img/nginx.png)


## Run PHP
http://157.230.155.30:8081/phpinfo  
http://157.230.155.30:8082/phpinfo  

## Deliver Clean URLS
