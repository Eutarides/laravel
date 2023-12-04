@extends('admin.layout.master')

@section('content')
    <section>
        <div class="overlay">
            <div class="modal">
                <div class="modal-message">
                    <p>¿Desea borrar este registro?</p>
                </div>
                <div class="modal-buttons">
                    <div class="modal-confirm-button"> 
                        <button>Si</button>
                    </div>
                    <div class="modal-deny-button">
                        <button>No</button>
                    </div>
                </div>              
            </div>
        </div>
        <div class="overlay">
            <div class="overlay-menu">
                <button class="overlay-button active" data-value="1">Imágenes</button>
                <button class="overlay-button" data-value="2">Galería</button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>close</title><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
            </div>
            <div class="image-overlay row active" data-value="1">
                <div class="image-overlay-title">
                    <p>Selecciona una imágen.</p>
                </div>
                <div class="image-overlay-svg">
                    <input type="file" id="file-input" style="display: none;">
                    <label for="file-input">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>tab-plus</title><path d="M3,3A2,2 0 0,0 1,5V19A2,2 0 0,0 3,21H21A2,2 0 0,0 23,19V5A2,2 0 0,0 21,3H3M3,5H13V9H21V19H3V5M10,10V13H7V15H10V18H12V15H15V13H12V10H10Z" /></svg>
                    </label>                
                </div>
            </div>
            <div class="gallery-overlay row" data-value="2">
                <div class="gallery-overlay-menu">
                    <p>Título</p>
                    <input class="title">
                    <p>Texto alternativo</p>
                    <input class="alt">
                </div>
                <button>Elegir imagen</button>
            </div>
        </div>
    </section>
    <div class="data-management">
        <div class="client-column">
            @yield('table')
        </div>
        <div class="client-form">
            @yield('form')
        </div>
        <div class="overlay">
            <div class="overlay">
                <div class="modal">
                    <div class="modal-message">
                        <p>¿Desea borrar este registro?</p>
                    </div>
                    <div class="modal-buttons">
                        <div class="modal-confirm-button">
                            <button>Si</button>
                        </div>
                        <div class="modal-deny-button">
                            <button>No</button>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </div>
@endsection