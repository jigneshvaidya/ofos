echo "# ofos" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/jigneshvaidya/ofos.git
git push -u origin main

git remote add origin https://github.com/jigneshvaidya/ofos.git
git branch -M main
git push -u origin main

heroku login
heroku: Press any key to open up the browser to login or q to exit
 ›   Warning: If browser does not open, visit
 ›   https://cli-auth.heroku.com/auth/browser/***
heroku: Waiting for login...
Logging in... done
Logged in as me@example.com

git clone https://github.com/jigneshvaidya/ofos.git
cd ofos

heroku create
Creating app... done, stormy-bayou-48276
https://stormy-bayou-48276.herokuapp.com/ | https://git.heroku.com/stormy-bayou-48276.git

git push heroku master
remote: Compressing source files... done.
remote: Building source:
remote:
remote: -----> Gradle app detected
remote: -----> Spring Boot detected
remote: -----> Installing JDK 1.8... done
...

heroku ps:scale web=1

heroku open