@extends('admin.layout.crud')

@section('table')
    <div class="client-column">
        <div class="filter">
            <div class= "filter-svg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>filter-menu</title><path d="M11 11L16.76 3.62A1 1 0 0 0 16.59 2.22A1 1 0 0 0 16 2H2A1 1 0 0 0 1.38 2.22A1 1 0 0 0 1.21 3.62L7 11V16.87A1 1 0 0 0 7.29 17.7L9.29 19.7A1 1 0 0 0 10.7 19.7A1 1 0 0 0 11 18.87V11M13 16L18 21L23 16Z" />
                </svg>
            </div>
        </div>
        <div class="table">
            <div class="client-item">
                <div class="client-item-images">
                    <div class="edit-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>pencil</title><path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                        </svg>
                    </div>
                    <div class="delete-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>delete</title><path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                        </svg>
                    </div>
                </div>
                <div class="client-item-data">
                    <div class="data-row">
                        <h3>Email:</h3>
                        <h3>Nombre:</h3>
                        <h3>Apellidos:</h3>
                    </div>
                </div>
            </div>
            <div class="client-item">
                <div class="client-item-images">
                    <div class="edit-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>pencil</title><path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                        </svg>
                    </div>
                    <div class="delete-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>delete</title><path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                        </svg>
                    </div>
                </div>
                <div class="client-item-data">
                    <div class="data-row">
                        <h3>Email:</h3>
                        <h3>Nombre:</h3>
                        <h3>Apellidos:</h3>
                    </div>
                </div>
            </div>
            <div class="client-item">
                <div class="client-item-images">
                    <div class="edit-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>pencil</title><path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                        </svg>
                    </div>
                    <div class="delete-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>delete</title><path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                        </svg>
                    </div>
                </div>
                <div class="client-item-data">
                    <div class="data-row">
                        <h3>Email:</h3>
                        <h3>Nombre:</h3>
                        <h3>Apellidos:</h3>
                    </div>
                </div>
            </div>
            <div class="client-item">
                <div class="client-item-images">
                    <div class="edit-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>pencil</title><path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                        </svg>
                    </div>
                    <div class="delete-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>delete</title><path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                        </svg>
                    </div>
                </div>
                <div class="client-item-data">
                    <div class="data-row">
                        <h3>Email:</h3>
                        <h3>Nombre:</h3>
                        <h3>Apellidos:</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-counter">
            <div class="counter-info">
                <div class="info-registers">
                    <p>{{trans_choice('admin/pagination.total',  4, ['count' => 4])}}</p>
                </div>
                <div class="info-page">
                    <p>Página 1 de 1</p>
                </div>
            </div>
            <div class="page-counter-buttons">
                <div class="counter-button first">
                    <p>Primera</p>
                </div>
                <div class="counter-button previous">
                    <p>Anterior</p>
                </div>
                <div class="counter-button next">
                    <p>Siguiente</p>
                </div>
                <div class="counter-button last">
                    <p>Última</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('form')
    <form class="admin-form">
        <div class="image-menu">
            <div class="image-menu-title">
                <div class="image-menu-title-principal active image-menu-button" data-value= "1">
                    <h3>Principal</h3>
                </div>
                <div class="image-menu-title-imagenes image-menu-button" data-value= "2">
                    <h3>Imágenes</h3>
                </div>
            </div>
            <div class="image-menu-svg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>broom</title><path d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" />
                </svg>
                <div class="send-form-button"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>content-save</title><path d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" /></svg></div>
            </div>
        </div>
        <div class="form-row active" data-value= "1">
            <input name="id" type="hidden">
            <div class="form-element">
                <div class="element-placeholder">
                    <p>Nombre de usuario</p>
                </div>
                <input name="name" type="text">
            </div>
            <div class="form-element">
                <div class="element-placeholder">
                    <p>Email</p>
                </div>
                <input name="email" type="text">
            </div>
        </div>
        <div class="form-row active" data-value= "1">
            <div class="form-element">
                <div class="element-placeholder">
                    <p>Contraseña</p>
                </div>
                <input name="password" type="password">
            </div>
            <div class="form-element">
                <div class="element-placeholder">
                    <p>Confirma Contraseña</p>
                </div>
                <input name="confirmPassword" type="password">
            </div>
        </div>

        <div class="form-row" data-value= "2">
            <div class= "form-element url-element">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>tab-plus</title><path d="M3,3A2,2 0 0,0 1,5V19A2,2 0 0,0 3,21H21A2,2 0 0,0 23,19V5A2,2 0 0,0 21,3H3M3,5H13V9H21V19H3V5M10,10V13H7V15H10V18H12V15H15V13H12V10H10Z" /></svg>
            </div>
        </div>
    </form>
@endsection