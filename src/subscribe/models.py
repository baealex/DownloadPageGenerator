from django.db import models

class Subscriber(models.Model):
    """
    E_MAIL = models.CharFueld(max_length=30)
    PASSWORD = hash
    CATEGORY_LIST = [python, c, php]
    VARIFY_MAIL = true
    NESLATTER = true
    """

class Category(models.Model):
    """
    SUBSCRIBER_COUNT = 122
    POPULAR_POST = [,,]
    NEW_POST = [,,,,]
    """