#!/usr/bin/python
import os, sys

USERNAME = "psjinx"

venv = "/home/{0}/django-example-project/venv/bin/activate_this.py".format(USERNAME)
execfile(venv, dict(__file__=venv))

sys.path.insert(0, "/home/{0}/django-example-project/example_website".format(USERNAME))

os.environ['DJANGO_SETTINGS_MODULE'] = "example_website.settings"

from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="threaded", daemonize="false")
