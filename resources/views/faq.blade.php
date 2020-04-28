
@extends('layouts.master')

@section('titulo')
    - Sobre nosotros
@endsection
@section('contenido')       
    <section id="faq" style="padding: 2px;margin: 11px;">
        <hr class="star-dark mb-5">
        <h2 class="text-uppercase text-center" style="font-size: 48;">FAQ</h2><br >
        <div class="container">
            <div class="faqelement"><button class="btn btn-primary faq on" type="button" style="box-shadow: none;">Questions&nbsp;</button>
                <div class="panel">
                    <p>Answer</p>
                </div>
            </div><br >
            <div class="faqelement"><button class="btn btn-primary faq on" type="button" style="box-shadow: none;">Questions&nbsp;</button>
                <div class="panel">
                    <p>Answer</p>
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="star-dark mb-5">
        </div>
    </section>

    <script src="/js/faq.js"></script>
    @endsection