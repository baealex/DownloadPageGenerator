from django.shortcuts import render

def login_page(request):
    return render(request, 'login_page.html',{ })

def signup_page(request):
    return render(request, 'signup_page.html', { })

def home_page(request):
    return render(request, 'home_page.html', { })
    
def setting_page(request):
    return render(request, 'setting_page.html', { })