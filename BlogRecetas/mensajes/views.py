from django.shortcuts import render
from django.dispatch import receiver
from mensajes.models import *
from mensajes.forms import *

from django.views.generic import ListView
from django.views.generic.detail import DetailView
from django.views.generic.edit import CreateView, DeleteView

# Django authentication

from django.contrib.auth.mixins import LoginRequiredMixin

# Create your views here.

class MessagesList(LoginRequiredMixin, ListView):

    model = Mensaje
    template_name = "mensajes/message_list.html"

class MessageDetail(LoginRequiredMixin, DetailView):

    model = Mensaje
    template_name = "mensajes/message_detail.html"

class MessageCreate(LoginRequiredMixin, CreateView):

    model = Mensaje
    success_url = "/mensajes/"
    fields = ['title','sender', 'reciever', 'content', 'date']


class MessageDelete(LoginRequiredMixin, DeleteView):

    model = Mensaje
    success_url = "/mensajes/"