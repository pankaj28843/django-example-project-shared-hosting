#Description
This is an example django project which can be hosted on shared hosting providers.

Currenly hosted on [https://www.alwaysdata.com/](https://www.alwaysdata.com/)

#Installation

```bash
## clone this repository after logging into you shared hosting account via ssh
git clone https://github.com/psjinx/django-example-project-shared-hosting.git django-example-project/
## `cd` into cloned directory
cd django-example-project/
## create a virtualenv in this folder
virtualenv --no-site-packages venv/
## Activate newly created virtualenv
source venv/bin/activate
## Install pip requirements
pip install -r requirements.txt
## `cd` to django project folder and sync database
cd example_project
python manage.py syncdb

```

Now map `www` root for your django website to `public` folder of this project, i.e. `django-example-project/public`


#Notes

This poject was created in process of answering two questions on stackoverflow
 1. [http://stackoverflow.com/a/14398734/353550](http://stackoverflow.com/a/14398734/353550)
 2. [http://stackoverflow.com/a/14400206/353550](http://stackoverflow.com/a/14400206/353550)
