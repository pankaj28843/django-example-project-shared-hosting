#!/usr/bin/python
import os, sys


PROJECT_PATH = os.path.abspath(os.path.join(os.path.dirname( __file__ ),
                                            '../example_website'))

venv = os.path.abspath(os.path.join(os.path.dirname( __file__ ),
                                    '../venv/bin/activate_this.py'))
execfile(venv, dict(__file__=venv))

sys.path.insert(0, "{0}/../example_website".format(PROJECT_PATH))

os.environ['DJANGO_SETTINGS_MODULE'] = "example_website.settings"

from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="threaded", daemonize="false")
