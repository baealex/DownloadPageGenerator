from django.shortcuts import render

def main_page(request):
    return render(request, 'main_page.html',{ })

def signup_page(request):
    return render(request, 'signup_page.html', { })
