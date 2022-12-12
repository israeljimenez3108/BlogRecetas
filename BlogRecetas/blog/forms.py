from django import forms

class BlogPostForm(forms.Form):

    titulo = forms.CharField(max_length=100)
    subtitulo = forms.CharField(max_length=100)
    texto = forms.CharField(max_length=1000)
    imagen = forms.ImageField()
    autor = forms.CharField(max_length=100)
    fecha = forms.DateField()
