from django.db import models
from datetime import datetime

# Create your models here.

class Posts(models.Model):

    id = models.AutoField(primary_key=True)
    titulo = models.CharField(max_length=100)
    subtitulo = models.CharField(max_length=100)
    texto = models.CharField(max_length=1000)
    imagen = models.ImageField(upload_to='images', null=True, blank=True)
    autor = models.CharField(max_length=100)
    fecha = models.DateField(default=datetime.now)

    def __str__(self) -> str:
        return f'{self.titulo} escrito por {self.autor}'